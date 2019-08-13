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
        $foto = Photo::where('jenis','Agriculture_Mining')->where('approve',true)->get();
        $video = Video::where('jenis','Agriculture_Mining')->where('approve',true)->get();
        $x = 0;
        foreach($foto as $ph){
            $tag = $ph->tags;
            $tag = explode(',',$tag);
            $foto[$x]['tags'] = $tag; 
            $x++;
        }
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('agriculture_mining')->with('photos',$foto)->with('videos',$video)->with('count',$count);
    }
    public function show_eco_trade()
    {
        $foto = Photo::where('jenis','Economic_Trade')->where('approve',true)->get();
        $video = Video::where('jenis','Economic_Trade')->where('approve',true)->get();
        $x = 0;
        foreach($foto as $ph){
            $tag = $ph->tags;
            $tag = explode(',',$tag);
            $foto[$x]['tags'] = $tag; 
            $x++;
        }
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('economic_trade')->with('photos',$foto)->with('videos',$video)->with('count',$count);
    }
    public function show_soc_pop()
    {
        $foto = Photo::where('jenis','Social_Population')->where('approve',true)->get();
        $video = Video::where('jenis','Social_Population')->where('approve',true)->get();
        $x = 0;
        foreach($foto as $ph){
            $tag = $ph->tags;
            $tag = explode(',',$tag);
            $foto[$x]['tags'] = $tag; 
            $x++;
        }
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('social_population')->with('photos',$foto)->with('videos',$video)->with('count',$count);
    }

    public function show_eve_exp()
    {
        $foto = Photo::where('jenis','Event_Experience')->where('approve',true)->get();
        $video = Video::where('jenis','Event_Experience')->where('approve',true)->get();
        $x = 0;
        foreach($foto as $ph){
            $tag = $ph->tags;
            $tag = explode(',',$tag);
            $foto[$x]['tags'] = $tag; 
            $x++;
        }
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('events_experience')->with('photos',$foto)->with('videos',$video)->with('count',$count);   
    }
    public function show_info()
    {
        $foto = Photo::where('jenis','Infographics')->where('approve',true)->get();
        $video = Video::where('jenis','Infographics')->where('approve',true)->get();
        $x = 0;
        foreach($foto as $ph){
            $tag = $ph->tags;
            $tag = explode(',',$tag);
            $foto[$x]['tags'] = $tag; 
            $x++;
        }
        $x = 0;
        foreach($video as $vid){
            $tag = $vid->tags;
            $tag = explode(',',$tag);
            $video[$x]['tags'] = $tag; 
            $x++;
        }
        $count = \Counter::show('home');

        return view('infographics')->with('photos',$foto)->with('videos',$video)->with('count',$count);
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
