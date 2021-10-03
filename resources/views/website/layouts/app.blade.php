<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Template</title>
    
    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
    rel="stylesheet">
    
    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('public/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('public/assets/css/style.css') }}" type="text/css">
    
    @stack('css')
</head>

<body>
    
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
    <!-- Search model -->
    <div class="search-model">
        <div class="h-100 d-flex align-items-center justify-content-center">
            <div class="search-close-switch">+</div>
            <form class="search-model-form">
                <input type="text" id="search-input" placeholder="Search here.....">
            </form>
        </div>
    </div>
    <!-- Search model end -->
    
    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="{{ route('website.home') }}"><img src="{{ asset('public/assets/img/logo.png') }}" alt=""></a>
                </div>
                @include('website.layouts.menu')
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="{{ asset('public/assets/img/icons/delivery.png') }}" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="{{ asset('public/assets/img/icons/voucher.png') }}" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                        <img src="{{ asset('public/assets/img/icons/sales.png') }}" alt="">
                        <p>30% off on dresses. Use code: 30OFF</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    
    @yield('content')
    <footer class="footer-section spad">
        <div class="container">
            
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Privacy Policy</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Terms and conditions</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
            
            
            
            <div class="container text-center">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                </div>
                
                
            </div>
        </footer>
        <!-- Footer Section End -->
        
        <!-- Js Plugins -->
        <script src="{{ asset('public/assets/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('public/assets/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('public/assets/js/main.js') }}"></script>
        
        @stack('scripts')
    </body>
    
    </html>