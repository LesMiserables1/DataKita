<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('admin');
    }
    public function approve(Request $request)
    {
        if($request->check){
            foreach ($request->check as $id ) { 
                $photo = Photo::find($id);
                $photo->approve = true;
                $photo->save();   
            }
        }
        return redirect('/');
    }
    public function showApprove(Request $request)
    {
        $photos = Photo::where('approve',false)->get();
        $prevCaption = "";
        $x = 0;
        $arrPhoto = array(array());
        $visit = [];
        for($k = 0;$k<count($photos) ; $k++){
            $caption = $photos[$k]->caption;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $caption && !$visit[$k]){
                $sortedPhoto = [];
                $i = 0;
                $j = 0;        
                foreach($photos as $foto){
                    if($caption == $foto->caption){
                        $sortedPhoto[$j++] = $foto;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrPhoto[$x]['caption'] = $caption;
                $arrPhoto[$x]['foto'] = $sortedPhoto;
                $x++;
                $prevCaption = $caption;
            }
        }
        return view('approvephoto')->with('photos',$arrPhoto);
    }
}
