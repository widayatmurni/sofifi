<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bulletins;

class Articles extends Controller
{
    public function index()
    {
        $buletins = Bulletins::where('publish', TRUE)
                    ->select(['slug', 'title', 'lead_bg', 'lead_title', 'lead_text'])
                    ->get();
        return view('articles')->with('buletins', $buletins);
    }

    public function read($slug) {
        $buletin = Bulletins::where('publish', TRUE)
                    ->where('slug', $slug)
                    ->select(['title', 'content'])
                    ->get()[0];
        return view('articleRead')->with('buletin', $buletin);
    }
}
