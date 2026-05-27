<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\featured_article;
use App\Models\blog_article;

class ArticlesController extends Controller
{
    public function index(Request $request)
    {
        $category = $request->query('category');

        $featuredArticles = featured_article::latest()
            ->take(3) // Fetch latest 3 featured articles
            ->get();

        $blogArticles = blog_article::when($category, function($query, $category) {
                return $query->where('category', $category);
            })
            ->latest()
            ->get();

        return view('frontend.articles', compact('featuredArticles', 'blogArticles', 'category'));
    }
}
