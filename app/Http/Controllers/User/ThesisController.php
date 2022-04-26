<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Thesis;
use Illuminate\Http\Request;

class ThesisController extends Controller
{
    public function index()
    {
        $first_year = Thesis::where('year', '1')->get();

        $second_year = Thesis::where('year', '2')->get();

        $third_year = Thesis::where('year', '3')->get();

        $fourth_year = Thesis::where('year', '4')->get();

        return view('pages.users.thesis', [
            'first_year' => $first_year,
            'second_year' => $second_year,
            'third_year' => $third_year,
            'fourth_year' => $fourth_year,
        ]);
    }
}
