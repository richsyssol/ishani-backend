<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
   
    public function show($slug)
    {
        $post = BlogPost::where('slug', $slug)->firstOrFail();
        return response()->json($post);
    }
}
