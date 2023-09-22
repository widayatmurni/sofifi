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
                ->join('albums', 'albums.id', 'galleries.album_id')
                ->select('albums.title as nama_album', 'albums.description as album_deskripsi', 'galleries.file_uri', 'galleries.description as deskripsi')
                ->get();
        return $gal;
    }

    public function getAlbumContent($albumId) {
        $data = $this->getGallery($albumId);
        return view('galleryViewAlbum')->with('photos', $data);
    }

    public function getAlbumContentItems($albumId) {
        $gal = Galleries::where('album_id', $albumId)
                ->join('albums', 'albums.id', 'galleries.album_id')
                ->select('galleries.file_uri')
                ->limit(2)
                ->get();
        return response()->json($gal, 200);
    }

}
