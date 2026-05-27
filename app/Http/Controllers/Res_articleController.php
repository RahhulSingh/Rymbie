<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Res_article;
class Res_articleController extends Controller
{
    public function index()
    {
        $res_articles = Res_article::all();
        return view('admin.res_articles.index', compact('res_articles'));
    }

    public function create()
    {
        return view('admin.res_articles.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'icon' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'points' => 'required|string|max:255',
        ]);

        Res_article::create($request->all());
        return redirect()->route('res_articles.index')->with('success', 'Resource Article created successfully.');
    }

    public function edit($id)
    {
        $res_article = Res_article::findOrFail($id);
        return view('admin.res_articles.create', compact('res_article'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'icon' => 'nullable|string|max:255',
            'title' => 'nullable|string|max:255',
            'points' => 'nullable|string|max:255',
        ]);
        $res_article = Res_article::findOrFail($id);
        $res_article->update($request->all());
        return redirect()->route('res_articles.index')->with('success', 'Resource Article updated successfully.');
    }

    public function delete($id)
    {
        $res_article = Res_article::findOrFail($id);
        $res_article->delete();
        return redirect()->route('res_articles.index')->with('success', 'Resource Article deleted successfully.');
    }
}
