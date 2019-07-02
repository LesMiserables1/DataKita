<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\Photo;
class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    public function approve(Request $request)
    {
        $photo = Photo::find($request->id);
        $photo->approve = true;
        $photo->save();
    }
}
