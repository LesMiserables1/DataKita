<?php

namespace App\Http\Controllers;

use App\Photo;
use Illuminate\Support\Facades\Storage;
use App\Video;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function show_agri_mining()
    {
        $foto = Photo::where('jenis','Agriculture_Mining')->where('approve',true)->get();
        $video = Video::where('jenis','Agriculture_Mining')->where('approve',true)->get();
        return view('agriculture_mining')->with('photos',$foto)->with('videos',$video);
    }
    public function show_eco_trade()
    {
        $foto = Photo::where('jenis','Economic_Trade')->where('approve',true)->get();
        $video = Video::where('jenis','Economic_Trade')->where('approve',true)->get();
        return view('economic_trade')->with('photos',$foto)->with('videos',$video);
    }
    public function show_soc_pop()
    {
        $foto = Photo::where('jenis','Social_Population')->where('approve',true)->get();
        $video = Video::where('jenis','Social_Population')->where('approve',true)->get();

        return view('social_population')->with('photos',$foto)->with('videos',$video);
    }
    
}
