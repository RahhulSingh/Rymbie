<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\blog_article;

class BlogArticleController extends Controller
{
    public function index()
    {
        $articles = blog_article::latest()->get();
        return view('admin.blog_article.index', compact('articles'));
    }

    public function create()
    {
        return view('admin.blog_article.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,png,webp,jpeg|max:2048',
            'content' => 'required',
        ]);

        $imageName = null;

        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blog_articles'), $imageName);
        }

        blog_article::create([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imageName,
            'content' => $request->content,
        ]);

        return redirect()->route('blog_article.index')->with('success', 'Blog Article created successfully.');
    }

    public function edit($id)
    {
        $article = blog_article::findOrFail($id);
        return view('admin.blog_article.create', compact('article'));
    }

    public function update(Request $request, $id)
    {
        $article = blog_article::findOrFail($id);

        $request->validate([
            'title' => 'required|string|max:255',
            'category' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,png,webp,jpeg|max:2048',
            'content' => 'required',
        ]);

        $imageName = $article->image;

        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($article->image && file_exists(public_path('uploads/blog_articles/' . $article->image))) {
                unlink(public_path('uploads/blog_articles/' . $article->image));
            }

            $imageName = time() . '.' . $request->image->extension();
            $request->image->move(public_path('uploads/blog_articles'), $imageName);
        }

        $article->update([
            'title' => $request->title,
            'category' => $request->category,
            'image' => $imageName,
            'content' => $request->content,
        ]);

        return redirect()->route('blog_article.index')->with('success', 'Blog Article updated successfully.');
    }

    public function delete($id)
    {
        $article = blog_article::findOrFail($id);

        if ($article->image && file_exists(public_path('uploads/blog_articles/' . $article->image))) {
            unlink(public_path('uploads/blog_articles/' . $article->image));
        }

        $article->delete();

        return redirect()->route('blog_article.index')->with('success', 'Blog Article deleted successfully.');
    }
}
