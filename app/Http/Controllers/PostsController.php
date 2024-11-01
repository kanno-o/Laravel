<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostsController extends Controller
{
    //show($id)ではなくinvoceを使うとスッキリする
    public function __invoke($id) {
        $today = date('Y-m-d');

        $posts = DB::select('select * from posts where id =1');
        $post = $posts[0];
        var_dump($post);

        return view('posts.post', ['id'=>$id, 'today'=>$today]);
    }
}
