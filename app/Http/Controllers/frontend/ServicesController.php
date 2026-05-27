<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services_section;

class ServicesController extends Controller
{
    public function index()
    {
        $services = services_section::latest()->get();
        return view('frontend.services',compact('services'));
    }
}
