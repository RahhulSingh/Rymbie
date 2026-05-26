<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProgramStackController extends Controller
{
    public function index()
    {
        return view('frontend.program_stack');
    }
}
