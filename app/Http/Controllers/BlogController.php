<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog', ['blogs'=>Blog::all()]);
    }
    public function homeBlogs()
    {
        return view('welcome', ['blogs'=>Blog::limit(3)->get() ]);
    }
}
