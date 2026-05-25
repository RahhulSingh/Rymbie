<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\hero_section;

class Hero_sectionController extends Controller
{
    public function index()
    {
        $heros=hero_section::latest()->get();
        return view('admin.hero_section.index',compact('heros'));
    }
    public function create()
    {
        
        return view('admin.hero_section.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title'=>'required|string|max:255',
            'content'=>'required',
            'image'=>'required|image|mimes:jpg,png,webp,jpeg|max:1048',
        ]);

        $image = null;

        if($request->hasFile('image'))
            {
                $image=time().'.'.$request->image->extension();
                $request->image->move(public_path('uploads/hero_section'),$image);
            }
        hero_section::create([
        'title'   => $request->title,
        'content' => $request->content,
        'image'   => $image,
        ]);

        return redirect()->route('hero_section.index')->with('success', 'Section created successfully.');
    }

    public function edit($id)
    {

        $hero = hero_section::findOrFail($id);

        return view(
            'admin.hero_section.create',
            compact('hero')
        );

    }

    public function update(Request $request, $id)
    {

        $hero = hero_section::findOrFail($id);
        $request->validate([
            'title'   => 'nullable|string|max:255',
            'content' => 'nullable',
            'image'   => 'nullable|image|mimes:jpg,png,jpeg,webp|max:2048',
        ]);
        $image = $hero->image;
        if($request->hasFile('image'))
        {

            // Old image delete
            if($hero->image &&
                file_exists(public_path('uploads/hero_section/'.$hero->image)))
            {
                unlink(public_path('uploads/hero_section/'.$hero->image));
            }

            $image = time().'.'.$request->image->extension();

            $request->image->move(
                public_path('uploads/hero_section'),
                $image
            );

        }

        $hero->update([

            'title'   => $request->title,
            'content' => $request->content,
            'image'   => $image,

        ]);

        return redirect()
            ->route('hero_section.index')
            ->with('success', 'Hero section updated successfully.');

    }

    public function delete($id)
    {
        $hero=hero_section::findOrFail($id);
        if($hero->image &&
            file_exists(public_path('uploads/hero_section/'.$hero->image)))
        {
            unlink(public_path('uploads/hero_section/'.$hero->image));
        }

        $hero->delete();
        return redirect()
            ->route('hero_section.index')
            ->with('success', 'Hero section deleted successfully.');
    }
}
