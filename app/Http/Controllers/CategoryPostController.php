<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryPostController extends Controller
{
    public function  categorypost(Category $id){

        $alltags  =$id->with(['posts'])->where('id',$id->id)->get();

        return view ('blogpages.categorypost')->with([
            'alltags' => $alltags
        ]);
    }
}
