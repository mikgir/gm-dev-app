<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Foundation\Application;


class PostController extends Controller
{
    /**
     * @return Factory|Application|View
     */
    public function index(): Factory|Application|View
    {
        $posts = Post::with(['user', 'media'])->paginate(3);

        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function show($id): Factory|Application|View
    {
        $post = Post::with(['user', 'media'])->findOrFail($id);

        return view('posts.show', [
            'post' => $post
        ]);
    }
}
