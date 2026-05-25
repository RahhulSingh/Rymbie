<?php

namespace App\Http\Controllers\frontend;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hero_section;
use App\Models\step_process_section;
use App\Models\academic_services_section;
class HomeController extends Controller
{
    public function index()
    {
        $hero=hero_section::latest()->first();
        $steps=step_process_section::latest()->get();
        $academic=academic_services_section::get();
        return view('frontend.home',compact('hero','steps','academic'));
    }
}
