<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
    }

    public function Create(){
        return \view('posts.create');
    }

    public function Store(){

        $data = request()->validate([
            'caption' => '',
            'image' => 'image',
        ]);

        \dd(\request('image')->Store('uploads','public'));

        auth()->user()->posts()->create($data);

        \dd(\request()->all());
        // return \view('posts.store');
    }
}
