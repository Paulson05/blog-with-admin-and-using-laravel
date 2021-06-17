<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public  function admin(){
        $posts = Post::all();
        return view('admin.dashboard')->with([
            'posts' => $posts
        ]);
    }

}
