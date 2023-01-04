<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Articles extends Controller
{
    public function index()
    {
        $data = [];
        return view('articles')->with($data);
    }
}
