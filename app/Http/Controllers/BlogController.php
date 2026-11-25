<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{

    public function index()
    {
        return view('admin.blog.index',[
            'blogs' => Blog::all()
        ]);                                  // view index and also manage , Blog database like a table
    }


    public function addBlogButton()  // Add Who we are press the button return a view page blog_button.blade.php
    {
        return view('admin.blog.blog_button');
    }


    public function create(Request $request)
    {
        Blog::newBlog($request);
        return redirect('/blog')->with('message', 'Blog info Create successfully!');
    }


    public function edit($id)
    {
        return view('admin.blog.edit', [
            'blog' => Blog::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        Blog::updateBlog($request, $id);
        return redirect('/blog')->with('message', 'Blog info update successfully!');
    }


    public function delete($id)
    {
        Blog::deleteCategory($id);
        return redirect('/blog')->with('message', 'Blog info delete successfully.');
    }



}
