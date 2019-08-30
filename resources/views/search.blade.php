<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- search title -->
    <title>Search : {{$query}} | DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/general.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/search.css') !!}">
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
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-upload"></i> Admin
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/admin/approve">Approve</a></li>
                        <li><a class="dropdown-item" href="/admin/delete">Delete</a></li>
                        <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
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
        <section id="search-intro" class="mt-5">
            <div class="container-fluid">
                <!-- search query -->
                <h1 class="search-query">{{$query}}</h1>

                <!-- photo option -->
                <label for="opt1" class="radio">
                    <input type="radio" name="rdo" id="opt1" class="hidden" value="photo-search" checked />
                    <span class="type mr-3">
                        <span class="result-number">{{$photos->count()}}</span>
                        Photos
                    </span>
                </label>

                <!-- video option -->
                <label for="opt2" class="radio">
                    <input type="radio" name="rdo" id="opt2" class="hidden" value="video-search" />
                    <span class="type">
                        <span class="result-number">{{$videos->count()}}</span>
                        Videos
                    </span>
                </label>
            </div>
        </section>

        <section id="photo-search" class="area">
            <div class="container-fluid">
                <div class="grid">
                    @foreach($photos as $photo)
                    <!-- container gambar -->
                    <div class="grid-item">
                        <!-- gambar -->
                        <img class="lazy" data-src="/show/foto/{{$photo->nama_foto}}" alt="{{$photo->title}}">
                        <!-- judul dan author gambar -->
                        <div class="image-details">
                            <h5 class="image-title">{{$photo->title}}</h5>
                            <h6 class="author">By: {{$photo->author}}</h6>
                        </div>
                        <!-- link download -->
                        <a href="/show/foto/{{$photo->nama_foto}}"><i class="fa fa-arrow-down download"></i></a>
                    </div>
                    @endforeach
                </div>
                <!-- ditampilkan kalau gaada foto ditemukan -->
                @if($photos->count()==0)
                <div class="row not-found">
                    <div class="col text-center">
                        <p class="mb-4">Sorry, we couldn't find any photo for '<span class="query">{{$query}}</span>'.</p>
                        <img src="../images/not found.svg" alt="Not Found" class="img-notfound lazy">
                    </div>
                </div>
                @endif
            </div>
        </section>

        <section id="video-search" class="area">
            <div class="container-fluid">
                <div class="grid">
                    @foreach($videos as $video)
                    <!-- video container -->
                    <div class="grid-item">
                        <!-- video -->
                        <div class="codegena_iframe" data-src="https://www.youtube.com/embed/{{$video->video_id}}" data-img="https://img.youtube.com/vi/{{$video->video_id}}/sddefault.jpg" data-responsive="true"></div>
                    </div>
                    @endforeach
                </div>

                <!-- ditampilkan kalau video tidak ditemukan -->
                @if($videos->count() == 0)
                <div class="row not-found">
                    <div class="col text-center">
                        <p class="mb-4">Sorry, we couldn't find any video for '<span class="query">{{$query}}</span>'.</p>
                        <img src="../images/not found.png" alt="Not Found" class="img-notfound lazy">
                    </div>
                </div>
                @endif
            </div>
        </section>
    </main>

    <!-- footer slebew -->
    <footer id="page-footer">
        @footer @endfooter
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.5.1/intersection-observer.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.0.0/dist/lazyload.min.js"></script>
    <script src="{!! asset('js/search.js') !!}"></script>
    <script src="{!! asset('js/lazy.js') !!}"></script>
    <script src="{!! asset('js/header.js') !!}"></script>
    <script src="{!! asset('js/async-iframe.js') !!}"></script>
</body>

</html>