<!-- @foreach($photos as $photo)
<img src="/show/foto/{{$photo->nama_foto}}">
@endforeach -->
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galleries: Social & Population | DataKita</title>
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
                            <div class="item"><img src="https://source.unsplash.com/_es6l-aPDA0"></div>
                            <div class="item"><img src="https://source.unsplash.com/3fPXt37X6UQ"></div>
                            <div class="item"><img src="https://source.unsplash.com/k_RYBedEvDw"></div>
                            <div class="item"><img src="https://source.unsplash.com/gcDwzUGuUoI"></div>
                            <div class="item"><img src="https://source.unsplash.com/i5Kx0P8A0d4"></div>
                            <div class="item"><img src="https://source.unsplash.com/nDChi18rJcg"></div>
                            <div class="item"><img src="https://source.unsplash.com/NYrVisodQ2M"></div>
                            <div class="item"><img src="https://source.unsplash.com/F16YG4WLIvk"></div>
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
                            <div class="item"><iframe src="https://www.youtube.com/embed/hLjht9uJWgw" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/YmWMi1kVCG8" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/ReVeUvwTGdU" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/NRiVrZ_8vwA" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/SC7lLm6QAb8" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/CWyTYcPtv_Q" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/vNpV9qV0Czg" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/l5VtPY7FBw4" allowfullscreen></iframe></div>
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
                            <li><a class="dropdown-item active" href="/Social-Population">Social & Population</a></li>
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
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
        
        <main>
            <section id="intro">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col">
                            <h3>Galleries : Social & Population</h3>
                            <label for="opt1" class="radio">
                                <input type="radio" name="rdo" id="opt1" class="hidden" value="photo-gallery" checked/>
                                <span class="label"></span>Photo
                            </label>
                            <label for="opt2" class="radio">
                                <input type="radio" name="rdo" id="opt2" class="hidden" value="video-gallery"/>
                                <span class="label"></span>Video
                            </label>
                        </div>
                    </div>
                </div>
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
                                    <img src="https://source.unsplash.com/I7iYOlDyFjE">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>Average Men</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <!-- nama user -->
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Keith Shadis</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <!-- caption. note: kalau user nginput lebih dari satu paragraf berarti butuh
                                    lebih dari satu p tag -->
                                        <p>Do you know why average men can live out their lives and die without accomplishing anything? 
                                            First off, because they lack imagination. They never find anything more valuable than their own lives. 
                                            So they live and die, shamelessly creating nothing but shit. Great deeds can never be accomplished by 
                                            those on the level of ordinary men.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <!-- upload time -->
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>17/12/2017</p>
                                    </div>
                                    <div class="location">
                                        <!-- lokasi -->
                                        <h6 class="mb-1">Location</h6>
                                        <p>Ellsworth, United States</p>
                                    </div>
                                    <!-- link download -->
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/_es6l-aPDA0">
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
                                        <h4>Slaves to Something</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Kenny Ackerman</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Every last person I've seen was the same way. Whether it was booze, women, or even God. 
                                        Family, the king, dreams, children, power... They couldn't keep going unless they were drunk on
                                         something. They were all slaves to something, even him.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>10/12/2014</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Tate Modern Museum, London</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/rk_Zz3b7G2Y">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Being Special</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Carla Yeager</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Do you really have to be special? Do you really need people's recognition? 
                                            I don't think so. At the very least, not when it comes to this child. 
                                            He doesn't need to become special. Why would he have to be better than everyone else? 
                                            Just look at him. Don't you see how cute he is? He's already special because he was born 
                                            into this world.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>01/09/2017</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Montreux, Switzerland</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/onyVOSm3uNc">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Nothing Could Have Made a Difference</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Bertholdt Hoover</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>I feel like any outcome would be acceptable. That's right. No one's at fault here. 
                                        Nothing could have made a difference. Not in a world that is this cruel.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>04/05/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Base sous-marine, Bordeaux, France</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/2LowviVHZ-E">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>No Such Thing as Truth</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Eren Kruger</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>There is no such thing as truth in this world. That is our reality. 
                                        Anyone can become a good person or even a devil. All it takes is for someone to claim that to be the truth.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>22/11/2017</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>New York, United States</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                    <iframe src="https://www.youtube.com/embed/384qFPXCuO4" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>The Worst Animated Stories On Youtube (My Story Animated)</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <!-- nama user -->
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>jarvis Johnson</p>
                                    </div>
                                    <!-- caption -->
                                    <div class="caption text-justify">
                                        <p>Hello and welcome back to old man shouting at cloud. 
                                        I’m Jarvis and today we're talking about my story animated which is the latest 
                                        in clickbait animation channels full of overdramatic and probably fake stories “submitted by kids”
                                        </p>
                                    </div>
                                    <!-- upload time -->
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>12/04/2019</p>
                                    </div>
                                    <!-- lokasi -->
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>San Francisco, California</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                <iframe src="https://www.youtube.com/embed/jT5nYLND7co" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Understanding Neural Networks</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Massachusetts Institute of Technology (MIT)</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>MIT-IBM Watson AI lab research team member David Bau explains how computers show evidence of 
                                        learning the structure of the physical world.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>26/06/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Massachusetts, United States</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                    <iframe src="https://www.youtube.com/embed/hqFb7pvYWiQ" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Adobe XD Dark Theme App Design Tutorial</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Caler Edwards</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>In this video we will design a dark theme app using Adobe XD. This project focuses on app design, 
                                        User interface (UI) design and User experience (UX) design. Make sure you vote in the poll at the end of 
                                        the video for a possible part 2. Enjoy the video :D
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>07/07/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Richmond, Kentucky</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                    <iframe src="https://www.youtube.com/embed/hLjht9uJWgw"allowfullscreen></iframe>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary more-than-one" data-toggle="modal" data-target="#videoModal">
                                        See full slide
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Downloading My Private Google Data, This is What I Found</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Devon Crawford</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <!-- contoh kalau user nginput caption lebih dari satu paragraf -->
                                        <p>
                                        Took a look at my private data and found some pretty weird stuff, 
                                        possible security vulnerability with Google Photos, third-party data from eBay and Amazon as well as 
                                        audio recordings from "Ok, Google". 
                                        </p>
                                        <p>
                                        These are just my personal findings and I cannot claim this happens for everyone. 
                                        Luckily most people watching this video have a YouTube account and therefore a Google 
                                        account. You can all download your own data and look for what I found in this video, 
                                        I didn't even have to do any heavy digging, its all pretty much out in the open once you 
                                        throw stuff into your text editor. This content is not intended to harm any entity or 
                                        person but rather share some concerns with the current state of data privacy on large 
                                        websites such as Google.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>12/04/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Guelph, Ontario, Canada</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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
            $(window).on("scroll", function(){
                if($(window).scrollTop() > $(window).height()*0.25){
                    $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0.3)')
                }
                else{
                    $('nav').css('box-shadow', '0 1px 30px 12px rgba(33, 37, 41, 0)')
                }
                //to hide navbar after user scrolling down 100vw-50px from top and redisplay it when user scrolls up
                var currentScrollPos = window.pageYOffset;
                if($(window).scrollTop() > $(window).height() - 400){
                    if(prevScrollpos > currentScrollPos){
                        document.getElementById("navbar").style.top = "0";
                    } else{
                        document.getElementById("navbar").style.top = "-120px";
                    }
                    prevScrollpos = currentScrollPos;
                }
            });

            $(document).ready(function(){
                $('#nav-mhweb-hamburger').click(function(){
                    $(this).toggleClass('open');
                });
                $('#photo-gallery').css('display','block');
            });

            $('input[type=radio]').click(function(){
                $('.area').hide(1000);
                $('#' + $(this).val()).show(1000); 
            });
        </script>
    </body>
</html>