<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Galleries: Events & Experience | DataKita</title>
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
                            <div class="item"><img src="https://source.unsplash.com/Pw5uvsFcGF4"></div>
                            <div class="item"><img src="https://source.unsplash.com/sitjgGsVIAs"></div>
                            <div class="item"><img src="https://source.unsplash.com/Dts390Vkiy0"></div>
                            <div class="item"><img src="https://source.unsplash.com/gq5PECP8pHE"></div>
                            <div class="item"><img src="https://source.unsplash.com/hBzrr6m6-pc"></div>
                            <div class="item"><img src="https://source.unsplash.com/gsQ4uk6cnyw"></div>
                            <div class="item"><img src="https://source.unsplash.com/jcc8sxK2Adw"></div>
                            <div class="item"><img src="https://source.unsplash.com/mXQyEcINwa8"></div>
                            <div class="item"><img src="https://source.unsplash.com/w4bp40RJZ9M"></div>
                            <div class="item"><img src="https://source.unsplash.com/JT6EYoVM_08"></div>
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
                            <div class="item"><iframe src="https://www.youtube.com/embed/d0v7Gjx__To" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/9TnkDFeDnoE" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/FvIochG6ghA" allowfullscreen></iframe></div>
                            <div class="item"><iframe src="https://www.youtube.com/embed/TxeHNbzQEKA" allowfullscreen></iframe></div>
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
                            <li><a class="dropdown-item" href="/Economic-Trade">Economic & Trade</a></li>
                            <li><a class="dropdown-item active" href="/Events-Experiences">Events & Experiences</a></li>
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
                            <h3>Galleries : Events & Experience</h3>
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
                                    <img src="https://source.unsplash.com/OYgSInnZfj4">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>The Other Side of the Wall</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <!-- nama user -->
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Eren Yeager</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <!-- caption. note: kalau user nginput lebih dari satu paragraf berarti butuh
                                    lebih dari satu p tag -->
                                        <p>On the other side of the walls is the ocean and on the other side of the ocean is freedom. 
                                            That's what I always believed. But I was wrong. It's enemies that are on the other side 
                                            of the ocean. This is exactly as I saw in my dad's memories. Those enemies on the other side 
                                            of here, if we kill them all, does that mean we'll be free?
                                        </p>
                                    </div>
                                    <div class="time">
                                        <!-- upload time -->
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>30/06/2019</p>
                                    </div>
                                    <div class="location">
                                        <!-- lokasi -->
                                        <h6 class="mb-1">Location</h6>
                                        <p>Paradis Island</p>
                                    </div>
                                    <!-- link download -->
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/2PODhmrvLik">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Because... I Love You</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Hinata Hyuga</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>I used to always cry and give up. I made many wrong turns. But you, you helped me 
                                            find the right path. I always chased after you. I wanted to catch up to you. 
                                            I wanted to walk beside you all the time. I just wanted to be with you. 
                                            You changed me! Your smile is what saved me! That's why I'm not afraid to die 
                                            protecting you! Because... I love you.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>02/06/2012</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Konohagakure</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/S2qA7JhjI6Y">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>We're Criminals Now</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Armin Arlert</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Let's face it. We're criminals now. The enemies that we're fighting, 
                                            we're not killing them because they're trying to eat us. 
                                            It's because their views are different.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>29/07/2018</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Trost District</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/Pw5uvsFcGF4">
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
                                        <h4>I Want to Stay with You</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Naruto Uzumaki</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Hinata, back in school, when we were asked with whom we'd want to spend our last day 
                                            on earth, I couldn't write anyone's name down. I didn't even know my parents and I didn't 
                                            have any friends. But now, I know exactly who I'd choose. I want to stay with you. 
                                            Now and forever until I die. I want to be with you, Hinata.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>06/12/2014</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Somewhere far away from Konoha</p>
                                    </div>
                                    <a href="#"><button type="button" class="btn btn-primary btn-shadow mt-2">Download</button></a>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="pict-column">
                                    <img src="https://source.unsplash.com/Hn1_Jd5afVU">
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Thank You</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="photo-by">
                                        <h6 class="mb-1">Photo and Caption by</h6>
                                        <p>Mikasa Ackerman</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>I need to tell you something. You've always been at my side, thank you. 
                                            You showed me how to live with purpose, thank you. And you, you wrapped 
                                            this scarf around me, thank you.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>17/06/2017</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Somewhere outside Wall Rose</p>
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
                                    <iframe src="https://www.youtube.com/embed/1G0lqiXzsE4?" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <!-- judul caption -->
                                    <div class="title">
                                        <h4>Ashiaaaaaaap</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <!-- nama user -->
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Freddie Mercury</p>
                                    </div>
                                    <!-- caption -->
                                    <div class="caption text-justify">
                                        <p>Ashiaaaaaaaaaaaaaaaappp!!!!
                                        </p>
                                    </div>
                                    <!-- upload time -->
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>22/02/2019</p>
                                    </div>
                                    <!-- lokasi -->
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Wembley Stadium, London</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                <iframe src="https://www.youtube.com/embed/QAfiIeqO2Bk" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Ada Bapak-Bapak</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Rizky Mistis</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Eh ada orang. Ada bapak-bapak, temen-temen. Serius ada bapak-bapak. 
                                        Ada bapak-bapak. Pak? Eh, lagi tapa dia. Assalamu'alaikum, Pak.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>10/05/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Pinggir Pantai Pelabuhan Ratu</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                    <iframe src="https://www.youtube.com/embed/9SH6QcPNfT4" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Karena Subscribe itu Gratis</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Atta Halilintar</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>Terima kasih sudah klik video ini. Tapi jangan lupa guys, klik tombol subscribe 
                                            karena subscribe itu gratis. Dengan subscribe, kamu subscribe channel ini terus 
                                            untuk upload hampir setiap hari. Inget, subscribe itu gratis. Gratis. Gaada ruginya 
                                            kamu klik tombol subscribe. Selamat menonton. ENJOYYYYYYYYYYYYYYYY
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>01/04/2019</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Istana Negara, Jakarta</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                <iframe src="https://www.youtube.com/embed/zBogEzh6R60" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>When a Girl Truly Falls in Love</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Sakura Haruno</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <p>When a girl truly falls in love, her feelings don't change that easily. 
                                            They can't change. I understand how she feels very well.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>06/12/2014</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Somewhere far away from Konoha</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row item">
                            <div class="col-12 col-xl-8">
                                <div class="video-column">
                                    <iframe src="https://www.youtube.com/embed/d0v7Gjx__To"allowfullscreen></iframe>
                                    <!-- Button trigger modal -->
                                    <button type="button" class="btn btn-primary more-than-one" data-toggle="modal" data-target="#videoModal">
                                        See full slide
                                    </button>
                                </div>
                            </div>
                            <div class="col-12 col-xl-4">
                                <div class="text-column p-4 p-xl-2">
                                    <div class="title">
                                        <h4>Ketika Selera Tidak Sesuai Salary</h4>
                                        <hr class="mt-3 mb-3">
                                    </div>
                                    <div class="video-by">
                                        <h6 class="mb-1">Video and Caption by</h6>
                                        <p>Picky Picks</p>
                                    </div>
                                    <div class="caption text-justify">
                                        <!-- contoh kalau user nginput caption lebih dari satu paragraf -->
                                        <p>
                                            Mencoba untuk membuka pikiran anak anak muda hypebeast jaman now yang sedang menjalani dunia yang fana ini, anjas~
                                        </p>
                                        <p>
                                            HIDUP TUH MURAH, YANG MAHAL GENGSINYA.
                                        </p>
                                        <p>
                                            pis, lov, & gawl.
                                        </p>
                                    </div>
                                    <div class="time">
                                        <h6 class="mb-1">Uploaded on</h6>
                                        <p>15/02/2018</p>
                                    </div>
                                    <div class="location">
                                        <h6 class="mb-1">Location</h6>
                                        <p>Jakarta</p>
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
