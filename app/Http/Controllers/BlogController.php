<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $posts = BlogPost::latest('published_date')->paginate(4);
        return response()->json($posts);
    }

    public function recent()
    {
        $posts = BlogPost::latest('published_date')->limit(3)->get();
        return response()->json($posts);
    }

    public function byCategory($category)
    {
        $posts = BlogPost::where('category', $category)
            ->latest('published_date')
            ->paginate(4);
        return response()->json($posts);
    }
}
