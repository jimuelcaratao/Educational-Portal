<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class PaperController extends Controller
{
    public function index()
    {
        $tableThesis = Thesis::all();

        if ($tableThesis->isEmpty()) {
            $thesis = Thesis::latest()->paginate();
        }

        if ($tableThesis->isNotEmpty()) {
            // search validation
            $search = Thesis::thesisfilter()
                ->first();

            if ($search === null) {
                return redirect('thesis')->with('info', 'No "' . request()->search . '" found in the database.');
            }

            if ($search != null) {
                // default returning
                $thesis = Thesis::thesisfilter()
                    ->latest()
                    ->paginate(10);
            }
        }

        return view('pages.admin.papers', [
            'thesis' =>   $thesis,
        ]);
    }

    public function edit($slug)
    {
        if (is_null($slug)) {
            abort(403);
        }

        $thesis = Thesis::where('slug', $slug)->first();

        return view('pages.admin.edit-paper', [
            'thesis' =>   $thesis,
        ]);
    }

    public function update(Request $request, $thesis_id)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'body' => 'required',
            'author_name' => 'required',
            'section' => 'required',
            'year' => 'required',
            'course' => 'required',
            'published_date' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                ->with('toast_error', $validator->messages()->all())
                ->withInput();
        }
        Thesis::where('thesis_id',  $thesis_id)->update([
            'title' => $request->input('title'),
            'slug' => Str::of($request->input('title'))->slug('-'),
            'body' => $request->input('body'),
            'thesis_status' => $request->input('thesis_status'),
            'author_name' => $request->input('author_name'),
            'section' => $request->input('section'),
            'year' => $request->input('year'),
            'course' => $request->input('course'),
            'published_date' => $request->input('published_date'),
        ]);

        // PDF
        if ($request->hasFile('default_photo') != null) {
            // create images
            $pdf_file = $request->file('default_photo');
            $filename    = $pdf_file->getClientOriginalName();

            $pdf = $pdf_file;
            $content = $pdf->getContent();
            Storage::put('public/thesis/' . $thesis_id . '_' . $filename, $content);
            ini_set('memory_limit', '256M');

            // insert path to db
            $char = strval($filename);
            Thesis::where('thesis_id', $thesis_id)
                ->update([
                    'pdf' => $char,
                ]);
        }
        return Redirect::route('admin.thesis')->withSuccess('Thesis :' . $request->input('title') . '. Updated Successfully!');
    }

    public function post($slug)
    {
        if (is_null($slug)) {
            abort(403);
        }

        $thesis = Thesis::where('slug', $slug)->first();

        return view('pages.single-thesis', [
            'thesis' =>   $thesis,
        ]);
    }

    public function destroy($thesis_id)
    {
        if (is_null($thesis_id)) {
            return Redirect::route('admin.thesis')->withInfo('Something went wrong!');
        }
        // Softdeletes
        Thesis::find($thesis_id)->delete();

        return Redirect::route('admin.thesis')->withSuccess('Thesis deleted Successfully!');
    }
}
