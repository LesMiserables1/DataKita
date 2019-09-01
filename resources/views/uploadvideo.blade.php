<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Video Upload | DataKita</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.9.0/css/all.css">

    <!-- default passive events for performance optimization -->
    <script src="https://cdn.jsdelivr.net/npm/default-passive-events@1.0.10/dist/index.min.js"></script>

    <!-- file input plugin -->
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

    <!-- taginput plugin -->
    <script src="{!! asset('js/typeahead.js') !!}"></script>

    <!-- Styles -->
    <link rel="stylesheet" href="{!! asset('css/upload.css') !!}">
    <link rel="stylesheet" href="{!! asset('css/general.css') !!}">
</head>

<body style="padding-bottom: 225px">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <!-- nav -->
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
                    <a class="nav-link dropdown-toggle active" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-upload"></i> Upload
                    </a>
                    <ul class="dropdown-menu ml-0 mr-0" aria-labelledby="navbarDropdown2">
                        <li><a class="dropdown-item" href="/upload/photo">Photo</a></li>
                        <li><a class="dropdown-item active" href="/upload/video">Video</a></li>
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

    <!-- main content -->
    <main class="main-upload d-flex align-items-center justify-content-center">
        <section id="videoupload" class="mb-0 mt-5">
            <div class="container">
                <div class="row">

                    <!-- gambar upload -->
                    <div class="col-12 col-lg-6 d-flex align-items-center">
                        <img class="upload mx-auto ml-lg-0" src="../images/video.svg">
                    </div>

                    <!-- input form section -->
                    <div class="col-12 col-lg-6">
                        <form action="/upload/video" enctype="multipart/form-data" method="POST">
                            @csrf

                            <!-- upload file -->
                            <div class="form-group">
                                <label>Upload <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can upload only one video at a time." data-placement="right"></i></label>
                                <div class="custom-file">
                                    <input type="file" name="video" id="uploadfile" accept="video/*" class="custom-file-input" required>
                                    <label class="custom-file-label" for="validatedCustomFile" id="upload-label">No file choosen</label>
                                    <span class="text-danger" id="upload-warning" class="warning"></span>
                                </div>
                            </div>

                            <!-- input nama -->
                            <div class="form-group">
                                <label>Name <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="Your name goes here." data-placement="right"></i></label>
                                <input type="text" class="form-control" name="nama" id="your-name" placeholder="John Doe" required>
                            </div>

                            <!-- input lokasi -->
                            <div class="form-group">
                                <label>Location <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="The location in which you took your video." data-placement="right"></i></label>
                                <input type="text" class="form-control" name="lokasi" id="your-location" placeholder="Bandung, West Java" required>
                            </div>

                            <!-- input judul -->
                            <div class="form-group">
                                <label>Caption Title <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can write your desired title for the caption!" data-placement="right"></i></label>
                                <input type="text" class="form-control" name="judul" id="your-title" placeholder="Dreamy Days" required>
                            </div>

                            <!-- input caption -->
                            <div class="form-group">
                                <label>Caption</label>
                                <textarea class="form-control" name="caption" id="your-caption" rows="6" placeholder="Your caption goes here..." required></textarea>
                            </div>

                            <!-- input category -->
                            <div class="form-group">
                                <label>Category <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="Pick one category based on your video." data-placement="right"></i></label>

                                <!-- radio atas -->
                                <div class="toggle mb-0 justify-content-center">
                                    <input class="form-check-input" type="radio" name="jenis" value="Agriculture_Mining" id="agri" checked="checked" />
                                    <label for="agri">Agriculture & Mining</label>
                                    <input class="form-check-input" type="radio" name="jenis" value="Social_Population" id="soci" />
                                    <label for="soci">Social & Population</label>
                                </div>

                                <!-- radio bawah -->
                                <div class="toggle toggle2">
                                    <input class="form-check-input" type="radio" name="jenis" value="Economic_Trade" id="eco" />
                                    <label for="eco">Economic & Trade</label>
                                    <input class="form-check-input" type="radio" name="jenis" value="Event_Experiences" id="eve" />
                                    <label for="eve">Events & Experiences</label>
                                    <input class="form-check-input" type="radio" name="jenis" value="Infographics" id="inf" />
                                    <label for="inf" class="d-flex align-items-center">Infographics</label>
                                </div>
                            </div>

                            <!-- input tags -->
                            <div class="form-group">
                                <label>Tags <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can add up to 6 tags." data-placement="right"></i></label>
                                <input type="text" class="form-control" data-role="tagsinput" id="tags" value="Experiences,Love,Journey" name="tags" required>
                                <span class="text-danger" id="tags-warning" class="warning"></span>
                            </div>
                            <input type="submit" class="btn btn-primary" value="Upload">
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- footer -->
    <footer id="page-footer" class="mt-5">
        @footer @endfooter
    </footer>

    <script src="{!! asset('js/video.js') !!}"></script>
    <script src="{!! asset('js/header.js') !!}"></script>
</body>

</html>