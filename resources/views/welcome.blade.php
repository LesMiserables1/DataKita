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

        <!-- modal -->
        <!-- ada 4 gambar sehingga ada 4 modal. sebenarnya cuma butuh 1 modal tinggal ntar diganti imgnya aja tapi w gak ngerti -->
        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal1" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <div class="container-fluid">
                            <div class="row modal-caption">
                                <div class="col-12 col-sm-6 col-image">
                                    <button type="button" class="close close-small mr-n2" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <img src="https://source.unsplash.com/6YmzwamGzCg" alt="" style="width:100%; height: 100%;">
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-wrap align-items-center">
                                    <button type="button" class="close close-big ml-auto mt-auto" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <div class="caption mt-lg-5 mt-4">
                                        <h4 class="modal-title">Caption Title</h4>
                                        <div class="space mt-1 mb-2"></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Assumenda illo ex quaerat placeat quisquam! Quam, voluptas nemo magnam ducimus sint sequi? 
                                            Dolorum sit sed dolor tempora placeat, esse fugiat soluta.
                                        </p>
                                    </div>
                                    <div class="modal-footer ml-auto pr-0 mt-auto pb-lg-3">
                                        <a href="https://source.unsplash.com/6YmzwamGzCg"><button class="btn btn-primary" target="_blank"><span>Download</span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal2" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <div class="container-fluid">
                            <div class="row modal-caption">
                                <div class="col-12 col-sm-6 col-image">
                                    <button type="button" class="close close-small mr-n2" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <img src="https://source.unsplash.com/JXDohZk64Mw" alt="" style="width:100%; height: 100%;">
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-wrap align-items-center">
                                    <button type="button" class="close close-big ml-auto mt-auto" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <div class="caption mt-lg-5 mt-4">
                                        <h4 class="modal-title">Caption Title</h4>
                                        <div class="space mt-1 mb-2"></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Assumenda illo ex quaerat placeat quisquam! Quam, voluptas nemo magnam ducimus sint sequi? 
                                            Dolorum sit sed dolor tempora placeat, esse fugiat soluta.
                                        </p>
                                    </div>
                                    <div class="modal-footer ml-auto pr-0 mt-auto pb-lg-3">
                                        <a href="https://source.unsplash.com/JXDohZk64Mw"><button class="btn btn-primary" target="_blank"><span>Download</span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal3" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <div class="container-fluid">
                            <div class="row modal-caption">
                                <div class="col-12 col-sm-6 col-image">
                                    <button type="button" class="close close-small mr-n2" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <img src="https://source.unsplash.com/Jrl_UQcZqOc" alt="" style="width:100%; height: 100%;">
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-wrap align-items-center">
                                    <button type="button" class="close close-big ml-auto mt-auto" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <div class="caption mt-lg-5 mt-4">
                                        <h4 class="modal-title">Caption Title</h4>
                                        <div class="space mt-1 mb-2"></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Assumenda illo ex quaerat placeat quisquam! Quam, voluptas nemo magnam ducimus sint sequi? 
                                            Dolorum sit sed dolor tempora placeat, esse fugiat soluta.
                                        </p>
                                    </div>
                                    <div class="modal-footer ml-auto pr-0 mt-auto pb-lg-3">
                                        <a href="https://source.unsplash.com/Jrl_UQcZqOc"><button class="btn btn-primary" target="_blank"><span>Download</span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div aria-hidden="true" aria-labelledby="myModalLabel" class="modal fade" id="modal4" role="dialog" tabindex="-1">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body mb-0 p-0">
                        <div class="container-fluid">
                            <div class="row modal-caption">
                                <div class="col-12 col-sm-6 col-image">
                                    <button type="button" class="close close-small mr-n2" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <img src="https://source.unsplash.com/dI9KhXi0ooE" alt="" style="width:100%; height: 100%;">
                                </div>
                                <div class="col-12 col-sm-6 d-flex flex-wrap align-items-center">
                                    <button type="button" class="close close-big ml-auto mt-auto" data-dismiss="modal" aria-label="Close">
                                        &times;
                                    </button>
                                    <div class="caption mt-lg-5 mt-4">
                                        <h4 class="modal-title">Caption Title</h4>
                                        <div class="space mt-1 mb-2"></div>
                                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. 
                                            Assumenda illo ex quaerat placeat quisquam! Quam, voluptas nemo magnam ducimus sint sequi? 
                                            Dolorum sit sed dolor tempora placeat, esse fugiat soluta.
                                        </p>
                                    </div>
                                    <div class="modal-footer ml-auto pr-0 mt-auto pb-lg-3">
                                        <a href="https://source.unsplash.com/dI9KhXi0ooE"><button class="btn btn-primary" target="_blank"><span>Download</span></button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-md navbar-dark" style="background: #212529;">
            <a class="navbar-brand" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active mr-3">
                        <a class="nav-link" href="#"><i class="fa fa-home" aria-hidden="true"></i> Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown mr-3">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-image" aria-hidden="true"></i> Galleries
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Agliculture & Mining</a>
                            <a class="dropdown-item" href="#">Social & Population</a>
                            <a class="dropdown-item" href="#">Economic & Trade</a>
                        </div>
                    </li>
                    <li class="nav-item mr-3">
                        <a class="nav-link" href="#"><i class="fa fa-address-card" aria-hidden="true"></i> About</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
                </form>
            </div>
        </nav>
        
        <main>
            <section id="agliculture">
                <div class="inner">
                    <div class="container-fluid">
                        <div class="row align-items-center">
                            <div class="col">
                                <div class="row">
                                    <div class="col">
                                        <h1 class="text-center">Agliculture & Mining</h1>
                                    </div>
                                </div>
                                <div class="row space"></div>
                                <div class="row justify-content-center">
                                    <div class="col-5 col-md-3 col-lg-2 text-center">
                                        <a href="#"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                        <a href="#"><button type="button" class="btn btn-primary">Upload</button></a>
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
                                        <a href="#"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                        <a href="#"><button type="button" class="btn btn-primary">Upload</button></a>
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
                                        <a href="#"><button type="button" class="btn btn-primary">View Gallery</button></a>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                    <a href="#"><button type="button" class="btn btn-primary">Upload</button></a>
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
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <a href="#" class="d-block mb-4 h-100" data-target="#modal1" data-toggle="modal">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/6YmzwamGzCg" alt="">
                                </a>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <a href="#" class="d-block mb-4 h-100" data-target="#modal2" data-toggle="modal">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/JXDohZk64Mw" alt="">
                                </a>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <a href="#" class="d-block mb-4 h-100" data-target="#modal3" data-toggle="modal">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/Jrl_UQcZqOc" alt="">
                                </a>
                        </div>
                        <div class="image col-lg-3 col-md-4 col-xs-10 col-sm-6">
                            <a href="#" class="d-block mb-4 h-100" data-target="#modal4" data-toggle="modal">
                                <img class="img-fluid img-thumbnail" src="https://source.unsplash.com/dI9KhXi0ooE" alt="">
                                </a>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                        <button type="button" class="btn btn-primary">Load more</button>
                        </div>
                    </div>
                </div>
            </section>

            <section id="infographics">
                <div class="container">
                    <h1 class="text-center mt-4 mb-5">Infographics</h1>
                    <div class="row carousel-wrap">
                        <div class="owl-carousel owl-theme">
                            <div class="item"><img src="https://source.unsplash.com/T9Gsevu_N8Y"></div>
                            <div class="item"><img src="https://source.unsplash.com/LzgK6IMoSZM"></div>
                            <div class="item"><img src="https://source.unsplash.com/s87ngBxo4xg"></div>
                            <div class="item"><img src="https://source.unsplash.com/PgNKq33I-Fk"></div>
                            <div class="item"><img src="https://source.unsplash.com/VtppxC-GfZs"></div>
                            <div class="item"><img src="https://source.unsplash.com/9PUHwNnFIVc"></div>
                            <div class="item"><img src="https://source.unsplash.com/fsdWYNTymjI"></div>
                            <div class="item"><img src="https://source.unsplash.com/_T4w3JDm6ug"></div>
                            <div class="item"><img src="https://source.unsplash.com/qgEKJkf4sKY"></div>
                            <div class="item"><img src="https://source.unsplash.com/ZfMPo4y9Icc"></div>
                            <div class="item"><img src="https://source.unsplash.com/VuwAfoHpxgs"></div>
                            <div class="item"><img src="https://source.unsplash.com/zglUlG8k47I"></div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col text-center">
                        <button type="button" class="btn btn-primary mt-3">Inform more</button>
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer class="page-footer" style="background: #212529;">
            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <a href="#">Logo DataKita</a>
                        <p>This is text.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4 mr-auto d-flex align-items-center counts mt-md-3">
                        929 sample counts
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
                        &copy; 2019 DataKita
                    </div>
                </div>
            </div>
        </footer>
        <script>
            $('.owl-carousel').owlCarousel({
                loop: true,
                margin: 10,
                animateOut: 'slideOutDown',
                animateIn: 'flipInX',
                nav: true,
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
            })
        </script>
    </body>
</html>
