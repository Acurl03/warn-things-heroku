<!DOCTYPE html>
<html  >
<head>
<!-- Site made with Mobirise Website Builder v5.2.0, https://mobirise.com -->
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="generator" content="Mobirise v5.2.0, mobirise.com">
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
<link rel="shortcut icon" href="assets/images/logo.png" type="image/x-icon">
<meta name="description" content="">


<title>Home</title>
<link rel="stylesheet" href="assets/tether/tether.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet" href="assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet" href="assets/dropdown/css/style.css">
<link rel="stylesheet" href="assets/socicon/css/styles.css">
<link rel="stylesheet" href="assets/theme/css/style.css">
<link rel="preload" as="style" href="assets/mobirise/css/mbr-additional.css"><link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">

@yield('css')
</head>
<body>

    <section class="menu menu1 cid-smwdcngXjp" once="menu" id="menu1-o">
        <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
            <div class="container">
                <div class="navbar-brand">
                    
                    <span class="navbar-caption-wrap"><a class="navbar-caption text-black display-7" href="https://mobiri.se">Mobirise</a></span>
                </div>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <div class="hamburger">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ route('product') }}">
                                商品列表</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="#">
                                Services</a></li>
                        <li class="nav-item"><a class="nav-link link text-black display-4" href="{{ route('logout') }}">登出</a>
                        </li>
                    </ul>
                    
                    
                </div>
            </div>
        </nav>
    </section>

<main class="py-4">
@yield('content')
@yield('main')
</main>

<script src="assets/popper/popper.min.js"></script>  
<script src="assets/tether/tether.min.js"></script>  
<script src="assets/smoothscroll/smooth-scroll.js"></script>  
<script src="assets/dropdown/js/nav-dropdown.js"></script>  
<script src="assets/dropdown/js/navbar-dropdown.js"></script>  
<script src="assets/touchswipe/jquery.touch-swipe.min.js"></script>  
<script src="assets/theme/js/script.js"></script>  

@yield('js')
</body>
</html>