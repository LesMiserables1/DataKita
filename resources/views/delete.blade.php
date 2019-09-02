<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Delete</title>
    <link rel="stylesheet" href="{!! asset('css/general.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/approve.css') !!}">

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <!-- default passive events for performance optimization -->
    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar">
        <a class="navbar-brand" href="/">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div id="nav-mhweb-hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item mr-lg-4 mr-0 mr-md-1">
                    <!-- link sini -->
                    <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-image" aria-hidden="true"></i> Galleries
                    </a>
                    <!-- link sini -->
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/Agriculture-Mining">Agriculture & Mining</a></li>
                        <li><a class="dropdown-item" href="/Social-Population">Social & Population</a></li>
                        <li><a class="dropdown-item" href="/Economic-Trade">Economic & Trade</a></li>
                        <li><a class="dropdown-item" href="/Events-Experiences">Events & Experiences</a></li>
                        <li><a class="dropdown-item" href="/Infographics">Infographics</a></li>
                    </ul>
                </li>
                <!-- link sini, tapi belum ada pagenya -->
                <li class="nav-item mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link" href="/about"><i class="fa fa-address-card" aria-hidden="true"></i> About</a>
                </li>
                <li class="nav-item dropdown mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-upload"></i> Upload
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/upload/photo">Photo</a></li>
                        <li><a class="dropdown-item" href="/upload/video">Video</a></li>
                    </ul>
                </li>
                @if(isset(Auth::user()->id))
                <li class="nav-item dropdown mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user-shield"></i> Admin
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/admin/approve">Approve</a></li>
                        <li><a class="dropdown-item active" href="/admin/delete">Delete</a></li>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                      document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </ul>
                </li>
                @endif
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="/search">
                <input class="form-control search-box mr-2" type="search" placeholder="Search" aria-label="Search" name="search_query">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>

    <main>
        <div class="container-fluid">
            <form action="/admin/approve" method="post">
                <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Photo</h2>
                <hr class="mt-2 mb-5">

                <div class="row text-center justify-content-center">
                    @csrf
                    @if(count($photos[0])!=0)
                    @foreach($photos as $photo)
                    @foreach($photo['foto'] as $foto)
                    <div class="image col-lg-3 col-md-4 col-sm-6 col-9">
                        <div class="card d-block mb-5">
                            <img class="lazy card-img-top" data-src="/show/foto/{{$foto['nama_foto']}}">

                            <div class="row card-body align-items-center">
                                <div class="col-12 col-md-9 text-left">
                                    <p class="mt-2 mb-0">Title &ensp; &ensp; &ensp; : <span>{{$foto['title']}}</span></p>
                                    <p class="mt-1 mb-0">Uploader : <span>{{$foto['author']}}</span></p>
                                    <p class="mt-1 mb-0">Category : <span>{{$foto['jenis']}}</span></p>
                                </div>

                                <div class="col-12 col-md-3 d-flex justify-content-end">
                                    <label class="toggleButton">
                                        <input type="checkbox" name="check[]" value="{{$foto['id']}} " id="">
                                        <div>
                                            <svg viewBox="0 0 44 44">
                                                <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    @endforeach
                    @endif
                </div>

                <h2 class="font-weight-light text-center text-lg-left mt-4 mb-0">Video</h2>
                <hr class="mt-2 mb-5">

                <div class="row text-center justify-content-center">
                    @csrf
                    @if(count($videos[0]) > 0)
                    @foreach($videos as $video)
                    @foreach($video['video'] as $vid)
                    <div class="image col-lg-3 col-md-4 col-sm-6 col-9">
                        <div class="card d-block mb-4">
                            <div class="codegena_iframe card-img-top" data-src="http://www.youtube.com/embed/{{$vid->video_id}}" data-img="https://img.youtube.com/vi/{{$vid->video_id}}/sddefault.jpg" data-responsive="true"></div>
                            <div class="row card-body align-items-center">
                                <div class="col-12 col-md-9 text-left">
                                    <p class="mt-2 mb-0">Title &ensp; &ensp; &ensp; : <span>{{$vid['title']}}</span></p>
                                    <p class="mt-1 mb-0">Uploader : <span>{{$vid['name']}}</span></p>
                                    <p class="mt-1 mb-0">Category : <span>{{$vid['jenis']}}</span></p>
                                </div>

                                <div class="col-12 col-md-3 d-flex justify-content-end">
                                    <label class="toggleButton">
                                        <input type="checkbox" name="checkvideo[]" value="{{$vid['id']}}">
                                        <div>
                                            <svg viewBox="0 0 44 44">
                                                <path d="M14,24 L21,31 L39.7428882,11.5937758 C35.2809627,6.53125861 30.0333333,4 24,4 C12.95,4 4,12.95 4,24 C4,35.05 12.95,44 24,44 C35.05,44 44,35.05 44,24 C44,19.3 42.5809627,15.1645919 39.7428882,11.5937758" transform="translate(-2.000000, -2.000000)"></path>
                                            </svg>
                                        </div>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                        @endforeach
                    @endforeach
                    @endif
                </div>

                <div class="row text-center">
                    <div class="col">
                        <button class="btn btn-outline-danger" type="submit" value="delete" name="status">Delete</button>
                    </div>
                </div>
            </form>
        </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
    <script src="{!! asset('js/lazy.js') !!}"></script>
    <script src="{!! asset('js/async-iframe.js') !!}"></script>
    <script src="{!! asset('js/header.js') !!}"></script>
</body>

</html>