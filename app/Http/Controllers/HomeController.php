<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\Storage;
use App\Video;
use Illuminate\Http\Request;
use Kryptonit3\Counter\Counter;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $photoInfo =  Photo::where('jenis','Infographics')->where('approve',true)->get();
        $photoEve = Photo::where('jenis','Event_Experience')->where('approve',true)->get()->take(8);
        $count = \Counter::showAndCount('home');
        return view('welcome')->with('photoInfo',$photoInfo)->with('photoEve',$photoEve)->with('count',$count);
    }
    public function show_agri_mining()
    {
        $photos = Photo::where('jenis','Agriculture_Mining')->where('approve',true)->get();
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
                        $tag = $foto->tags;
                        $tag = explode(',',$tag);
                        $foto->tags = $tag;
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
        $video = Video::where('jenis','Agriculture_Mining')->where('approve',true)->get();
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');
        return view('agriculture_mining')->with('photos',$arrPhoto)->with('videos',$video)->with('count',$count);
    }
    public function show_eco_trade()
    {
        $photos = Photo::where('jenis','Economic_Trade')->where('approve',true)->get();
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
                        $tag = $foto->tags;
                        $tag = explode(',',$tag);
                        $foto->tags = $tag;
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
        $video = Video::where('jenis','Economic_Trade')->where('approve',true)->get();
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');
        return view('economic_trade')->with('photos',$arrPhoto)->with('videos',$video)->with('count',$count);
    }
    public function show_soc_pop()
    {
        $photos = Photo::where('jenis','Social_Population')->where('approve',true)->get();
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
                        $tag = $foto->tags;
                        $tag = explode(',',$tag);
                        $foto->tags = $tag;
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
        $video = Video::where('jenis','Social_Population')->where('approve',true)->get();
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('social_population')->with('photos',$arrPhoto)->with('videos',$video)->with('count',$count);
    }

    public function show_eve_exp()
    {
        $photos = Photo::where('jenis','Event_Experience')->where('approve',true)->get();
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
                        $tag = $foto->tags;
                        $tag = explode(',',$tag);
                        $foto->tags = $tag;
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
        $video = Video::where('jenis','Event_Experience')->where('approve',true)->get();
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('events_experience')->with('photos',$arrPhoto)->with('videos',$video)->with('count',$count);   
    }
    public function show_info()
    {
        $photos = Photo::where('jenis','Infographics')->where('approve',true)->get();
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
                        $tag = $foto->tags;
                        $tag = explode(',',$tag);
                        $foto->tags = $tag;
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
        $video = Video::where('jenis','Infographics')->where('approve',true)->get();
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('infographics')->with('photos',$arrPhoto)->with('videos',$video)->with('count',$count);
    }
    public function about()
    {
        $count = \Counter::show('home');

        return view('about')->with('count',$count);
    }
    public function search(Request $request)
    {
        $foto = Photo::where('title','like','%'.$request->search_query.'%')->orWhere('tags','like','%'.$request->search_query.'%')->get();
        $video = Video::where('title','like','%'.$request->search_query.'%')->orWhere('tags','like','%'.$request->search_query.'%')->get();
        $count = \Counter::show('home');

        return view('search')->with('photos',$foto)->with('videos',$video)->with('query',$request->search_query)->with('count',$count);
    }
    
}
