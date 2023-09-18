<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Languages as MLang;

class Language extends Controller
{
    public function getLanguages() {
        $langs = MLang::get();
        return $langs;
    }
}
