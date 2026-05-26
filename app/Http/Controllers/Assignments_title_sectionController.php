<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\assignments_title_section;

class Assignments_title_sectionController extends Controller
{
    public function index()
    {
        $assignments=assignments_title_section::latest()->get();
        return view('admin.assignments_title_section.index',compact('assignments'));
    }

    public function create()
    {
        return view('admin.assignments_title_section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon'=>'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'title'=>'required|string|max:255',
            'description'=>'required|string|max:255',
        ]);

        $icon =null;

        if($request->hasFile('icon'))
            {
                $icon=time().'.'.$request->icon->extension();
                $request->icon->move(public_path('uploads/assignments_title_section'),$icon);
            }

        assignments_title_section::create([
            'icon'=>$icon,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect()->route('assignments_title_section.index')->with('success', 'Section created successfully.');
    }

    public function edit($id)
    {
        $assignment=assignments_title_section::findOrFail($id);
        return view('admin.assignments_title_section.create',compact('assignment'));
    }

    public function update(Request $request,$id)
    {
        $request->validate([
            'icon'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'title'=>'nullable|string|max:255',
            'description'=>'nullable|string|max:255',
        ]);

        $assignment=assignments_title_section::findOrFail($id);

        $icon = $assignment->icon;

        if($request->hasFile('icon'))
            {
                if($icon && file_exists(public_path('uploads/assignments_title_section/'.$icon)))
                {
                    unlink(public_path('uploads/assignments_title_section/'.$icon));
                }
                $icon=time().'.'.$request->icon->extension();
                $request->icon->move(public_path('uploads/assignments_title_section'),$icon);
            }

        $assignment->update([
            'icon'=>$icon,
            'title'=>$request->title,
            'description'=>$request->description,
        ]);

        return redirect()->route('assignments_title_section.index')->with('success', 'Section updated successfully.');
    }

    public function delete($id)
    {
        $assignment=assignments_title_section::findOrFail($id);

        if($assignment->icon && file_exists(public_path('uploads/assignments_title_section/'.$assignment->icon)))
        {
            unlink(public_path('uploads/assignments_title_section/'.$assignment->icon));
        }

        $assignment->delete();
        return redirect()->route('assignments_title_section.index')->with('success', 'Section deleted successfully.');
    }
}
