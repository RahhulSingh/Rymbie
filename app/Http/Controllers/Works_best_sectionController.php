<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\works_best_section;
class Works_best_sectionController extends Controller
{
    public function index()
    {
            $works = works_best_section::all();
            return view('admin.works_best_section.index', compact('works'));
    }
    public function create()
    {
        return view('admin.works_best_section.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        works_best_section::create([
            'title' => $request->title,
        ]); 
        return redirect()->route('works_best_section.index')->with('success', 'Works Best Section created successfully.');
    }
    public function edit($id)
    {
        $work = works_best_section::findOrFail($id);
        return view('admin.works_best_section.create', compact('work'));
    }
    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required|string|max:255',
        ]);

        $work = works_best_section::findOrFail($id);
        $work->update([
            'title' => $request->title,
        ]); 
        return redirect()->route('works_best_section.index')->with('success', 'Works Best Section updated successfully.');
    }
    public function delete($id)
    {
        $work = works_best_section::findOrFail($id);
        $work->delete();
        return redirect()->route('works_best_section.index')->with('success', 'Works Best Section deleted successfully.');
    }
}
