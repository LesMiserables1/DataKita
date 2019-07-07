<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <title>DataKita</title>

        <script src="https://kit.fontawesome.com/95df692867.js"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
    </head>

    <body>
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
                                        <button href="#" type="button" class="btn btn-primary">View Gallery</button>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                        <button href="#" type="button" class="btn btn-primary">Upload</button>
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
                                        <button href="#" type="button" class="btn btn-primary">View Gallery</button>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                        <button href="#" type="button" class="btn btn-primary">Upload</button>
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
                                        <button href="#" type="button" class="btn btn-primary">View Gallery</button>
                                    </div>
                                    <div class="col-4 col-md-3 col-lg-2 text-center">
                                        <button href="#" type="button" class="btn btn-primary">Upload</button>
                                    </div>
                                </div>    
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </main>
    </body>
</html>
