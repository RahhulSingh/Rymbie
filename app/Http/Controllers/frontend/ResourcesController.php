<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\res_hero;
use App\Models\res_guide;
use App\Models\res_tool;
use App\Models\res_article;
class ResourcesController extends Controller
{
    public function index()
    {
        $res_hero=res_hero::first();
        $res_guides=res_guide::all();
        $res_tools=res_tool::all();
        $res_articles=res_article::all();
        return view('frontend.resources', compact('res_hero', 'res_guides', 'res_tools', 'res_articles'));
    }
}
