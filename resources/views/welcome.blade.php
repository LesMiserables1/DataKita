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
        
@if(session()->get('msg')!=null)
    <div class="alert alert-danger">
    {{ session()->get('msg') }}
    </div> 
@endif 
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
                    <li class="nav-item active mr-lg-3 mr-0 mr-md-1">
                        <!-- link sini -->
                        <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mr-lg-3 mr-0 mr-md-1">
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
                    <li class="nav-item mr-lg-3 mr-0 mr-md-1">
                        <a class="nav-link" href="/about"><i class="fa fa-address-card" aria-hidden="true"></i> About</a>
                    </li>
                    <li class="nav-item dropdown mr-lg-3 mr-0 mr-md-1">
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
            <section id="agriculture">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center">Agriculture & Mining</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Agriculture-Mining"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="social">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center">Social & Population</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Social-Population"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="economy">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center">Economy & Trade</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="/Economic-Trade"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="events">
                <div class="container">
                    <h1 class="text-center mt-4 mb-5">Events & Experiences</h1>
                    <div class="row text-center d-flex flex-wrap">
                                    <!-- link sini -->
                    <!-- gambar gambar sini, div dan class sama semua, cuma link gambarnya yang beda -->
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/6YmzwamGzCg" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/JXDohZk64Mw" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/Jrl_UQcZqOc" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/dI9KhXi0ooE" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/WwD-LlmXp5o" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/ahzw2Tg7IXs" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/_oNISBwMTwo" alt="">
                            </div>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <div class="d-block mb-4 h-100">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/tuQWhQuaCO0" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                        <!-- link sini -->
                            <a href="/Events-Experiences"><button type="button" class="btn btn-primary btn-shadow">Load more</button></a>
                        </div>
                    </div>
                </div>
            </section>

            <section id="infographics">
                <div class="container">
                    <h1 class="text-center mt-4 mb-5">Infographics</h1>
                    <div class="row carousel-wrap">
                        <div class="owl-carousel owl-theme">
                        <!-- gambar gambar sini -->
                            <div class="item"><img src="https://source.unsplash.com/T9Gsevu_N8Y"></div>
                            <div class="item"><img src="https://source.unsplash.com/s87ngBxo4xg"></div>
                            <div class="item"><img src="https://source.unsplash.com/PgNKq33I-Fk"></div>
                            <div class="item"><img src="https://source.unsplash.com/VtppxC-GfZs"></div>
                            <div class="item"><img src="https://source.unsplash.com/9PUHwNnFIVc"></div>
                            <div class="item"><img src="https://source.unsplash.com/fsdWYNTymjI"></div>
                            <div class="item"><img src="https://source.unsplash.com/qgEKJkf4sKY"></div>
                            <div class="item"><img src="https://source.unsplash.com/zglUlG8k47I"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                            <a href="/Infographics"><button type="button" class="btn btn-primary btn-shadow mt-2">Load more</button></a>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="page-footer" style="background: #212529;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href="/">Logo DataKita</a>
                        <p>This is text.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 mr-auto d-flex align-items-center counts mt-md-3">
                        929 website visits
                    </div>
                    <div class="col-sm-12 col-md-4 ml-auto text-right respond order-2 order-md-3 d-flex flex-column mt-md-3">
                        <p>Respond us on</p>
                        <ul class="socmed">
                            <li class="mr-3"><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li class="mr-3"><a href="#"><i class="fab fa-youtube"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-12 col-md-4 order-3 order-md-2 justify-content-center d-flex align-items-center copyright mt-md-3">
                        <span>&copy; 2019 DataKita | <a href="https://omahti.web.id" target="_blank"> OmahTI UGM</a></span>
                    </div>
                </div>
            </div>
        </footer>
        <script>
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
            });
        </script>
    </body>
</html>