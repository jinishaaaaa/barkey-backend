<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Product;
use Illuminate\Http\Request;

class BlogpageController extends Controller
{
   public function table()
    {
        $Datas = Blog::all();

        return view('blogpage', compact('Datas'));
    }

}
