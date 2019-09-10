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
            $title = $photos[$k]->title;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $title && !$visit[$k]){
                $sortedPhoto = [];
                $i = 0;
                $j = 0;        
                foreach($photos as $foto){
                    if($title == $foto->title){
                        $sortedPhoto[$j++] = $foto;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrPhoto[$x]['title'] = $title;
                $arrPhoto[$x]['foto'] = $sortedPhoto;
                $x++;
                $prevCaption = $title;
            }
        }
        
        $videos = Video::where('approve',false)->get();
        $prevCaption = "";
        $x = 0;
        $arrVideo = array(array());
        $visit = array();
        for($k = 0;$k<count($videos) ; $k++){
            $title = $videos[$k]->title;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $title && !$visit[$k]){
                $sortedVideo = [];
                $i = 0;
                $j = 0;        
                foreach($videos as $video){
                    if($title == $video->title){
                        $sortedVideo[$j++] = $video;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrVideo[$x]['title'] = $title;
                $arrVideo[$x]['video'] = $sortedVideo;
                $x++;
                $prevCaption = $title;
            }
        }
        return view('approve')->with('photos',$arrPhoto)->with('videos',$arrVideo);
    }
    public function showDelete(Request $request)
    {
        $photos = Photo::where('approve',true)->get();
        $countPhotos = (int)(count($photos)/10);
        if(count($photos) % 10 != 0)
            $countPhotos++;
        $photos = Photo::where('approve',true)->skip(($request->page-1)*10)->take(10)->get();
        $prevCaption = "";
        $x = 0;
        $arrPhoto = array(array());
        $visit = [];
        for($k = 0;$k<count($photos) ; $k++){
            $title = $photos[$k]->title;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $title && !$visit[$k]){
                $sortedPhoto = [];
                $i = 0;
                $j = 0;        
                foreach($photos as $foto){
                    if($title == $foto->title){
                        $sortedPhoto[$j++] = $foto;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrPhoto[$x]['title'] = $title;
                $arrPhoto[$x]['foto'] = $sortedPhoto;
                $x++;
                $prevCaption = $title;
            }
        }
        $videos = Video::where('approve',true)->get();
        $countVideos =(int) (count($videos)/10);
        if(count($videos) % 10 != 0)
            $countVideos++;
        $videos = Video::where('approve',true)->skip(($request->page-1)*10)->take(10)->get();
        $prevCaption = "";
        $x = 0;
        $arrVideo = array(array());
        $visit = array();
        for($k = 0;$k<count($videos) ; $k++){
            $title = $videos[$k]->title;
            $visit[$k] = $visit[$k]??false;
            if($prevCaption != $title && !$visit[$k]){
                $sortedVideo = [];
                $i = 0;
                $j = 0;        
                foreach($videos as $video){
                    if($title == $video->title){
                        $sortedVideo[$j++] = $video;
                        $visit[$i] = true;
                    }
                    $i++;
                }
                $arrVideo[$x]['title'] = $title;
                $arrVideo[$x]['video'] = $sortedVideo;
                $x++;
                $prevCaption = $title;
            }
        }
        $count = $countVideos > $countPhotos ? $countVideos : $countPhotos;
        return view('delete')->with('photos',$arrPhoto)->with('videos',$arrVideo)->with('count',$count);
    }
    public function delete(Request $request)
    {
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
        return redirect('/');
    }
    
}
