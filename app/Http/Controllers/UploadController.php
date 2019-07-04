<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Photo;
use Illuminate\Support\Facades\Storage;

class UploadController extends Controller
{
    
    public function showUploadPhoto()
    {
        return view('uploadfoto');
    }
    public function storePhoto(Request $request)
    {
       $message = ['FORMAT BUKANLAH GAMBAR'];
        $request->validate([
            'foto.*'=> 'image'
        ],$message);
        foreach ($request->foto as $foto ) {
            $time = date('YHis');
            $nama_foto = hash('sha256',$foto->getClientOriginalName().$time);            
            $image = Image::make($foto->getRealPath())->stream();
            Storage::disk('foto')->put($nama_foto,$image);
            $photo = new Photo;
            $photo->jenis = $request->jenis;
            $photo->nama_foto = $nama_foto;
            $photo->caption = $request->caption;
            $photo->save();
        }
        return redirect('/');
       
    }
    public function showPhoto(Request $request)
    {
        $foto = Photo::where('nama_foto',$request->nama_foto)->first();
        try {
            $path = Storage::disk('foto')->get($foto->nama_foto);
            $image = Image::make($path)->resize('300','300');
            return $image->response();
        } catch (\Throwable $th) {
        }
        
        return;
    }
    
}
