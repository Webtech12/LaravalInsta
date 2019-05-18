<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Intervention\Image\Facades\Image;

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

        $imagePath = (\request('image')->Store('uploads','public'));

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200,1200);
        $image->save();

        auth()->user()->posts()->create([
            'caption' => $data['caption'],
            'image' => $imagePath,
        ]);

        // \dd(\request()->all());

        return redirect('/profile/' . auth()->user()->id);
    
    }

    public function show(\App\post $post){
        return \view('posts.show', \compact('post'));
    }

}
