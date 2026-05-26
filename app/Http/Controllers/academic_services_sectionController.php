<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\academic_services_section;

class Academic_services_sectionController extends Controller
{
    public function  index()
    {
        $academics=academic_services_section::latest()->get();
        return view('admin.academic_services_section.index',compact('academics'));
    }
    public function  create()
    {
        return view('admin.academic_services_section.create');
    }
    public function  store(Request $request)
    {
        $request->validate([
            'icon'=>'required|string|max:255',
            'title'=>'required|string|max:255',
        ]);
        academic_services_section::create([
        'icon' => $request->icon,
        'title'   => $request->title,
        ]);

        return redirect()->route('academic_services_section.index')->with('success', 'Section created successfully.');
    }
    public function  edit($id)
    {
        $academic=academic_services_section::findOrFail($id);
        return view('admin.academic_services_section.create',compact('academic'));
    }
    public function  update(Request $request, $id)
    {
        $academic=academic_services_section::findOrFail($id);
        $request->validate([
            'icon'=>'nullable|string|max:255',
            'title'=>'nullable|string|max:255',
        ]);
        $academic->update([
        'icon' => $request->icon,   
        'title'   => $request->title,
        ]);

        return redirect()->route('academic_services_section.index')->with('success', 'Section updated successfully.');
    }
    public function  delete($id)
    {
        $academic=academic_services_section::findOrFail($id);
        $academic->delete();
        return redirect()->route('academic_services_section.index')->with('success', 'Section delete successfully.');
    }
}       


              
