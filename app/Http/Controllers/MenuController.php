<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function gallery()
    {
        $Datas = Gallery::get();
        return view('menu', compact('Datas'));

    }
}
