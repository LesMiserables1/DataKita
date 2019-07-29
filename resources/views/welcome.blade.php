<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <!-- animate.css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/95df692867.js"></script>

    <!-- style -->
    <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">

    <!-- default passive events for performance optimization -->
    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>

    <!-- fullpage.js -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/3.0.7/fullpage.extensions.min.js"></script>

    <!-- OwlCarousel -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
</head>

    <body class="fp-responsive">
        
@if(session()->get('msg')!=null)
    <div class="alert alert-danger">
    {{ session()->get('msg') }}
    </div> 
@endif 
        <nav class="navbar navbar-expand-md navbar-dark home-nav" id="navbar">
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
                    <li class="nav-item active mr-lg-4 mr-0 mr-md-1">
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
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="/search">
                <input class="form-control mr-2 search-box" type="search" placeholder="Search" aria-label="Search" name="search_query">
                <button class="btn btn-primary my-2 my-sm-0 search-button" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>

        <main id="fullpage">
            <section id="agriculture" class="section" data-anchor="first">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center text-title">Agriculture & Mining</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Agriculture-Mining"><button type="button" class="btn btn-primary">View gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="social" class="section" data-anchor="second">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center text-title">Social & Population</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Social-Population"><button type="button" class="btn btn-primary">View gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="economy" class="section" data-anchor="third">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center text-title">Economy & Trade</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Economic-Trade"><button type="button" class="btn btn-primary">View gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="events" class="section" data-anchor="fourth">
                <div class="container">
                    <h1 class="text-center text-title mt-4 mb-2">Events & Experiences</h1>
                    <div class="blue-line mb-4 mt-1 mx-auto"></div>
                    <div class="row text-center d-flex flex-wrap">
                        @foreach($photoEve as $photo)
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4">
                                <!-- gambar -->
                                <img class="img-fluid img-thumbnail" src="/show/foto/{{$photo->nama_foto}}" alt="">
                                <div class="img-detail">
                                    <!-- judul gambar -->
                                    <h5 class="image-title">{{$photo->title}}</h5>
                                    <!-- tag -->
                                    <span class="tag">{{$photo->tags}}</span>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <a href="/Events-Experiences"><button type="button" class="btn btn-primary btn-shadow">Show more</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="infographics" class="section" data-anchor="fifth">
                <div class="container">
                    <h1 class="text-center text-title mt-4 mb-2">Infographics</h1>
                    <div class="blue-line mb-4 mt-1 mx-auto"></div>
                    <div class="row carousel-wrap">
                        <div class="owl-carousel owl-theme">
                            @foreach($photoInfo as $photo)
                            <div class="item">
                                <!-- gambar -->
                                <img src="/show/foto/{{$photo->nama_foto}}">
                                <!-- judul gambar -->
                                <h5 class="image-title">{{$photo->title}}</h5>
                            </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="row">
                        <div class="col text-center">
                            <a href="/Infographics"><button type="button" class="btn btn-primary btn-shadow mt-2">Inform more</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <!-- footer -->
            <footer id="page-footer" class="section fp-auto-height mt-n4" style="background: #212529;" data-anchor="sixth">
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
        </main>

        <script>
            // owlCarousel activator and customization
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                animateOut: 'rollOut',
                animateIn: 'jackInTheBox',
                nav: true,
                navText: [
                    "<i class='fa fa-long-arrow-left'></i>",
                    "<i class='fa fa-long-arrow-right'></i>"
                ],
                autoplay: false,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    576: {
                        items: 2
                    },
                    768: {
                        items: 3
                    },
                    992: {
                        items: 4
                    }
                }
            });

            // toggle hamburger
            $(document).ready(function(){
                $('#nav-mhweb-hamburger').click(function(){
                    $(this).toggleClass('open');
                });

                //fullpage activator
                $('#fullpage').fullpage({
                    scrollHorizontally: true,
                    anchors: ['first', 'second', 'third', 'fourth', 'fifth', 'sixth'],
                    navigation: true,
                    autoScrolling: true,
                    scrollingSpeed: 900,
                    navigationPosition: 'left',
                    navigationTooltips: ['Agriculture & Mining', 'Social & Population', 'Economy & Trade', 'Events & Experiences', 'Infographics', 'Footer'],
                    onLeave: function(origin, destination, direction){
                        //change indicator color
                        var destIndex = destination.index;
                        if(destIndex >= 3){
                            $('.fp-tooltip').addClass('blue-color');
                            $('#fp-nav ul li a span').addClass('blue-background');
                        }
                        else{
                            $('.fp-tooltip').removeClass('blue-color');
                            $('#fp-nav ul li a span').removeClass('blue-background');
                        }

                        //change navbar opacity
                        if(direction == "down") $('#navbar').css("opacity", "0");
                        else $('#navbar').css("opacity", "1");
                    }
                });
                $.fn.fullpage.setAllowScrolling(true);
            });
    </script>
</body>

</html>