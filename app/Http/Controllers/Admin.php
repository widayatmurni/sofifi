<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admin extends Controller
{
    public function getLogin()
    {
        return view('admin.login');
    }
}
