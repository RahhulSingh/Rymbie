<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Res_guidesController extends Controller
{
    public function index()
    {
        $res_guides = res_guide::();
        return view('res_guides.index');
    }

    public function create()
    {
        return view('res_guides.create');
    }

    public function store(Request $request)
    {
        // Validate and store the new resource guide
        // ...
        return redirect()->route('res_guides.index');
    }

    public function edit($id)
    {
        // Retrieve the resource guide by $id and pass it to the edit view
        // ...
        return view('res_guides.create');
    }

    public function update(Request $request, $id)
    {
        // Validate and update the resource guide with $id
        // ...
        return redirect()->route('res_guides.index');
    }

    public function delete($id)
    {
        // Delete the resource guide with $id
        // ...
        return redirect()->route('res_guides.index');
    }
}
