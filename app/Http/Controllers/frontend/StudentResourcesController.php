<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StudentResourcesController extends Controller
{
    public function index()
    {
        return view('frontend.student_resources');
    }
}
