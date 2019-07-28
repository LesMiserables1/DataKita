<!-- gambar
@foreach($photos as $photo)
{{$photo->caption}}
<img src="/show/foto/{{$photo->nama_foto}}">
@endforeach

video
@foreach($videos as $video)
{{$video->caption}}
<iframe width="640" height="390" src="http://www.youtube.com/embed/{{$video->video_id}}" frameborder="0" allowfullscreen></iframe>
@endforeach -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Galleries: Economic & Trade | DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <script src="https://kit.fontawesome.com/95df692867.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

<body>
    <!-- photoModal -->
    <!-- ditampilkan ketika mengeklik button yang ada di slide yang lebih dari satu foto -->
    <div class="modal fade" id="photoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="close ml-auto pr-2 pt-1" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true" style="font-size: 24px;">&times;</span>
                </button>
                <div class="modal-body carousel-wrap">
                    <div class="owl-carousel owl-theme carousel-modal">
                        <!-- foto-foto tersebut diletakkan di sini. di dalam owl-carousel dan div foto tersebut punya class item -->
                        @foreach($photos as $photo)
                        <div class="item"><img src="/show/foto/{{$photo->nama_foto}}"></div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>

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
                        <div class="item"><iframe src="https://www.youtube.com/embed/-Y9x-imQBBs" allowfullscreen></iframe></div>
                        <div class="item"><iframe src="https://www.youtube.com/embed/MlR2qnfYJUc" allowfullscreen></iframe></div>
                        <div class="item"><iframe src="https://www.youtube.com/embed/u1CurC9VAdM" allowfullscreen></iframe></div>
                        <div class="item"><iframe src="https://www.youtube.com/embed/k5Y8YcKnRm0" allowfullscreen></iframe></div>
                        <div class="item"><iframe src="https://www.youtube.com/embed/gF8CtggKafc" allowfullscreen></iframe></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar" style="background: #212529;">
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
                        <li><a class="dropdown-item active" href="/Economic-Trade">Economic & Trade</a></li>
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
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control search-box mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>

    <main>
        <section id="intro">
            <div class="container">
                <div class="row mt-5">
                    <div class="col">
                        <h3>Galleries : Economic & Trade</h3>
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
<<<<<<< HEAD
            </section>
            
            <section id="photo-gallery" class="area">
                <div class="container carousel-wrap">
                    <div class="owl-carousel owl-theme gallery">
                        
                        <!-- foto2 beserta caption di dalam owl-carousel, masing2 foto ada di dalam class row item, 
                        begitu juga dengan div2 anaknya seperti col-12 pict-column dst. pict-column untuk container gambar, text-column untuk container caption  -->
                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <!-- image goes here -->
                                    <img src="https://source.unsplash.com/mQ0_MMw5qas">
                                </div>
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>Human's Curiosity</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="photo-by">
                                        <!-- nama user -->
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Grisha Yeager</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <!-- caption. note: kalau user nginput lebih dari satu paragraf berarti butuh
                                    lebih dari satu p tag -->
                                        <p>Nothing can surpass a human's curiosity.
                                        </p>
                                    </div>

                                    <div class="time">
                                        <!-- upload time -->
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>14/12/2016</p>
                                    </div>

                                    <div class="location">
                                        <!-- lokasi -->
                                        <h6 class="mb-1">Location</h6>
                                        <p>Southbank Centre Food Market (#SCFoodMarket), London, United Kingdom</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Market</li>
                                            <li>Crowd</li>
                                            <li>Seller</li>
                                            <li>Store</li>
                                        </ul>
                                    </div>

                                    <!-- link download -->
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/CTtnaHiLvIA">
                                </div>
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>Murderer</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Dot Pixis</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>If it means mankind will live on, I don't mind being called a murderer
                                        </p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>20/01/2019</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Du Pain et Des Jeux Bakery, Murat, France</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Kitchen</li>
                                            <li>Knife</li>
                                        </ul>
                                    </div>

                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/eH4yNlFJCb8">
                                    <!-- Button trigger modal -->
                                    <!-- jika slide punya lebih dari satu foto, muncul button ini dengan atribut seperti yang
                                    bisa dilihat di bawah. kalau dalam satu galeri ada lebih dari satu slide yang punya lebih dari
                                    satu foto, button ini akan muncul di slide tersebut dengan atribut yang sama. data-targetnya sama
                                    karena ketika diklik akan memunculkan modal untuk foto yang sudah dideklarasikan di atas, tapi isi
                                    modal tersebut tergantung konten slide yang buttonnya diklik. buttonnya ada di pict-column y -->
                                    <button type="button" class="btn btn-primary more-than-one" data-toggle="modal" data-target="#photoModal">
                                        See full slide
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>Reality</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Itachi Uchiha</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>People live their lives bound by what they accept as correct and true. 
                                        That's how they define reality. But what does it mean to be correct or true? 
                                        Merely vague concepts. Their reality may all be a mirage. 
                                        Can we consider them to simply be living in their own world, shaped by their beliefs?
                                        </p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>28/03/2017</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Heiligenschwendi, Switzerland</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Man</li>
                                            <li>Dawn</li>
                                            <li>Tree</li>
                                            <li>Observation</li>
                                        </ul>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
=======
            </div>
        </section>

        <section id="photo-gallery" class="area">
            <div class="container carousel-wrap">
                <div class="owl-carousel owl-theme gallery">
                    @foreach($photos as $photo)
                    <!-- foto2 beserta caption di dalam owl-carousel, masing2 foto ada di dalam class row item, 
                        begitu juga dengan div2 anaknya seperti col-12 pict-column dst. pict-column untuk container gambar, text-column untuk container caption  -->
                    <div class="row item">
                        <div class="col-12 col-xl-8">
                            <div class="pict-column">
                                <!-- image goes here -->
                                <img src="/show/foto/{{$photo->nama_foto}}">
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">
                                <!-- judul caption -->
                                <div class="title">
                                    <h4>{{$photo->title}}</h4>
                                    <hr class="mt-3 mb-3">
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                                <div class="photo-by">
                                    <!-- nama user -->
                                    <h6 class="mb-1">Photo and Caption by</h6>
                                    <p>{{$photo->author}}</p>
                                </div>
<<<<<<< HEAD
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>Like How I Found You</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Orochimaru</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>There probably isn't any meaning in life. Perhaps you can find something interesting to do 
                                        while you are alive. Like how you found that flower. Like how I found you.
                                        </p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>06/06/2016</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Östermalmsgatan, Stockholm, Sweden</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Flower</li>
                                            <li>Garden</li>
                                            <li>Afternoon</li>
                                            <li>Field</li>
                                        </ul>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
=======
                                <div class="caption text-justify">
                                    <!-- caption. note: kalau user nginput lebih dari satu paragraf berarti butuh
                                    lebih dari satu p tag -->
                                    <p>
                                        {{$photo->caption}}
                                    </p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                                <div class="time">
                                    <!-- upload time -->
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>{{$photo->date}}</p>
                                </div>
<<<<<<< HEAD
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>Stay Focused</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Shikamaru Nara</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>Regardless of our limitations, we can always be of some use. Our power may seem insignificant. 
                                        But it may just prove to be useful in the grand scheme of things. Stay focused. Never avert your eyes, 
                                        because if an opening arises, even our insignificant power may be enough to determine the fate of the world. 
                                        Which is why everyone must stay alert and ready to strike at any moment!
                                        </p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>11/12/2016</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Muriwai, New Zealand</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Person</li>
                                            <li>Dawn</li>
                                            <li>Focus</li>
                                        </ul>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
=======
                                <div class="location">
                                    <!-- lokasi -->
                                    <h6 class="mb-1">Location</h6>
                                    <p>{{$photo->location}}</p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                                <!-- link download -->
                                <a href="/show/foto/{{$photo->nama_foto}}"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
<<<<<<< HEAD
            </section>
            
            <section id="video-gallery" class="area">
                <div class="container carousel-wrap">
                    <div class="owl-carousel owl-theme gallery">

                        <!-- video2 beserta caption di dalam owl-carousel, masing2 video ada di dalam class row item, 
                        begitu juga dengan div2 anaknya seperti col-12 video-column dst. video-column untuk container video, text-column untuk container caption  -->
                        <div class="row item">

                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                    <!-- video goes here -->
                                    <iframe src="https://www.youtube.com/embed/-Y9x-imQBBs" allowfullscreen></iframe>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary more-than-one" data-toggle="modal" data-target="#videoModal">
                                        See full slide
                                    </button>
                                </div>
                            </div>

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>Create Your Perfect Digital Signature in Photoshop</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <!-- nama user -->
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>PiXimperfect</p>
                                    </div>

                                    <!-- caption -->
                                    <div class="caption text-justify">
                                        <p>Easily Create Your Digital Autograph or Signature with this New Feature in Photoshop! Learn how to use 
                                        "Brush Smoothing" along with pressure sensitivity and pen tilt feature in Wacom Tablets to create beautiful 
                                        signatures for branding, watermark, or simply signing your work.
                                        </p>
                                        <p>
                                            In this tutorial, we will walk you through the entire process of creating the 
                                            design, followed by the best practices to export it. Then, we will learn how 
                                            to add the signature or design to your images. In the end, we'll look into 
                                            converting your digital signature to a vector graphic using Adobe Illustrator 
                                            so that it never pixelates no matter how large you make it.
                                        </p>
                                    </div>

                                    <!-- upload time -->
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>27/02/2019</p>
                                    </div>

                                    <!-- lokasi -->
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Mumbai, India</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Design</li>
                                            <li>Adobe</li>
                                            <li>Photoshop</li>
                                            <li>Signature</li>
                                        </ul>
                                    </div>
=======
            </div>
        </section>

        <section id="video-gallery" class="area">
            <div class="container carousel-wrap">
                <div class="owl-carousel owl-theme gallery">
                    <!-- video2 beserta caption di dalam owl-carousel, masing2 video ada di dalam class row item, 
                        begitu juga dengan div2 anaknya seperti col-12 video-column dst. video-column untuk container video, text-column untuk container caption  -->
                    <div class="row item">
                        <div class="col-12 col-xl-8">
                            <div class="video-column">
                                <!-- video goes here -->
                                <iframe src="https://www.youtube.com/embed/-Y9x-imQBBs" allowfullscreen></iframe>
                                <!-- Button trigger modal -->
                                <button type="button" class="btn btn-primary more-than-one" data-toggle="modal" data-target="#videoModal">
                                    See full slide
                                </button>
                            </div>
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">
                                <!-- judul caption -->
                                <div class="title">
                                    <h4>Create Your Perfect Digital Signature in Photoshop</h4>
                                    <hr class="mt-3 mb-3">
                                </div>
                                <!-- nama user -->
                                <div class="video-by">
                                    <h6 class="mb-1">Video and Caption by</h6>
                                    <p>PiXimperfect</p>
                                </div>
                                <!-- caption -->
                                <div class="caption text-justify">
                                    <p>Easily Create Your Digital Autograph or Signature with this New Feature in Photoshop! Learn how to use
                                        "Brush Smoothing" along with pressure sensitivity and pen tilt feature in Wacom Tablets to create beautiful
                                        signatures for branding, watermark, or simply signing your work.
                                    </p>
                                    <p>
                                        In this tutorial, we will walk you through the entire process of creating the
                                        design, followed by the best practices to export it. Then, we will learn how
                                        to add the signature or design to your images. In the end, we'll look into
                                        converting your digital signature to a vector graphic using Adobe Illustrator
                                        so that it never pixelates no matter how large you make it.
                                    </p>
                                </div>
                                <!-- upload time -->
                                <div class="time">
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>27/02/2019</p>
                                </div>
                                <!-- lokasi -->
                                <div class="location">
                                    <h6 class="mb-1">Location</h6>
                                    <p>Mumbai, India</p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-12 col-xl-8">
                            <div class="video-column">
                                <iframe src="https://www.youtube.com/embed/anDvD_qzbOM" allowfullscreen></iframe>
                            </div>
<<<<<<< HEAD

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>How to Create GLITCH ANIMATION in Photoshop | GIF Effect Tutorial</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Photoshop Tutorials | Photo effects</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>In this photoshop tutorial we will see how to create glitch animation. 
                                        I my self did not know how to do it properly but now i can say it that its really 
=======
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">
                                <div class="title">
                                    <h4>How to Create GLITCH ANIMATION in Photoshop | GIF Effect Tutorial</h4>
                                    <hr class="mt-3 mb-3">
                                </div>
                                <div class="video-by">
                                    <h6 class="mb-1">Video and Caption by</h6>
                                    <p>Photoshop Tutorials | Photo effects</p>
                                </div>
                                <div class="caption text-justify">
                                    <p>In this photoshop tutorial we will see how to create glitch animation.
                                        I my self did not know how to do it properly but now i can say it that its really
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                        easy effect.
                                    </p>
                                    <p>
                                        All you need to do is find proper image and apply different glitch effect and use
                                        frame animation, entire photo effect can be done under 15 minutes.
                                    </p>
                                    <p>
                                        Not to mention that there are million different glitch effects you can create
                                        using the same trick. That is actually the reason keep coming back to this photo
                                        effect.
<<<<<<< HEAD
                                        </p>
                                        <p>I hope you learn something from this photoshop tutorial, have a good day.</p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>24/05/2018</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>India</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Design</li>
                                            <li>Adobe</li>
                                            <li>Photoshop</li>
                                            <li>Glitch</li>
                                            <li>Animation</li>
                                        </ul>
                                    </div>
=======
                                    </p>
                                    <p>I hope you learn something from this photoshop tutorial, have a good day.</p>
                                </div>
                                <div class="time">
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>24/05/2018</p>
                                </div>
                                <div class="location">
                                    <h6 class="mb-1">Location</h6>
                                    <p>India</p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row item">
                        <div class="col-12 col-xl-8">
                            <div class="video-column">
                                <iframe src="https://www.youtube.com/embed/WGMDXOr4LmI" allowfullscreen></iframe>
                            </div>
<<<<<<< HEAD

                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">

                                    <div class="title">
                                        <h4>How to make your photos LOOK BETTER FAST! Photoshop Tutorial</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>

                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Peter McKinnon</p>
                                    </div>

                                    <div class="caption text-justify">
                                        <p>What's up guys! In this tutorial, I'm going over some techniques to make your 
                                        photos pop, stand out and generally just look better, fast! 
                                        </p>
                                        <p>If you are looking for ways to step up your editing game and enter the ring with photoshop - 
                                        this video is for you. </p>
                                    </div>

                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>23/01/2017</p>
                                    </div>

                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Toronto, Canada</p>
                                    </div>

                                    <!-- tags ada di sini -->
                                    <div class="tags">
                                        <h6 class="mb-1">Tags</h6>
                                        <ul class="pl-0">
                                            <li>Design</li>
                                            <li>Adobe</li>
                                            <li>Photoshop</li>
                                            <li>Tutorial</li>
                                        </ul>
                                    </div>
=======
                        </div>
                        <div class="col-12 col-xl-4">
                            <div class="text-column p-4 p-xl-2">
                                <div class="title">
                                    <h4>How to make your photos LOOK BETTER FAST! Photoshop Tutorial</h4>
                                    <hr class="mt-3 mb-3">
                                </div>
                                <div class="video-by">
                                    <h6 class="mb-1">Video and Caption by</h6>
                                    <p>Peter McKinnon</p>
                                </div>
                                <div class="caption text-justify">
                                    <p>What's up guys! In this tutorial, I'm going over some techniques to make your
                                        photos pop, stand out and generally just look better, fast!
                                    </p>
                                    <p>If you are looking for ways to step up your editing game and enter the ring with photoshop -
                                        this video is for you. </p>
                                </div>
                                <div class="time">
                                    <h6 class="mb-1">Uploaded on</h6>
                                    <p>23/01/2017</p>
                                </div>
                                <div class="location">
                                    <h6 class="mb-1">Location</h6>
                                    <p>Toronto, Canada</p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<<<<<<< HEAD
            </section>
        </main>
        
        <!-- footer slebew -->
        <footer id="page-footer" style="background: #212529;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12 col-md-4 mr-auto mt-md-3">
                        <a href="/">Logo DataKita</a>
                        <p>This is text.</p>
                    </div>
                    <div class="col-sm-12 col-md-4 ml-auto text-center respond d-flex flex-column mt-md-3">
                        <p class="mb-0">Respond us on</p>
                        <ul class="socmed mb-0 pl-md-0">
                            <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="mr-3"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4 mr-auto mt-md-3"></div>
=======
            </div>
        </section>
    </main>

    <!-- footer slebew -->
    <footer class="page-footer" style="background: #212529;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12 col-md-4 mr-auto mt-md-3">
                    <a href="/">Logo DataKita</a>
                    <p>This is text.</p>
>>>>>>> 0fede738e31fc1d91865ff8d23ee79d3e530ceca
                </div>
                <div class="col-sm-12 col-md-4 ml-auto text-center respond d-flex flex-column mt-md-3">
                    <p class="mb-0">Respond us on</p>
                    <ul class="socmed mb-0 pl-md-0">
                        <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                        <li class="mr-3"><a href="#"><i class="fab fa-youtube"></i></a></li>
                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    </ul>
                </div>
                <div class="col-sm-12 col-md-4 mr-auto mt-md-3"></div>
            </div>
            <div class="row">
                <div class="col-sm-12 col-md-4 mr-auto d-flex align-items-center counts mt-md-3">
                    929 website visits
                </div>
                <div class="col-sm-12 col-md-4 justify-content-center d-flex align-items-center copyright mt-md-3">
                    <span>&copy; 2019 DataKita | <a href="https://omahti.web.id" target="_blank"> OmahTI UGM</a></span>
                </div>
                <div class="col-sm-12 col-md-4 mr-auto mt-md-3"></div>
            </div>
        </div>
    </footer>

    <script>
        $('.gallery').owlCarousel({
            loop: true,
            margin: 10,
            smartSpeed: 1100,
            dots: false,
            nav: true,
            navText: [
                "<i class='fa fa-long-arrow-left'></i>",
                "<i class='fa fa-long-arrow-right'></i>"
            ],
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        });

        $('.carousel-modal').owlCarousel({
            loop: true,
            margin: 10,
            smartSpeed: 1100,
            dots: true,
            nav: true,
            navText: [
                "<i class='fa fa-long-arrow-left'></i>",
                "<i class='fa fa-long-arrow-right'></i>"
            ],
            autoplay: false,
            responsive: {
                0: {
                    items: 1
                }
            }
        });

        var prevScrollpos = window.pageYOffset;
        $(window).on("scroll", function() {
            if ($(window).scrollTop() > $(window).height() * 0.25) {
                $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0.3)')
            } else {
                $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0)')
            }
            //to hide navbar after user scrolling down 100vw-50px from top and redisplay it when user scrolls up
            var currentScrollPos = window.pageYOffset;
            if ($(window).scrollTop() > $(window).height() - 400) {
                if (prevScrollpos > currentScrollPos) {
                    document.getElementById("navbar").style.top = "0";
                } else {
                    document.getElementById("navbar").style.top = "-120px";
                }
                prevScrollpos = currentScrollPos;
            }
        });

        $(document).ready(function() {
            $('#nav-mhweb-hamburger').click(function() {
                $(this).toggleClass('open');
            });
            $('#photo-gallery').css('display', 'block');
        });

        $('input[type=radio]').click(function() {
            $('.area').hide(1000);
            $('#' + $(this).val()).show(1000);
        });
    </script>
</body>

</html>