<?php

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/posts', function () {
    return Post::all();
});

Route::get('/tags', function () {
    return Tag::all();
});


Route::get('/post/create', function () {
  Post::create(['title'=>'title1', 'body'=>'This is body 1']);
  Post::create(['title'=>'title2', 'body'=>'This is body 2']);
});

Route::get('/tag/create', function () {
  Tag::create(['title'=>'sport']);
  Tag::create(['title'=>'art']);
  Tag::create(['title'=>'web']);
});


Route::get('/attach', function () {
    Post::find(1)->tags()->attach([1, 2]);
    Post::find(2)->tags()->attach([2,3]);
});

Route::get('/sync', function () {
    Post::find(2)->tags()->sync([2]);
});

Route::get('/toggle', function () {
    Post::find(2)->tags()->toggle([1,2,3]);
});

Route::get('/detach', function () {
    Post::find(2)->tags()->detach([1]);
});
