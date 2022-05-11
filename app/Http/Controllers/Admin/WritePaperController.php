<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use App\Models\Thesis;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\ImageManagerStatic as Image;
use Barryvdh\DomPDF\Facade\Pdf;

class WritePaperController extends Controller
{
    public function index()
    {
        return view('pages.admin.write-paper');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:thesis',
            'body' => 'required',
            'default_photo' => 'required',
            'author_name' => 'required',
            'section' => 'required',
            'year' => 'required',
            'course' => 'required',
            'published_date' => 'required',
        ]);

        if ($validator->fails()) {
            return Redirect::route('thesis.write')
                ->with('toast_error', $validator->messages()->all())
                ->withInput();
        }

        $thesis = Thesis::create([
            'user_id' => Auth::user()->id,
            'title' => $request->input('title'),
            'slug' => Str::of($request->input('title'))->slug('-'),
            'body' => $request->input('body'),
            'thesis_status' => 'Active',
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
            $thesis_id =  $thesis->thesis_id;

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
        return Redirect::route('admin.thesis')->withSuccess('Thesis :' . $request->input('title') . '. Created Successfully!');
    }
}
