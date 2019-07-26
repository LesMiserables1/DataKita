<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Photo Upload | DataKita</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-tagsinput/0.8.0/bootstrap-tagsinput.css">

        <!-- fontawesome -->
        <script src="https://kit.fontawesome.com/95df692867.js"></script>

        <!-- file input plugin -->
        <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js"></script>

        <!-- taginput plugin -->
        <script src="{!! asset('js/typeahead.js') !!}"></script>

        <!-- Styles -->
        <link rel="stylesheet" href="{!! asset('css/welcome.css') !!}">
    </head>
    <body>
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
                            <li><a class="dropdown-item active" href="/upload/photo">Photo</a></li>
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

        <!-- main content -->
        <main class="main-upload d-flex align-items-center justify-content-center">
            <section id="photoupload" class="mb-0 mt-5">
                <div class="container">
                    <div class="row">

                        <!-- gambar upload -->
                        <div class="col-12 col-lg-6 d-flex align-items-center">
                            <img class="upload mx-auto ml-lg-0 wow jackInTheBox" data-wow-duration="1.5s" src="../images/upload.png">
                        </div>

                        <!-- input form section -->
                        <div class="col-12 col-lg-6">
                            <form action="/upload/foto" enctype="multipart/form-data" method="POST">
                                @csrf

                                <!-- upload file -->
                                <div class="form-group">
                                    <label for="uploadfile">Upload <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can upload up to 10 photos." data-placement="right"></i></label>
                                    <div class="custom-file">
                                        <input type="file" name="foto[]" id="uploadfile" accept="image/*" class="custom-file-input" multiple required>
                                        <label class="custom-file-label" for="validatedCustomFile" id="upload-label">No file choosen</label>
                                        <span class="text-danger" id="upload-warning" class="warning"></span>
                                    </div>
                                </div>

                                <!-- input nama -->
                                <div class="form-group">
                                    <label for="your-name">Name <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="Your name goes here." data-placement="right"></i></label>
                                    <input type="text" class="form-control" id="your-name" placeholder="John Doe" required>
                                </div>

                                <!-- input lokasi -->
                                <div class="form-group">
                                    <label for="your-location">Location <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="The location in which you took your photo." data-placement="right"></i></label>
                                    <input type="text" class="form-control" id="your-location" placeholder="Bandung, West Java" required>
                                </div>

                                <!-- input judul -->
                                <div class="form-group">
                                    <label for="your-title">Caption Title <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can write your desired title for the caption!" data-placement="right"></i></label>
                                    <input type="text" class="form-control" id="your-title" placeholder="Dreamy Days" required>
                                </div>

                                <!-- input caption -->
                                <div class="form-group">
                                    <label for="your-caption">Caption</label>
                                    <textarea class="form-control" id="your-caption" rows="6" placeholder="Your caption goes here..." required></textarea>
                                </div>

                                <!-- input category -->
                                <div class="form-group">
                                    <label for="category">Category <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="Pick one category based on your photo." data-placement="right"></i></label>
                                    
                                    <!-- radio atas -->
                                    <div class="toggle mb-0 justify-content-center">
                                        <input class="form-check-input" type="radio" name="sizeBy" value="agri" id="agri" checked="checked" />
                                        <label for="agri">Agriculture & Mining</label>
                                        <input class="form-check-input" type="radio" name="sizeBy" value="soci" id="soci" />
                                        <label for="soci">Social & Population</label>
                                    </div>

                                    <!-- radio bawah -->
                                    <div class="toggle toggle2">
                                        <input class="form-check-input" type="radio" name="sizeBy" value="eco" id="eco" />
                                        <label for="eco">Economic & Trade</label>
                                        <input class="form-check-input" type="radio" name="sizeBy" value="eve" id="eve" />
                                        <label for="eve">Events & Experiences</label>
                                        <input class="form-check-input" type="radio" name="sizeBy" value="inf" id="inf" />
                                        <label for="inf"  class="d-flex align-items-center">Infographics</label>
                                    </div>
                                </div>

                                <!-- input tags -->
                                <div class="form-group">
                                    <label for="your-title">Tags <i class="far fa-question-circle ml-1 text-muted question" data-toggle="tooltip" title="You can add up to 6 tags." data-placement="right"></i></label>
                                    <input type="text" class="form-control" data-role="tagsinput" id="tags" value="Experiences, Love, Journey" required>
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
        <footer class="page-footer mt-5" style="background: #212529;">
            <div class="container-fluid">

                <!-- atas  -->
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

                <!-- bawah -->
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

        <!-- wow.js -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>
        <script>
            //wow.js activator
            new WOW().init();

            $('#tags').tagsinput({
                maxTags: 6
            });
            //custom file input activator
            $(document).ready(function () {
                bsCustomFileInput.init();
            });

            //to activate tooltip
            $(function () {
                $('[data-toggle="tooltip"]').tooltip()
            });

            //UI control on file input > 10
            var warning = document.getElementById("upload-warning");
            $("#uploadfile").on("change", function() {
                if ($("#uploadfile")[0].files.length > 10) {
                    warning.innerHTML = "You can only upload up to 10 photos at once.";
                    $('.custom-file').addClass("wrong");
                    $('input[type="submit"]').attr("disabled", true);
                } else {
                    warning.innerHTML = "";
                    $('.custom-file').removeClass("wrong");
                    $('input[type="submit"]').removeAttr("disabled");
                }
            });

            //capitalize function
            function upperFirst(string){
                return string.charAt(0).toUpperCase() + string.slice(1);
            }

            //controlling UI if the tags entered more than 6
            var warn = document.getElementById("tags-warning");
            $('#tags').on("change", function(){
                //var to be stored
                var len = $('#tags').val().split(",").map(upperFirst);
                console.log(len);
                if(len.length >= 6) warn.innerHTML = "You can't add more tags.";
                else warn.innerHTML = "";
            });

            // toggle hamburger
            $(document).ready(function(){
                $('#nav-mhweb-hamburger').click(function(){
                $(this).toggleClass('open');
                });
            });
        </script>
    </body>
</html>