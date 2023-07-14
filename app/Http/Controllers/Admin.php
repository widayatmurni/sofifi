<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Language as CLang;
use App\Models\Pages as MPage;
use App\Models\Bulletins as MBulletin;
use App\Models\Albums as MAlbum;
use App\Models\Galleries as MGal;

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

    public function create_page(Request $req) {
        $page = MPage::find($req->_id);
        $page->title = $req->title;
        $page->page = $req->page;
        $page->update();
        return redirect()->back()->with('status','Halaman Berhasil di perbaharui.');
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
        $albums = MAlbum::all();
        return view('admin.pages.gallery', ['albums' => $albums]);
    }

    public function createAlbum(Request $req) {
        $newAlbum = new MAlbum;
        $newAlbum->title = $req->title;
        $newAlbum->description = $req->description;
        $newAlbum->save();
        // return redirect()->back();
        return $this->getGalleryCollections($newAlbum->id);
    }

    public function getGalleryCollections($idAlbum) {
        $albumName = MAlbum::where('id', $idAlbum)->select('title', 'id')->first();
        $colls = MGal::where('album_id', $idAlbum)->get();
        
        return view('admin.pages.gallery_manage_collection', ['album' => $albumName, 'collections'=> $colls]);
    }

    public function addPhotoToAlbum(Request $request) {
        $request->validate([
            'filename' => 'required',
            'filename.*' => 'mimes:doc,docx,PDF,pdf,jpg,jpeg,png|max:2000'
        ]);
        if ($request->hasfile('filename')) { 
            $files = [];
            foreach ($request->file('filename') as $file) {
                if ($file->isValid()) {
                    $filename = round(microtime(true) * 1000).'-'.str_replace(' ','-',$file->getClientOriginalName());
                    $file->move(public_path('photos'), $filename);                    
                    $files[] = [
                        'file_uri' => $filename,
                        'album_id' => $request->idAlbum,
                    ];
                }
            }
            MGal::insert($files);
            return redirect()->back();
        }else{
            echo'Gagal';
        }
    }
}
