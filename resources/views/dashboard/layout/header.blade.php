<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>India Desert Holiday</title>

    <link rel="icon" type="image/png" href="{{url('/assets/images/favicon.png')}}">
    <link rel="stylesheet" href="{{url('assets/css/owl.theme.default.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/all.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}" type="text/css">
    <!-- <link rel="stylesheet" href="assets/css/aos.css" type="text/css"> -->
    <link rel="stylesheet" href="{{url('assets/webfonts')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Lexend:wght@100..900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

</head>

<body>


    <header>
        <div id="myHeader" class="sticky">
            <div class="container">
                <div class="headermn">
                    <nav class="navbar navbar-expand-lg p-0 align-items-center">
                        <a class="navbar-brand" href="{{url('/')}}">
                            <img src="{{url('/assets/images/logo.png')}}" alt="Desert Holiday Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">

                            <img src="assets/images/menu-burgur.webp" alt="Menu" class="menu-icon">
                        </button>


                        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                            <div class="offcanvas-header">
                                <h5 class="offcanvas-title" id="offcanvasNavbarLabel">
                                    <img src="{{url('/assets/images/logo.png')}}" alt="Desert Holiday Logo">
                                </h5>
                                <button class="offcanvas-close-btn" type="button" data-bs-dismiss="offcanvas" aria-label="Close">
                                    <img src="{{url('/assets/images/close.png')}}" alt="Dismiss">
                                </button>
                            </div>

                            <div class="offcanvas-body align-items-center">
                                <ul class="navbar-nav justify-content-center flex-grow-1">
                                    <li class="nav-item"><a class="nav-link" href="{{url('/')}}">Home</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/about-us')}}">About Us</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/destination')}}">Destination</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/blog')}}">Blog</a></li>
                                    <li class="nav-item"><a class="nav-link" href="{{url('/contact')}}">Contact Us</a></li>





                                </ul>

                                <ul class="whatsapp d-flex list-unstyled gap-2">
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#loginModal">Log In</a></li>
                                    <li><a href="#" data-bs-toggle="modal" data-bs-target="#signupModal">Sign Up</a></li>
                                </ul>

                            </div>

                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
