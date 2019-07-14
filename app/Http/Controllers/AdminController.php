<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use App\Video;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function index()
    {
        return view('home');
    }
    public function approve(Request $request)
    {
        if($request->status == "approve"){
            if($request->check){
                foreach ($request->check as $id ) { 
                    $photo = Photo::find($id);
                    $photo->approve = true;
                    $photo->save();   
                }
            }
            if($request->checkvideo){
                foreach($request->checkvideo as $id){
                    $video = Video::find($id);
                    $video->approve = true;
                    $video->save();
                }
            }
     
        }else{
            if($request->check){
                foreach ($request->check as $id ) { 
                    $photo = Photo::find($id);
                    $photo->delete();   
                }
            }
            if($request->checkvideo){
                foreach($request->checkvideo as $id){
                    $video = Video::find($id);
                    $video->delete();
                }
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
        
        $videos = Video::where('approve',false)->get();
        $prevCaption = "";
        $x = 0;
        $arrVideo = array(array());
        $visit = array();
        for($k = 0;$k<count($videos) ; $k++){
            $caption = $videos[$k]->caption;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $caption && !$visit[$k]){
                $sortedVideo = [];
                $i = 0;
                $j = 0;        
                foreach($videos as $video){
                    if($caption == $video->caption){
                        $sortedVideo[$j++] = $video;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrVideo[$x]['caption'] = $caption;
                $arrVideo[$x]['video'] = $sortedVideo;
                $x++;
                $prevCaption = $caption;
            }
        }
        return view('approve')->with('photos',$arrPhoto)->with('videos',$arrVideo);
    }
}
