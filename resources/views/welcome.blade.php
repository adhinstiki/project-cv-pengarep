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
    <!--Tambahan -->
    <div class="container">
        <!-- Modern Design Section -->
        <div class="section">
            <div class="section-text-container">
                <h2 class="section-title">Modern Design</h2>
                <p class="section-description">Decoral is one of the most popular choices for those who want to explore the latest trends in interior design. Our modern design solutions help you create a space that is both functional and aesthetically pleasing.</p>
            </div>
            <div class="section-image">
                <img src="{{ asset('images/rui1.jpg') }}" alt="Design Image 1">
            </div>
        </div>

        <!-- Expert Team Section -->
        <div class="section">
            <div class="section-text-container">
                <h2 class="section-title">Expert Team</h2>
                <p class="section-description">Our expert team of designers is dedicated to bringing your vision to life. We work closely with you to understand your needs and deliver a personalized design that fits your style.</p>
            </div>
            <div class="section-image">
                <img src="{{ asset('images/rui2.jpg') }}" alt="Design Image 2">
            </div>
        </div>

        <!-- High-Quality Materials Section -->
        <div class="section">
            <div class="section-text-container">
                <h2 class="section-title">High-Quality Materials</h2>
                <p class="section-description">We use only the best materials to ensure durability and style. From furniture to accessories, everything is carefully selected to provide the highest quality at the best prices.</p>
            </div>
            <div class="section-image">
                <img src="{{ asset('images/rui3.jpg') }}" alt="Design Image 3">
            </div>
        </div>
    </div>

    <div class="container my-5">
    <h1 class="text-center display-4 mb-5">Our Team</h1>
        <h1 class="text-center display-4 mb-5">Meet Our Highly Professional Team</h1>
        
        <div class="row row-cols-1 row-cols-md-3 g-4">
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/team-member1.jpg') }}" alt="Team Member 1" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Adhi Purnawan</h5>
                        <p class="card-text">Software Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/team-member2.jpg') }}" alt="Team Member 2" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Erdy Erisa</h5>
                        <p class="card-text">Project Manager</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card">
                    <img src="{{ asset('images/team-member3.jpg') }}" alt="Team Member 3" class="card-img-top" style="height: 200px; object-fit: cover;">
                    <div class="card-body">
                        <h5 class="card-title">Carl Aris</h5>
                        <p class="card-text">Web Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="footer-container">
            <!-- Left side of the footer -->
            <div class="footer-left">
                <h4>Interior Design Consultancy</h4>
                <p>Bringing sensitivity to the design of top restaurants, hotels, and more.</p>
            </div>

            <!-- Center section of the footer -->
            <div class="footer-center">
                <h4>Useful Links</h4>
                <ul>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Customer Insights</a></li>
                    <li><a href="#">Meet Our Team</a></li>
                    <li><a href="#">Client Testimonials</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Before & After</a></li>
                </ul>
            </div>

            <!-- Right section of the footer -->
            <div class="footer-right">
                <h4>Contact Us</h4>
                <p>Phone: +888 (123) 869523</p>
                <p>Email: <a href="mailto:example@gmail.com">example@gmail.com</a></p>
                <p>Location: 1058 Helton Ave, Berlin</p>
            </div>
        </div>

        <!-- Additional footer content (Copyright and Links) -->
        <div class="footer-bottom">
            <div class="footer-container">
                <div class="footer-bottom-left">
                    <p>Copyright © 2024 by CV PANGAREP. All Rights Reserved.</p>
                </div>
                <div class="footer-bottom-right">
                    <ul>
                        <li><a href="#">Privacy & Policy</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Media Centre</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>

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