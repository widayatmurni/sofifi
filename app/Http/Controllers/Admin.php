<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Language as CLang;
use App\Models\Pages as MPage;
use App\Models\Bulletins as MBulletin;

class Admin extends Controller {
    public function index() {
        $pages = MPage::groupBy('slug')->get(['slug', 'title']);
        return view('admin.pages.page', ['pages' => $pages]);
    }

    public function getLogin() {
        return view('admin.login');
    }

    public function getAddPage() {
        $langs = $langs = (new CLang)->getLanguages();
        return view('admin.pages.page_add', ['languages' => $langs]);
    }

    public function getEditPage( $slug, $lang = '' ) {
        $langs = (new CLang)->getLanguages();
        $l = $lang;
        if ($l == '' ) {
            $l=$langs[0]->id;
        }

        $page = \DB::table('pages')
                ->join('languages', 'languages.id', '=', 'pages.language_id')
                ->where(['pages.slug' => $slug, 'languages.id' => $l])
                ->select('pages.id', 'pages.title', 'languages.code', 'languages.id as lang_id', 'pages.slug', 'pages.page', 'pages.publish')
                ->get();
        return view('admin.pages.page_edit', ['page' => $page, 'languages' => $langs, 'cur_lang_id' => $l, 'cur_slug' => $slug]);
    }

    public function generateNewPage($slug, $lang_id){
        $pageAttr = [
            'title' => ucfirst($slug),
            'slug' => $slug,
            'language_id' => $lang_id,
            'page' => '',
        ];

        $this->createPage($pageAttr);
        return redirect()->back();
    }

    public function createPage($pageAttr) {
        return \DB::table('pages')->insert($pageAttr);
    }

    // BULLETINS
    public function getBulletins() {
        $bulletins = MBulletin::get();
        return view('admin.pages.bulletin', ['bulletins' => $bulletins]);
    }

    public function addBulletin() {
        $langs = $langs = (new CLang)->getLanguages();
        return view('admin.pages.bulletin_add', ['languages' => $langs]);
    }

    // GALLERY
    public function getGalleries() {
        return view('admin.pages.gallery');
    }
}
