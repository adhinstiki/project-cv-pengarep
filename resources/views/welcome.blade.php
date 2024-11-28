<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV Pengarep</title>
    <!-- CSS BOOTSTRAP -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- BOOTSRAP ICON -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <!-- MAIN CSS -->
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">

    

</head>

<body>
    <!-- NAVBAR -->
    <nav class="navbar navbar-expand-lg">
        <div class="container navbar-container my-3">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button id="btnToggle" class="btn-toggle">
                <span class="bar bar-1"></span>
                <span class="bar bar-2"></span>
            </button>
            <div class="navbar-nav-wrapper justify-content-center" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.html">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="shop.html">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="blog.html">Our Service</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="about.html">Our Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.html">Our Team</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="sidebar-off-canvas">
        <div class="sidebar-top">
            <a class="navbar-brand" href="#">
                <img src="{{ asset('assets/images/logo.png') }}" alt="Logo" class="d-inline-block align-text-top">
            </a>
            <button class="close-btn" id="btnClose">
                <svg width="25" height="25" viewBox="0 0 12 12" fill="none" xmlns="http://www.w3.org/2000/svg" class="close-icon">
                    <g transform="scale(1)">
                        <line x1="1" y1="1" x2="11" y2="11" stroke-width="1" class="line-1" />
                        <line x1="1" y1="11" x2="11" y2="1" stroke-width="1" class="line-2" />
                    </g>
                </svg>
            </button>
        </div>
        <ul class="sidebar-content navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.html">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="shop.html">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="blog.html">Our Service</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" aria-current="page" href="about.html">Our Project</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="contact.html">Our Team</a>
            </li>
        </ul>
        <div class="sidebar-footer">
            <h1>Subscribe & Follow</h1>
            <p>The scallops were perfectly cooked, tender, and flavorful, paired beautifully with a creamy risotto and seasonal vegetables. The presentation was artful, showcasing the chefs attention to detail.</p>
            <ul class="sidebar-social-media">
                <li class="sidebar-social-media-item"><i class="bi bi-facebook"></i></li>
                <li class="sidebar-social-media-item"><i class="bi bi-twitter-x"></i></li>
                <li class="sidebar-social-media-item"><i class="bi bi-instagram"></i></li>
                <li class="sidebar-social-media-item"><i class="bi bi-linkedin"></i></li>
            </ul>
        </div>
    </div>
    <div id="overlay" class="overlay"></div>
    <!-- NAVBAR -->

    <!-- HERO SECTION -->
    <div class="container-fluid hero-container" style="background-image: url('{{ asset('assets/images/banner-1.jpg')  }}');">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="hero-content">
                        <h1>CREATING SPACE TROUGH <span>INNOVATIVE DESIGN.</span></h1>
                        <p>Welcome to CV Pengarep, crafting timeless interiors that tell your story. Discover a world where design meets emotion.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- HERO SECTION -->

    <!-- ABOUT US -->
     <div class="container about-us-section">
        <div class="row">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="about-us-cover">
                    <img class="about-us-img w-100" src="{{ asset('assets/images/about.jpg') }}" alt="">
                    <ul class="social-media-list">
                        <li class="social-media-item"><i class="bi bi-facebook"></i></li>
                        <li class="social-media-item"><i class="bi bi-twitter-x"></i></li>
                        <li class="social-media-item"><i class="bi bi-instagram"></i></li>
                        <li class="social-media-item"><i class="bi bi-linkedin"></i></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="about-us-content">
                    <div class="about-us-title">
                        <h2>Welcome To CV Pengarep</h2>
                        <h1>Interior Design with Different Approach</h1>
                        <p>Et purus duis sollicitudin dignissim habitant. Egestas nulla quis venenatis cras sed eu massa eu faucibus Urna fusce Et purus duis sollicitudin dig- nissim habitant.</p>
                    </div>
                    <div class="skill-list">
                        <div class="skill-item">
                            <h1 class="skill-title">Interior Design</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 90%;">
                                    <p class="bar-text">90%</p>
                                </div>
                            </div>
                            
                        </div>
                        <div class="skill-item">
                            <h1 class="skill-title">Architecture</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 80%;">
                                    <p class="bar-text">80%</p>
                                </div>
                            </div>
                        </div>
                        <div class="skill-item">
                            <h1 class="skill-title">3D Design</h1>
                            <div class="skill-bar">
                                <div class="bar-inner" style="width: 95%;">
                                    <p class="bar-text">95%</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

    <!-- ABOUT US -->

    <!-- OUR SERVICES -->
    <div class="container section-title">
        <h2>What We Do</h2>
        <h1>The best Services We Provide</h1>
    </div>
    <div class="container-fluid service-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12" style="border-bottom: 1px solid var(--grey-outline);">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" style="border: 1px solid var(--grey-outline); border-top: 0;">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" style="border-bottom: 1px solid var(--grey-outline);">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12" style="border: 1px solid var(--grey-outline); border-top: 0; border-bottom: 0;">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="service-list-item">
                        <div class="icon">
                            <img class="icon-img" src="{{ asset('assets/images/icon.png') }}" alt="">
                        </div>
                        <div class="service-text">
                            <h1>Home Interior Design</h1>
                            <p>Sagitis himos pulvinar morb socis laoreet posuere enim non auctor etiam pretium libero</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR SERVICES -->

    <!-- OUR PROJECT -->
    <div class="container section-title">
        <h2>Latest Projects</h2>
        <h1>Our Projects & Designs</h1>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="{{ asset('assets/images/latest-project-4.jpg') }}" alt="Project Image">
                    </div>
                    <h1>D-Orex Home Interior</h1>
                    <p>Artima is one of the most popular for</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="{{ asset('assets/images/latest-project-4.jpg') }}" alt="Project Image">
                    </div>
                    <h1>D-Orex Home Interior</h1>
                    <p>Artima is one of the most popular for</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="{{ asset('assets/images/latest-project-4.jpg') }}" alt="Project Image">
                    </div>
                    <h1>D-Orex Home Interior</h1>
                    <p>Artima is one of the most popular for</p>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="project-list-item">
                    <div class="project-cover">
                        <img class="project-img w-100" src="{{ asset('assets/images/latest-project-4.jpg') }}" alt="Project Image">
                    </div>
                    <h1>D-Orex Home Interior</h1>
                    <p>Artima is one of the most popular for</p>
                </div>
            </div>
        </div>
    </div>
    <!-- OUR PROJECT -->

    <!-- JS BOOTSTRAP -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
        crossorigin="anonymous"></script>

    <!-- CDN JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- CDN JS -->

    <!-- MAIN JS -->
     <script src="{{ asset('js/main.js') }}"></script>
</body>

</html>