<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Web Title -->
    <title>Harris Hotel & Resort</title>

    <!-- Google Fonts: Poppins & Merriweather -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Merriweather:wght@300;400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    
    <!-- Font Awesome -->
    <script src="https://kit.fontawesome.com/11f841f55d.js" crossorigin="anonymous"></script>
    
    @stack('styles')
    
    <!-- Main Styles -->
    <link rel="stylesheet" href="{{ asset('css/client/main.css') }}">
</head>
<body>
    <!-- Nav -->
    <nav id="nav" class="nav">
        <div class="nav-top">
            <div class="nav-top--left">
                <div class="box box--email">
                    <i class="fas fa-envelope icon"></i>
                    <span>harrishotel@info.com</span>
                </div>
                <div class="box box--phone">
                    <i class="fas fa-phone icon"></i>
                    <span>(+12) 345 6789</span>
                </div>
            </div>
            <div class="nav-top--right">
                <div class="box box--social-media">
                    <ul class="nav-link">
                        <li class="nav-item social-link"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        <li class="nav-item social-link"><a href="#"><i class="fab fa-instagram"></i></a></li>
                        <li class="nav-item social-link"><a href="#"><i class="fab fa-twitter"></i></a></li>
                    </ul>
                </div>
                <div class="box box--cta-button">
                    <a href="#" class="btn btn-primary btn--cta">
                        Book Now
                    </a>
                </div>
            </div>
        </div>
        <div class="nav-bottom">
            <div class="nav-bottom--left">
                <div class="box box--title">
                    <h1><a href="#">Harris</a></h1>
                </div>
            </div>
            <div class="nav-bottom--right">
                <ul class="nav-link">
                    <li class="nav-item" data-link="/"><a href="/">Home</a></li>
                    <li class="nav-item" data-link="/our-rooms"><a href="/our-rooms">Rooms</a></li>
                    <li class="nav-item" data-link="/about-us"><a href="/about-us">About Us</a></li>
                    <li class="nav-item" data-link="/contact-us"><a href="/contact-us">Contact Us</a></li>
                </ul>
                <div class="hamburger">
                    <i class="fas fa-bars"></i>
                </div>
                <ul class="hamburger-link">
                    <i class="fas fa-times hamburger-close"></i>
                    <li class="hamburger-item active"><a href="/">Home</a></li>
                    <li class="hamburger-item"><a href="/our-rooms">Rooms</a></li>
                    <li class="hamburger-item"><a href="/about-us">About Us</a></li>
                    <li class="hamburger-item"><a href="/contact-us">Contact Us</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- /.nav -->

    <header id="header" class="header">
        @yield('header')
    </header>

    <main id="main" class="main">
        @yield('content')
    </main>

    <footer id="footer" class="footer">
        <div class="footer-top">
            <div class="footer--subscription">
                <h1>We have reached over 100+ millions of customers.</h1>
                <p>Get our <strong>recent news</strong> sent straight to your email by subscribing to our website.</p>
                <form action="#" class="form form--footer">
                    <input type="email" name="subscription" id="subscription">
                    <i class="fas fa-long-arrow-alt-right"></i>
                </form>
            </div>
            <div class="footer--quick-links">
                <h2>Quick Links</h2>
                <ul>
                    <li><a href="#">Rooms</a></li>
                    <li><a href="#">Book Room</a></li>
                    <li><a href="#">About Us</a></li>
                </ul>
            </div>
            <div class="footer--contact-us">
                <h2>Contact Us</h2>
                <ul>
                    <li>
                        <i class="fas fa-envelope"></i>
                        <span>harrishotel@info.com</span>
                    </li>
                    <li>
                        <i class="fas fa-phone"></i>
                        <span>(+12) 345 6789</span>
                    </li>
                    <li>
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Jl. Raya Ijen, Kota Malang, Jawa Timur</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <div>
                Website ini hanya untuk keperluan UAS Pemrograman Web Lanjut Universitas Brawijaya
            </div>
            <div>
                <ul class="nav-link">
                    <li class="nav-item social-link"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li class="nav-item social-link"><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li class="nav-item social-link"><a href="#"><i class="fab fa-twitter"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    
    @stack('scripts')
    <script>
        // Hamburger Menu
        const hamburger = document.querySelector('.hamburger')
        const hamburgerLink = document.querySelector('.hamburger-link')
        const hamburgerClose = document.querySelector('.hamburger-close')

        hamburger.addEventListener('click', () => {
            hamburgerLink.classList.add('show')
        })
        hamburgerClose.addEventListener('click', () => {
            hamburgerLink.classList.remove('show')
        })
    </script>
</body>
</html>