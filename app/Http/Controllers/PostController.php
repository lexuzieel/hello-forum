<?php

namespace App\Http\Controllers;

use App\Post;
use App\Topic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function add(Request $request, Topic $topic) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'content' => 'required'
        ]);

        $post = new Post(['content' => $request->input('content')]);
        $post->topic()->associate($topic);
        $post->user()->associate(Auth::user());
        $post->save();
        return $post;
    }

    public function delete(Request $request) {
        if(! Auth::check()) abort(401);

        $this->validate($request, [
            'id' => 'required'
        ]);
        
        $post = Post::find($request->input('id'));
        if(! isset($post)) abort(400);
        $post->delete();
    }
}
