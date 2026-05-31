<?php

namespace App\Http\Controllers;

use App\Models\Gallery;
use Illuminate\Http\Request;

class BakeryhomeController extends Controller
{
    

    

      public function table()
    {
        $Datas = Gallery::all();

        return view('bakeryhome', compact('Datas'));
    }



}