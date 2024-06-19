<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function () {
    // return 'ルーティングテスト';
    return view('about');
});

Route::get('/posts/{id}', function ($id) {
    // return '<h1>パラメータテスト'. $id . '番目</h1>';
    return view('posts.post', ['id' =>$id]);
});