<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Category;
use App\Post;
use Illuminate\Support\Str;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    /**
     *
     */
    public function create()
    {
        $categories = Category::all();

        return view('backend.posts.create', compact('categories'));

    }

    /**
     *
     */

    public function store(PostFormRequest $request)
    {

        $post = new Post(array(
           'title' => $request->get('title'),
            'content' => $request->get('content'),
            'slug' => Str::slug($request->get('title'), '-'),
        ));

        $post->save();
        $post->categories()->sync($request->get('categories'));

        return redirect('admin/posts/create')->with('status', 'The post has been created');

    }

    /**
     *
     */
    public function index()
    {
        $posts = Post::all();
        return view('backend.posts.index', compact('posts'));
    }


}
