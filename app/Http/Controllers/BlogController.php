<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Blog;


class BlogController extends Controller
{

    public function list()
    {
        return view('blog.list', [
            'blog' => Blog::all()
        ]);
    }
    public function addForm()
    {
        return view('blog.add');
    }

    
    
    public function add()
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug'  => ['required', Rule::unique('blog', 'slug')],
           
            'content' => 'required',
            'status' => 'required',
            'url' => 'nullable|url',
            'user_id' => 'required',
        ]);

        $blog = new Blog();
        $blog->title = $attributes['title'];
        $blog->slug = $attributes['slug'];
        $blog->content = $attributes['content'];
        $blog->url = $attributes['url'];
        $blog->status = $attributes['status'];
        $blog->user_id = Auth::user()->id;
        $blog->save();

        return redirect('/console/blog/list')
            ->with('message', 'Blog has been added!');
    }

    public function editForm(Blog $blog)
    {
        return view('blog.edit', [
            'blog' => $blog,
        ]);
    }

    public function edit(Blog $blog)
    {

        $attributes = request()->validate([
            'title' => 'required',
            'slug' => [
                'required',
                Rule::unique('blog')->ignore($blog->id),
                'regex:/^[A-z\-]+$/',
            ],
            'content' => 'required',
            'status' => 'required',
            'url' => 'nullable|url',
           
        ]);

        $blog->title = $attributes['title'];
        $blog->slug = $attributes['slug'];
        $blog->content = $attributes['content'];
        $blog->status = $attributes['status'];
        $blog->url = $attributes['url'];
      
        $blog->save();

        return redirect('/console/blog/list')
            ->with('message', 'Blog has been edited!');
    }

    public function delete(Blog $blog)
    {

    
        
        $blog->delete();
        
        return redirect('/console/blog/list')
            ->with('message', 'Blog has been deleted!');        
    }

     
    
} 