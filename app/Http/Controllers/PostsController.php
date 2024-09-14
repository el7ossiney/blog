<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index(){
        $posts = [
            ['id'=>'1','created_by'=>'ahmed','book'=>'php','created_at'=>'2020','description'=>'wanna have some experience'],
            ['id'=>'2','created_by'=>'mohamed','book'=>'js','created_at'=>'2021','description'=>'just try'],
            ['id'=>'3','created_by'=>'khaled','book'=>'java','created_at'=>'2022','description'=>'just work'],
            ['id'=>'4','created_by'=>'mohsen','book'=>'bootstrap','created_at'=>'2023','description'=>'just learn']
        ];

        return view('posts.index',['posts'=>$posts]);
    }




    public function show($id){
        $posts = [
            ['id'=>'1','created_by'=>'ahmed','book'=>'php','created_at'=>'2020','description'=>'wanna have some experience','email'=>'ahmed@gmail.com'],
            ['id'=>'2','created_by'=>'mohamed','book'=>'js','created_at'=>'2021','description'=>'just try','email'=>'mohamed@gmail.com'],
            ['id'=>'3','created_by'=>'khaled','book'=>'java','created_at'=>'2022','description'=>'just work','email'=>'khaled@gmail.com'],
            ['id'=>'4','created_by'=>'mohsen','book'=>'bootstrap','created_at'=>'2023','description'=>'just learn','email'=>'mohsen@gmail.com']
        ];

        return view('posts.show',['id'=>$id,'posts'=>$posts]);
    }
    public function create(){
        return view('posts.create');
    }
    public function store(){
        $data = request()->all();
        dd($data);
    }
}
