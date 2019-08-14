<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>About | DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/about.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/general.css') !!}">
</head>

<body style="padding-bottom: 70px;">

    <!-- navbar -->
    <nav class="navbar navbar-expand-md navbar-dark" id="navbar">
        <a class="navbar-brand" href="/">Logo</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    <a class="nav-link" href="/"><i class="fa fa-home" aria-hidden="true"></i> Home <span
                            class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item dropdown mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                    <a class="nav-link active" href="/about"><i class="fa fa-address-card" aria-hidden="true"></i> About</a>
                </li>
                <li class="nav-item dropdown mr-lg-4 mr-0 mr-md-1">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown2" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-upload"></i> Upload
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/upload/photo">Photo</a></li>
                        <li><a class="dropdown-item" href="/upload/video">Video</a></li>
                    </ul>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0" method="get" action="/search">
                <input class="form-control search-box mr-2" type="search" placeholder="Search" aria-label="Search" name="search_query">
                <button class="btn btn-primary my-2 my-sm-0" type="submit"><i class="fas fa-search"></i></button>
            </form>
        </div>
    </nav>

    <main>
        <section id="about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-12 text-center content">
                        <h1>We are a creative media-based concise information sharing platform</h1>
                        <p>
                            Here, we provide you a comprehensive information in a form of creative and interesting 
                            media from every aspect that matters of Indonesia. All presented information is derived 
                            from the trusted and official source of data provider.
                        </p>

                        <p class="mt-2">
                            Happy interpreting!
                        </p>
                    </div>
                </div>
            </div>
        </section>
        </main>
        
        <!-- footer slebew -->
        <footer id="page-footer" class="mt-0">
        <div class="container-fluid">

            <!-- atas  -->
            <div class="row">
                <div class="col-sm-12 col-md-4 mr-auto mt-md-3 logo">
                    <a href="/">Logo DataKita</a>
                    <p>We are a creative media-based concise information sharing platform</p>
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

            <!-- bawah -->
            <div class="row">
                <div class="col-sm-12 col-md-4 mr-auto d-flex align-items-center counts mt-md-3">
                {{$count}} website visits
                </div>
                <div class="col-sm-12 col-md-4 justify-content-center d-flex align-items-center copyright mt-md-3">
                    <span>&copy; 2019 DataKita | <a href="https://omahti.web.id" target="_blank"> OmahTI UGM</a></span>
                </div>
                <div class="col-sm-12 col-md-4 mr-auto mt-md-3"></div>
            </div>
        </div>
    </footer>

    <script src="{!! asset('js/header.js') !!}"></script>
</body>

</html>