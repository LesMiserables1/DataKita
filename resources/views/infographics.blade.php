<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galleries: Infographics | DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <!-- default passive events for performance optimization -->
    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/gallery.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/general.css') !!}">

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>

    <!-- videoModal -->
    <!-- fungsinya sama seperti modal di atas, tapi ini untuk video -->
    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close ml-auto pr-2 pt-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 24px;">&times;</span>
                </button>
                <div class="modal-body carousel-wrap">
                    <div class="owl-carousel owl-theme carousel-modal">
                        <!-- video-video sini -->
                        @foreach($videos as $video)
                        <div class="item"><div class="codegena_iframe" data-src="https://www.youtube.com/embed/{{$video->video_id}}" data-img="https://img.youtube.com/vi/{{$video->video_id}}/sddefault.jpg" data-responsive="true"></div></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-image" aria-hidden="true"></i> Galleries
                    </a>
                    <!-- link sini -->
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="/Agriculture-Mining">Agriculture & Mining</a></li>
                        <li><a class="dropdown-item" href="/Social-Population">Social & Population</a></li>
                        <li><a class="dropdown-item" href="/Economic-Trade">Economic & Trade</a></li>
                        <li><a class="dropdown-item" href="/Events-Experiences">Events & Experiences</a></li>
                        <li><a class="dropdown-item active" href="/Infographics">Infographics</a></li>
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
                        <i class="fas fa-user-shield"></i> Admin
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/admin/approve">Approve</a></li>
                        <li><a class="dropdown-item" href="/admin/delete/1">Delete</a></li>
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
                <input class="form-control search-box mr-2" type="search" placeholder="Search" aria-label="Search" name="search_query" required>
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>

    <main>
        <section id="intro">
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <h3>Galleries : Infographics</h3>
                        <label for="opt1" class="radio">
                            <input type="radio" name="rdo" id="opt1" class="hidden" value="photo-gallery" checked />
                            <span class="label"></span>Photo
                        </label>
                        <label for="opt2" class="radio">
                            <input type="radio" name="rdo" id="opt2" class="hidden" value="video-gallery" />
                            <span class="label"></span>Video
                        </label>
                    </div>
                </div>
            </div>
        </section>

        <section id="photo-gallery" class="area">
            <div class="container carousel-wrap">

                <!-- <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <button type="button" class="close ml-auto pr-2 pt-1" data-dismiss="modal"
                                aria-label="Close">
                                <span aria-hidden="true" style="font-size: 24px;">&times;</span>
                            </button>
                            <div class="modal-body">
                                <div class="modal-body carousel-wrap">
                                    <div class="owl-carousel owl-theme carousel-modal">
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div> -->
                <div class="owl-carousel owl-theme gallery">
                @foreach($photos as $photo)
                    <div class="row item">
                        <!-- kolom untuk gambar -->
                        <div class="col-12 col-xl-8">
                            <div class="pict-column">
                                @foreach($photo['foto'] as $foto)
                                    <div class="item"><img class="owl-lazy" data-src="/show/foto/{{$foto->nama_foto}}"></div>
                                @endforeach
                            </div>
                        </div>
                        <!-- kolom untuk details, page lain intinya sama. cuma kontennya aja yang beda -->
                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">
                                <!-- judul caption -->
                                <div class="title">
                                    <h4>{{$photo['title']}}</h4>
                                    <hr class="mt-3 mb-3">
                                </div>

                                <div class="photo-by">
                                    <!-- nama user -->
                                    <h6 class="mb-1">Photo and Caption by</h6>
                                    <p>{{$photo['foto'][0]->author}}</p>
                                </div>

                                <div class="caption text-justify">
                                    <!-- caption. note: kalau user nginput lebih dari satu paragraf berarti butuh
                                    lebih dari satu p tag -->
                                    <p>
                                        {{$photo['foto'][0]->caption}}
                                    </p>
                                </div>

                                <div class="time">
                                    <!-- upload time -->
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>{{$photo['foto'][0]->date}}</p>
                                </div>

                                <div class="location">
                                    <!-- lokasi -->
                                    <h6 class="mb-1">Location</h6>
                                    <p>{{$photo['foto'][0]->location}}</p>
                                </div>
                                <div class="tags">
                                    <h6 class="mb-1">Tags</h6>
                                    <ul class="pl-0">
                                        @foreach($photo['foto'][0]['tags'] as $tag)
                                        <li>{{$tag}}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                <!-- link download -->
                                <a href="/show/foto/{{$photo['foto'][0]['nama_foto']}}"><button type="button"
                                        class="btn btn-primary btn-shadow mt-2">Download</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>

        <section id="video-gallery" class="area">
            <div class="container carousel-wrap">
                <div class="owl-carousel owl-theme gallery">
                    @foreach($videos as $video)

                    <!-- video2 beserta caption di dalam owl-carousel, masing2 video ada di dalam class row item, 
                        begitu juga dengan div2 anaknya seperti col-12 video-column dst. video-column untuk container video, text-column untuk container caption  -->
                    <div class="row item">
                        <div class="col-12 col-xl-8">
                            <div class="video-column">
                                <!-- video goes here -->
                                <div class="codegena_iframe" data-src="https://www.youtube.com/embed/{{$video->video_id}}" data-img="https://img.youtube.com/vi/{{$video->video_id}}/sddefault.jpg" data-responsive="true"></div>
                            </div>
                        </div>

                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">

                                <!-- judul caption -->
                                <div class="title">
                                    <h4>{{$video->title}}</h4>
                                    <hr class="mt-3 mb-3">
                                </div>

                                <!-- nama user -->
                                <div class="video-by">
                                    <h6 class="mb-1">Video and Caption by</h6>
                                    <p>{{$video->name}}</p>
                                </div>

                                <!-- caption -->
                                <div class="caption text-justify">
                                    <p>
                                        {{$video->caption}}
                                    </p>
                                </div>

                                <!-- upload time -->
                                <div class="time">
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>{{$video->date}}</p>
                                </div>

                                <!-- lokasi -->
                                <div class="location">
                                    <h6 class="mb-1">Location</h6>
                                    <p>{{$video->location}}</p>
                                </div>

                                <div class="tags">
                                    <h6 class="mb-1">Tags</h6>
                                    <ul class="pl-0">
                                        @foreach($video->tags as $tag)
                                        <li>{{$tag}}</li>
                                        @endforeach
                                    </ul>
                                </div>

                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <!-- footer slebew -->
    <footer id="page-footer">
        @footer @endfooter
    </footer>

    <script src="{!! asset('js/gallery.js') !!}"></script>
    <script src="{!! asset('js/header.js') !!}"></script>
    <script src="{!! asset('js/async-iframe.js') !!}"></script>
</body>

</html>