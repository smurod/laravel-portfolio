<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public  function  index(){
        $posts = Post::all();
        return response()->json([
            'total' => count($posts),
            'data' => $posts
        ]);
    }
    public  function  show($id){
        $post = Post::find($id);
        if(!$post){
            return response()->json([
                'status' => false,
                'message' => 'Post not found'
            ], 404);
        }
        return response()->json([
            'status' => true,
            'data' => $post
        ]);
    }
    public  function  store(Request $request){
        $validated = $request->validate([
            'title' => 'required',
            'content' => 'required',
            'user_id' => 'required'
        ]);

        $post = Post::create([
            'title' => $validated['title'],
            'content' => $validated['content'],
            'user_id' => $validated['user_id']
        ]);
        return response()->json([
            'status' => true,
            'message' => 'Post has been created',
            'data' => $post
        ], 201);

    }

}
