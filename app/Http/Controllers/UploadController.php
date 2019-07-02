<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use app\Photo;
use Illuminate\Support\Facades\Storage;
class UploadController extends Controller
{
    public function showPhoto()
    {
        return view('uploadfoto');
    }
    public function storePhoto(Request $request)
    {
        foreach ($request->foto as $foto ) {
            $nama_foto = $foto->getClientOriginalName();
            
        }
        $photo = new Photo;
        $photo->judul = $request->getOriginalPath();
        $photo->caption = $request->caption;
        $photo->save();
    }
}
