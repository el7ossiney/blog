<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostsController;

Route::get('/', function () {
    return view('welcome');
});


// to insert data 
Route::get('/posts',[PostsController::class,'index'])->name('posts.index');
// create a new post form
Route::get('/posts/create',[PostsController::class ,'create'])->name('posts.create');
// edit a specific  post
Route::get('/posts/{post}/edit',[PostsController::class,'edit'])->name('posts.edit');
// function to store data in Database
Route::post('/posts',[PostsController::class,'store'])->name('posts.store');
//to show a specific  post
Route::get('/posts/{post}',[PostsController::class,'show'])->name('posts.show');
// to update data in database
Route::put('/posts/{post}',[PostsController::class,'update'])->name('posts.update');

Route::delete('posts/{post}',[PostsController::class,'destroy'])->name('posts.destroy');