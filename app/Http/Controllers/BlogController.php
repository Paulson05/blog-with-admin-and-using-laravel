<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function singlepost(Post $post){

        return view ('blogpages.singlepage')->with([
            'post' => $post
        ]);
    }
}
