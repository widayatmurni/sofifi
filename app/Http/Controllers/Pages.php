<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages as PageModel;
// use App\Models\Languages as LangModel;
use Illuminate\Support\Facades\DB;

class Pages extends Controller
{
    public function PageView($slug = '')
    {
        $lang = session()->get('_language');

        $page = DB::table('pages')
                ->join('languages', 'languages.id', '=', 'pages.language_id')
                ->select('pages.title', 'pages.page', 'languages.code')
                ->where(['pages.slug' => $slug, 'languages.code' => $lang])
                ->get();

        return view('base')->with('page', $page[0]);
    }

    public function store(Request $req) {
        $page = new PageModel;
        $page->title = $req->title;
        $page->slug = $req->slug;
        $page->language_id = $req->language_id;
        $page->page = $req->page;
        $page->save();

        return redirect()->back();
    }
}
