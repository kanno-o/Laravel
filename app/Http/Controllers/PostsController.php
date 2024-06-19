<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{
    //show($id)ではなくinvoceを使うとスッキリする
    public function __invoke{$id} {
        $today = date('Y-m-d')
        return view('posts.post', ['id'=>$id, 'today'=>$today]);
    }
}
