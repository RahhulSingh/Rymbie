<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\How_work_section;
class How_work_sectionController extends Controller
{
    public function index()
    {
        $how_work_sections =how_work_section::all();
        return view('admin.how_work_section.index', compact('how_work_sections'));
    }

    public function create()
    {
        return view('admin.how_work_section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'section_key' => 'required|unique:how_work_sections,section_key',
            'title' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        how_work_section::create($request->all());

        return redirect()->route('how_work_section.index')->with('success', 'section created successfully.');
    }

    public function edit($id)
    {
        $how = how_work_section::findOrFail($id);
        return view('admin.how_work_section.create', compact('how'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'section_key' => 'nullable|unique:how_work_sections,section_key,' . $id,
            'title' => 'nullable|string|max:255',
            'description' => 'nullable|string|max:255',
        ]);

        $how_work_section = how_work_section::findOrFail($id);
        $how_work_section->update($request->all());

        return redirect()->route('how_work_section.index')->with('success', 'section updated successfully.');
    }

    public function delete($id)
    {
        $how_work_section = how_work_section::findOrFail($id);
        $how_work_section->delete();
        return redirect()->route('how_work_section.index')->with('success', 'section deleted successfully.');
    }
}
