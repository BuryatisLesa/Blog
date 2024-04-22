<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; use Illuminate\Support\Facades\App; use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::where("is_published", 1)->get();
        foreach($posts as $post){
            dump($post->title);
        }
    }

    public function create(){
        $createArr = [
            [
                "title" => " title is laravel",
                "content" => "content is laravel",
                "is_published" => 1,
                "likes" => "50",
                "image" => "image is laravel",
            ]
        ];
        Post::create([
            "title" => " title is laravel",
            "content" => "content is laravel",
            "is_published" => 1,
            "likes" => "50",
            "image" => "image is laravel",
        ]);
        dd("create success");
    }
}
