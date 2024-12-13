<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCommentRequest;
use App\Models\Comment;
use App\Models\Like;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class PublicController extends Controller
{
    public function index()
    {
        $posts = Post::with('user')->withCount('comments')->latest()->simplePaginate(16);
        return view('index', compact('posts'));
    }

    public function page1()
    {
        return view('page1');
    }

    public function page2()
    {
        return view('page2');
    }

    public function post(Post $post)
    {
        return view('post', compact('post'));
    }

    public function user(User $user){
        $posts = $user->posts()->with('user')->withCount('comments')->latest()->paginate(16);
        return view('index', compact('posts'));
    }

    public function comment(Post $post, StoreCommentRequest $request){
        $comment = new Comment();
        $comment->body = $request->input('body');
        $comment->user()->associate(Auth::user());
        $comment->post()->associate($post);
        $comment->save();
        return redirect()->back();
    }

    public function like(Post $post, Request $request){
        $like = $post->likes()->where('user_id', Auth::id())->first();
        if($like) {
            $like->delete();
        } else {
            $like = new Like();
            $like->user()->associate(Auth::user());
            $like->post()->associate($post);
            $like->save();
        }
        return redirect()->back();
    }
}
