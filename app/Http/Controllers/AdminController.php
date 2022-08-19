<?php

namespace App\Http\Controllers;
use App\Category;
use App\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('admin/index', [
            'posts' => Post::all(),
        ]);
    }

    public function artikel()
    {
        return view('admin/artikel', [
            'posts' => Post::latest()->get(),
        ]);
    }

    public function create()
    {
        return view('admin/artikel/create', [
            'post' => new Post(),
            'categories' => Category::get(),
            
        ]);
    }

    public function store()
    {
        // Validationf
        $attr = $this->validateRequest();
        $slug = \Str::slug(request('title'));
        $attr['slug'] = $slug;
        $m_description = request('m_description');

        $thumbnail = request()->file('thumbnail');
        $thumbnailUrl = $thumbnail ? $thumbnail->storeAs("images/posts", "{$slug}.{$thumbnail->extension()}") : null;
         
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUrl;
        $attr['m_description'] = $m_description;
        // Save the post
        auth()->user()->posts()->create($attr);
        session()->flash('success', 'Post created successfully');
        return redirect( route('admin/artikel') );
    }

    public function edit(Post $post)
    {
        return view('admin/artikel/edit', [
            'post' => $post,
            'categories' => Category::get(),
        ]);
    }

    public function update(Post $post)
    {
        $attr = $this->validateRequest();
        if (request()->file('thumbnail')) {
            \Storage::delete($post->thumbnail);
            $thumbnail = request()->file('thumbnail');
            $thumbnailUrl = $thumbnail->storeAs("images/posts", "{$post->slug}.{$thumbnail->extension()}");
        } else {
            $thumbnailUrl = $post->thumbnail;
        }
        
        $m_description = request('m_description');
        $attr['m_description'] = $m_description;
        $attr['category_id'] = request('category');
        $attr['thumbnail'] = $thumbnailUrl;
        $post->update($attr);
        session()->flash('info', 'Post updated successfully');
        return  redirect( route('admin/artikel') );
    }

    

    public function validateRequest()
    {
        return request()->validate([
            'title' => 'required',
            'body' => 'required',
            'category' => 'required',
            'thumbnail' => 'image|mimes:jpeg,png,jpg|max:2048',
        ]);
    }

    public function destroy(Post $post)
    {
        \Storage::delete($post->thumbnail);
        $post->delete();
        session()->flash('warning', 'Post deleted successfully');
        return redirect('/admin/artikel');
    }
}
