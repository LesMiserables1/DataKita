<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Image;
use App\Photo;
use Illuminate\Support\Facades\Storage;
use App\Video;

class UploadController extends Controller
{

    public function showUploadPhoto()
    {
        $count = \Counter::show('home');
        return view('uploadfoto')->with('count',$count);
    }
    public function showUploadVideo()
    {
        session_start();
        $client = new \Google_Client();
        $client->setApplicationName('Data Kita');
        $client->setAuthConfig(\Config::get('credential.client'));
        $client->addScope([
            'https://www.googleapis.com/auth/youtube.upload',
        ]);
        $client->setAccessType('offline');

        if (!isset($_GET['code'])) {
            $time = time();
            if (isset($_SESSION['token'])) {
                $diftime = $time - $_SESSION['token']['created'];
                if ($diftime < 3600) {
                    return view('uploadvideo');
                }
            }
            $auth_url = $client->createAuthUrl();
            $auth_url = filter_var($auth_url, FILTER_SANITIZE_URL);
            return redirect($auth_url);
        } else {
            if (!isset($client->fetchAccessTokenWithAuthCode($_GET['code'])['error'])) {
                $_SESSION['token'] = $client->getAccessToken();
            } else if (isset($_SESSION['token'])) {
                $time = time();
                $diftime = $time - $_SESSION['token']['created'];
                if ($diftime < 3600) {
                    return view('uploadvideo');
                }
                $auth_url = $client->createAuthUrl();
                $auth_url = filter_var($auth_url, FILTER_SANITIZE_URL);
                return redirect($auth_url);
            } else if (!isset($_SESSION['token'])) {
                $auth_url = $client->createAuthUrl();
                $auth_url = filter_var($auth_url, FILTER_SANITIZE_URL);
                return redirect($auth_url);
            }
        }
        $count = \Counter::show('home');

        return view('uploadvideo')->with('count',$count);
    }

    public function storeVideo(Request $request)
    {
        session_start();
        if (!isset($_SESSION['token']) && $_SESSION['token']) {
            return redirect('/upload/video');
        }
        $message = ['FORMAT BUKANLAH VIDEO'];
        $request->validate([
            'video' => 'mimetypes:video/x-flv,video/mp4,video/quicktime,video/3gpp'
        ], $message);
        $client = new \Google_Client();
        $client->setApplicationName('Data Kita');
        $client->setAuthConfig('/home/lesmiserables/project_web/DataKita/client_secret_643209902818-9acmdn9apsm6pf6qkgbqav9vlovt5a6k.apps.googleusercontent.com.json');
        $client->addScope([
            'https://www.googleapis.com/auth/youtube.upload',
        ]);
        $client->setAccessType('offline');

        $client->setAccessToken($_SESSION['token']);

        $youtube = new \Google_Service_YouTube($client);
        $snippet = new \Google_Service_YouTube_VideoSnippet();
        $snippet->setCategoryId(22);
        $snippet->setDescription($request->description);
        $snippet->setTitle($request->title);
        $video = new \Google_Service_YouTube_Video();
        $video->setSnippet($snippet);
        try {
            $response = $youtube->videos->insert(
                'snippet,id',
                $video,
                array(
                    'data' => file_get_contents($request->video->getRealPath()),
                    'mimeType' => 'video/*',
                    'uploadType' => 'multipart'
                )
            );
        } catch (\Throwable $th) {
            $msg = 'Video Gagal di Upload';
            return redirect('/')->with('msg', $msg);
        }
        $date = date('d/m/Y');
        $video = new Video;
        $video->video_id = $response->id;
        $video->jenis = $request->jenis;
        $video->caption = $request->caption;
        $video->title = $request->judul;
        $video->location = $request->lokasi;
        $video->name = $request->nama;
        $video->date = $date;
        $video->tags = $request->tags;
        $video->save();

        return redirect('/');
    }
    public function storePhoto(Request $request)
    {
        $message = ['FORMAT BUKANLAH GAMBAR'];
        $request->validate([
            'foto.*' => 'image'
        ], $message);
        foreach ($request->foto as $foto) {
            $time = date('YHis');
            $date = date('d/m/Y');
            $nama_foto = hash('sha256', $foto->getClientOriginalName() . $time);
            $image = Image::make($foto->getRealPath())->stream();
            Storage::disk('foto')->put($nama_foto, $image);
            $photo = new Photo;
            $photo->author = $request->author;
            $photo->title = $request->title;
            $photo->location = $request->location;
            $photo->tags = $request->tags;
            $photo->jenis = $request->jenis;
            $photo->nama_foto = $nama_foto;
            $photo->caption = $request->caption;
            $photo->date = $date;
            $photo->save();
        }
        return redirect('/');
    }
    public function showPhoto(Request $request)
    {
        $foto = Photo::where('nama_foto', $request->nama_foto)->first();
        try {
            $path = Storage::disk('foto')->get($foto->nama_foto);
            $image = Image::make($path)->resize('300', '300');
            return $image->response();
        } catch (\Throwable $th) { }

        return;
    }
}
