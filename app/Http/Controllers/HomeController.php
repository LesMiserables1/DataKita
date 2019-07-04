<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Photo;
use Illuminate\Support\Facades\Storage;
use Image;

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
        return view('agriculture_mining')->with('photos',$foto);
    }
    public function show_eco_trade()
    {
        $foto = Photo::where('jenis','Economic_Trade')->where('approve',true)->get();
        return view('agriculture_mining')->with('photos',$foto);
    }
    public function show_soc_pop()
    {
        $foto = Photo::where('jenis','Social_Population')->where('approve',true)->get();
        return view('agriculture_mining')->with('photos',$foto);
    }
    
}
