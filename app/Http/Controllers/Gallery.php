<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Albums;
use App\Models\Galleries;

class Gallery extends Controller
{
    public function index() {
        $data = $this->getAlbums();
        return view('gallery')->with('albums', $data);
    }

    public function get_gallery($idAlbum) {
        $data = $this->getGallery($idAlbum);
        return response()->json($data);
    }

    protected function getAlbums(){
        $albums = Albums::get();
        return $albums;
    }

    protected function getGallery($idAlbum)
    {
        $gal = Galleries::where('album_id', $idAlbum)
                ->join('albums')
                ->select('albums.name as nama_album', 'galleries.file_uri', 'galleries.description as deskripsi')
                ->get();
        return $gal;
    }
}
