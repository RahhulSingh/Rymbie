<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\step_process_section;
class step_process_sectionController extends Controller
{
    public function  index()
    {
        $steps=step_process_section::latest()->get();
        return view('admin.step_process_section.index',compact('steps'));
    }
    public function  create()
    {
        return view('admin.step_process_section.create');
    }
    public function  store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
        ]);
        step_process_section::create([
        'title'   => $request->title,
        ]);

        return redirect()->route('step_process_section.index')->with('success', 'Section created successfully.');
    }
    public function  edit($id)
    {
        $step=step_process_section::findOrFail($id);
        return view('admin.step_process_section.create',compact('step'));
    }
    public function  update(Request $request, $id)
    {
        $step=step_process_section::findOrFail($id);
        $request->validate([
            'title'=>'nullable|string|max:255',
        ]);
        $step->update([
        'title'   => $request->title,
        ]);

        return redirect()->route('step_process_section.index')->with('success', 'Section updated successfully.');
    }
    public function  delete($id)
    {
        $step=step_process_section::findOrFail($id);
        $step->delete();
        return redirect()->route('step_process_section.index')->with('success', 'Section delete successfully.');
    }
}
