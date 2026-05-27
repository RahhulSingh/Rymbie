<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\res_tool;
class res_toolController extends Controller
{
    public function index()
    {
        $res_tools = res_tool::all();
        return view('admin.res_tools.index', compact('res_tools'));
    }
    
    public function create()
    {
        return view('admin.res_tools.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);
        res_tool::create($request->all());
        return redirect()->route('res_tools.index')->with('success', 'Resource tool created successfully.');
    }

    public function edit($id)
    {
        $res_tool = res_tool::findOrFail($id);
        return view('admin.res_tools.create', compact('res_tool'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
        ]);
        $res_tool = res_tool::findOrFail($id);
        $res_tool->update($request->all());
        return redirect()->route('res_tools.index')->with('success', 'Resource tool updated successfully.');
    }

    public function delete($id)
    {
        $res_tool = res_tool::findOrFail($id);
        $res_tool->delete();
        return redirect()->route('res_tools.index')->with('success', 'Resource tool deleted successfully.');
    }



}
