<?php

namespace App\Http\Controllers;

use App\BlogPost;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{

    public function index()
    {
        $blogPosts = BlogPost::all();

        return view('home', compact('blogPosts'));
    }

    public function create()
    {
        return view('newBlogPost');
    }

    public function store(Request $request)
    {
        $newBlogPost = new BlogPost($request->all());
        $newBlogPost->save();

        return redirect('/');
    }

    public function show($blogId)
    {
        $blog = BlogPost::find($blogId);

        return view('blogItem', compact('blog'));
    }
}
