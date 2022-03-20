<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfessorsController extends Controller
{
    public function index()
    {
        return view('pages.users.professors');
    }
}
