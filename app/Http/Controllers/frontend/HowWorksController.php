<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\how_work_section;
use App\Models\assignments_title_section;
use App\Models\works_best_section;
class HowWorksController extends Controller
{
    public function index()
    {
        $data=how_work_section::get()->keyBy('section_key');
        $assignments=assignments_title_section::get();
        $works_best=works_best_section::get();
        // dd($works_best);
        return view('frontend.how_works',compact('data','assignments','works_best'));
    }
}
