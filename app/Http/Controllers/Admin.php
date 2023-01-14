<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pages as MPage;

class Admin extends Controller
{
    public function index()
    {
        $pages = MPage::get();
        return view('admin.pages.page', ['pages' => $pages]);
    }

    public function getLogin()
    {
        return view('admin.login');
    }

    public function getAddPage()
    {
        return view('admin.add_page');
    }

    public function getEditPage( $id ) {
        $page = MPage::where('id', $id)->get();
        return view('admin.pages.page_edit', ['page' => $page]);
    }
}
