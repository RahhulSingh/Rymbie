<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contactus_socalmediya;
class Contactus_socalmediyaController extends Controller
{
    public function index()
    {
        $contactus_socalmediyas = contactus_socalmediya::get();
        return view('admin.contactus_socalmediya.index', compact('contactus_socalmediyas'));
    }

    public function create()
    {
        return view('admin.contactus_socalmediya.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'content' => 'required|string|max:255',
        ]);

        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('uploads/contactus_socalmediya'), $imageName);    
        contactus_socalmediya::create([
            'title' => $request->title,
            'image' => $imageName,
            'content' => $request->content,
        ]); 

        return redirect()->route('contactus_socalmediya.index')->with('success', 'Contactus Socalmediya created successfully.');

    }

    public function edit($id)
    {
        $contactus_socalmediya = contactus_socalmediya::findOrFail($id);
        return view('admin.contactus_socalmediya.create', compact('contactus_socalmediya'));
    }

    public function update(Request $request, $id)
    {
        $contactus_socalmediya = contactus_socalmediya::findOrFail($id);
        $request->validate([
            'title' => 'nullable|string|max:255',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:1048',
            'content' => 'nullable|string|max:255',
        ]);

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/contactus_socalmediya'), $imageName);
            $contactus_socalmediya->image = $imageName;
        }

        $contactus_socalmediya->title = $request->title;
        $contactus_socalmediya->content = $request->content;
        $contactus_socalmediya->save();

        return redirect()->route('contactus_socalmediya.index')->with('success', 'Contactus Socalmediya updated successfully.');
    }

    public function delete($id)
    {
        $contactus_socalmediya = contactus_socalmediya::findOrFail($id);
        if(file_exists(public_path('uploads/contactus_socalmediya/' . $contactus_socalmediya->image))) {
            unlink(public_path('uploads/contactus_socalmediya/' . $contactus_socalmediya->image));
        }
        $contactus_socalmediya->delete();
        return redirect()->route('contactus_socalmediya.index')->with('success', 'Contactus Socalmediya deleted successfully.');
    }
}