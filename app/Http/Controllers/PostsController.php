<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //show($id)ではなくinvoceを使うとスッキリする
    public function __invoke($id) {
        $today = date('Y-m-d');

        $posts = DB::select('select * from posts.posts where ID =1');
        $post = $posts[0];
        var_dump($post);

        return view('posts.post', ['id'=>$id, 'today'=>$today]);
    }
}
