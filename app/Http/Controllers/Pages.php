<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages as PageModel;

class Pages extends Controller
{
    public function PageView($slug)
    {   $lang = session()->get('_language');
        $page = PageModel::where('lang', $lang)
                ->where('slug', $slug)
                ->get()[0];

        return view('base')->with('page', $page);
    }

    public function store(Request $req) {
        $page = new PageModel;
        $page->title = $req->title;
        $page->slug = $req->slug;
        $page->lang = $req->lang;
        $page->page = $req->page;
        $page->save();

        return redirect()->back();
    }
}
