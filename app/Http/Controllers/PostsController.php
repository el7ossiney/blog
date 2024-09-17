<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsController extends Controller
{
    public function index(){
        
        $posts=post::all();



        return view('posts.index',['posts'=>$posts]);
    }




    public function show(Post $post){
        
        
        return view('posts.show',['post'=>$post]);
    }
    public function create(){
        return view('posts.create');
    }

    public function store(){
        $data = request()->all();
        Post::create([
            'title' => $data['title'],
            "desription" => $data['description']
        ]);

        return to_route('posts.index');
    }
    public function edit(Post $post){
        return view('posts.edit',['post'=>$post]);
    }
    public function update($id){
        $data = request()->all();
        $singledata =Post::find($id);
        $singledata ->update([
            'title' => $data['title'],
            'desription' => $data['description']
        ]);
        return to_route('posts.show', ['post'=> $id ]);
    }
    public function destroy($id){
        $post = Post::find($id);
        $post ->delete();
        return to_route('posts.index');
    }
    
}
