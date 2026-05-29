<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\res_guide;
class Res_guidesController extends Controller
{
    public function index()
    {
        $res_guides = res_guide::all();
        return view('admin.res_guide.index', compact('res_guides'));
    }

    public function create()
    {
        return view('admin.res_guide.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'meta'=>'nullable|string|max:255',
            'file'=>'required|file|mimes:pdf,doc,docx|max:2048',
        ]);
        if($request->hasFile('file'))
            {
                $file=time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/res_guides_files'),$file);
            }
        res_guide::create([
            'icon' => $request->icon,
            'title' => $request->title,
            'meta'=>$request->meta,
            'file'=>$file ?? null,
        ]);
        return redirect()->route('res_guides.index');
    }

    public function download($id)
    {

        $guide = res_guide::findOrFail($id);
        $path = public_path(
            'uploads/res_guides_files/' . $guide->file
        );
        return response()->download($path);

    }
    public function edit($id)
    {
        $res_guide = res_guide::findOrFail($id);
        return view('admin.res_guide.create', compact('res_guide'));
    }

    public function update(Request $request, $id)
    {
        $res_guide = res_guide::findOrFail($id);
        $request->validate([
            'icon' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'meta'=>'nullable|string|max:255',
            'file'=>'nullable|file|mimes:pdf,doc,docx|max:2048',
        ]);
        if($request->hasFile('file'))
            {
                if($res_guide->file && file_exists(public_path('uploads/res_guides_files/'.$res_guide->file)))
                {
                    unlink(public_path('uploads/res_guides_files/'.$res_guide->file));
                }
                $file=time().'.'.$request->file->extension();
                $request->file->move(public_path('uploads/res_guides_files'),$file);
            }
        $res_guide->update([
            'icon' => $request->icon,
            'title' => $request->title,
            'meta'=>$request->meta,
            'file'=>$file ?? $res_guide->file,
        ]); 
        return redirect()->route('res_guides.index');
    }

    public function delete($id)
    {
        $res_guide = res_guide::findOrFail($id);
        if($res_guide->icon && file_exists(public_path('uploads/res_guides_files/'.$res_guide->icon)))
        {
            unlink(public_path('uploads/res_guides_files/'.$res_guide->icon));
        }
        $res_guide->delete();        
        return redirect()->route('res_guides.index');   
    }
}
