<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\res_hero;
class Res_heroController extends Controller
{
    public function index()
    {
        $res_heros = res_hero::latest()->get();
        return view('admin.res_hero.index',compact('res_heros'));
    }

    public function create()
    {
        return view('admin.res_hero.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'description' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $image = $request->file('image');
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->move(public_path('uploads/res_hero'), $imageName);
        $res_hero = new res_hero();
        $res_hero->title = $request->title;
        $res_hero->description = $request->description;
        $res_hero->image = $imageName;
        $res_hero->save();

        return redirect()->route('res_hero.index')->with('success', 'Resource Hero created successfully.');
    }

    public function edit($id)
    {
        $res_hero = res_hero::findOrFail($id);
        return view('admin.res_hero.create', compact('res_hero'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'nullable',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $res_hero = res_hero::findOrFail($id);
        $res_hero->title = $request->title;
        $res_hero->description = $request->description;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads/res_hero'), $imageName);
            $res_hero->image = $imageName;
        }

        $res_hero->save();

        return redirect()->route('res_hero.index')->with('success', 'Resource Hero updated successfully.');
    }

    public function delete($id)
    {
        $res_hero = res_hero::findOrFail($id);
        if($res_hero->image &&
            file_exists(public_path('uploads/res_hero/'.$res_hero->image)))
        {
            unlink(public_path('uploads/res_hero/'.$res_hero->image));
        }  
        $res_hero->delete();

        return redirect()->route('res_hero.index')->with('success', 'Resource Hero deleted successfully.');
    }
}
