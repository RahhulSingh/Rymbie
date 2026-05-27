<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\services_section;

class Services_sectionController extends Controller
{
    public function index()
    {
        $services = services_section::latest()->get();
        return view('admin.services_section.index', compact('services'));
    }

    public function create()
    {
        return view('admin.services_section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'svg_icon' => 'required',
        ]);

        services_section::create([
            'title' => $request->title,
            'description' => $request->description,
            'svg_icon' => $request->svg_icon,
        ]);

        return redirect()->route('services_section.index')->with('success', 'Service created successfully.');
    }

    public function edit($id)
    {
        $service = services_section::findOrFail($id);
        return view('admin.services_section.create', compact('service'));
    }

    public function update(Request $request, $id)
    {
        $service = services_section::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'svg_icon' => 'required',
        ]);

        $service->update([
            'title' => $request->title,
            'description' => $request->description,
            'svg_icon' => $request->svg_icon,
        ]);

        return redirect()->route('services_section.index')->with('success', 'Service updated successfully.');
    }

    public function delete($id)
    {
        $service = services_section::findOrFail($id);
        $service->delete();

        return redirect()->route('services_section.index')->with('success', 'Service deleted successfully.');
    }
}
