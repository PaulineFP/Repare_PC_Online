<?php

session_start();

require 'technext.github.io/consultingbiz/Adn/inc/db.php';

$sql = $pdo->prepare('SELECT namecenter, address, openingt, lat, lon FROM centers');
$sql->execute();
$villes = $sql->fetchAll();

$villes_json = json_encode($villes);

?>

<!doctype html>
<html class="no-js" lang="zxx">

<!-- Mirrored from technext.github.io/consultingbiz/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Feb 2021 14:20:40 GMT -->
<!-- Added by HTTrack -->
<meta http-equiv="content-type" content="text/html;charset=utf-8"/><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Repare Pc Online </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="technext.github.io/consultingbiz/site.html">
    <link rel="icon" href="https://www.onlineformapro.com/wp-content/uploads/2020/02/cropped-barre-32x32.png"
          sizes="32x32">
    <!--leaflet-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bodoni+Moda:ital@1&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.css">
    <link rel="stylesheet" href="https://unpkg.com/leaflet.markercluster@1.4.1/dist/MarkerCluster.Default.css">
    <!-- CSS here -->
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/Bootstrap.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/slicknav.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/flaticon.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/animate.min.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/themify-icons.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/slick.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/nice-select.css">
    <link rel="stylesheet" href="technext.github.io/consultingbiz/assets/css/style.css">
</head>

<body class="body-bg">
<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="technext.github.io/consultingbiz/assets/img/logo/logo_online_mini.png" alt="">
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Header Start -->
    <div class="header-area">
        <div class="main-header">
            <div class="header-bottom index-1 header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img
                                            src="technext.github.io/consultingbiz/assets/img/logo/logo_online_mini.png"
                                            alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav>
                                        <ul id="navigation">
                                            <li><a href="#acceuil">Acceuil</a></li>
                                            <li><a href="#services">Services</a></li>
                                            <li><a href="#about">A propos</a></li>
                                            <li><a href="#contact">Contact</a></li>
                                            <li><a href="#after">Et après</a></li>
                                            <li><a href="technext.github.io/consultingbiz/Adn/login.php">Se
                                                    connecter</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>
<main>
    <!-- slider Area Start-->
    <div class="slider-area" id="acceuil">
        <div class="slider-active">
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Repare PC Online</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s">Nous réparons votre ordinateur</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s"></p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider Area End-->
    <!--? Categories Area Start -->
    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70" id="services">
                        <span>Nos Services</span>
                        <h2>Nos Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-md-3 col-sm-3">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-development"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>Diagnostic </h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-sm-3">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span>
                            <img src="data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iaXNvLTg4NTktMSI/Pg0KPCEtLSBHZW5lcmF0b3I6IEFkb2JlIElsbHVzdHJhdG9yIDE5LjAuMCwgU1ZHIEV4cG9ydCBQbHVnLUluIC4gU1ZHIFZlcnNpb246IDYuMDAgQnVpbGQgMCkgIC0tPg0KPHN2ZyB2ZXJzaW9uPSIxLjEiIGlkPSJDYXBhXzEiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiIHg9IjBweCIgeT0iMHB4Ig0KCSB2aWV3Qm94PSIwIDAgNDgwIDQ4MCIgc3R5bGU9ImVuYWJsZS1iYWNrZ3JvdW5kOm5ldyAwIDAgNDgwIDQ4MDsiIHhtbDpzcGFjZT0icHJlc2VydmUiPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00MDcuMzY3LDExMC4yNzRjLTAuMzYyLTMuMjY1LTIuNjg1LTUuOTc3LTUuODU2LTYuODM2bC0yMS42MjUtNS44ODNjLTAuNTE2LTEuMzY3LTEuMDgyLTIuNzIzLTEuNjk5LTQuMDY2DQoJCQlsMTEuMTU2LTE5LjQ3N2MxLjc5Ny0zLjEzMywxLjI3LTcuMDgxLTEuMjg1LTkuNjMzbC0xMi40ODgtMTIuNDg0Yy0yLjU0OS0yLjU2Mi02LjUwMi0zLjA4OS05LjYzMy0xLjI4NWwtMTkuNDczLDExLjE1Ng0KCQkJYy0xLjM0NC0wLjYxNy0yLjcwMy0xLjE4Ny00LjA2Ni0xLjcwM2wtNS44ODMtMjEuNjI1Yy0wLjg2MS0zLjE3MS0zLjU3NC01LjQ5NC02Ljg0LTUuODU1Yy02LjQ2Mi0wLjcxMS0xMi45ODMtMC43MTEtMTkuNDQ1LDANCgkJCWMtMy4yNjgsMC4zNi01Ljk4MiwyLjY4My02Ljg0NCw1Ljg1NWwtNS44ODMsMjEuNjI1Yy0xLjM2MywwLjUxNi0yLjcyMywxLjA4Ni00LjA2NiwxLjcwM2wtMTkuNDczLTExLjE1Ng0KCQkJYy0zLjEzMS0xLjgwNS03LjA4NS0xLjI3OC05LjYzMywxLjI4NWwtMTIuNDg0LDEyLjQ4NGMtMi41NTUsMi41NTItMy4wODIsNi41LTEuMjg1LDkuNjMzbDExLjE1NiwxOS40NzYNCgkJCWMtMC42MTcsMS4zNDQtMS4xODcsMi43MDMtMS43MDMsNC4wNjZsLTIxLjYyNSw1Ljg3OWMtMy4xNzEsMC44NTktNS40OTMsMy41NzEtNS44NTUsNi44MzZjLTAuNzE1LDYuNDY2LTAuNzE1LDEyLjk5MSwwLDE5LjQ1Nw0KCQkJYzAuMzYyLDMuMjY1LDIuNjg1LDUuOTc3LDUuODU1LDYuODM2bDIxLjYyNSw1Ljg4M2MwLjUxNiwxLjM2MywxLjA4NiwyLjcyMywxLjcwMyw0LjA2NmwtMTEuMTU2LDE5LjQ3Nw0KCQkJYy0xLjc5NywzLjEzMy0xLjI3LDcuMDgxLDEuMjg1LDkuNjMzbDEyLjQ4NCwxMi40ODRjMi41NTQsMi41NTIsNi41LDMuMDc5LDkuNjMzLDEuMjg1bDE5LjQ3My0xMS4xNTYNCgkJCWMxLjM0NCwwLjYxNywyLjcwMywxLjE4Nyw0LjA2NiwxLjcwM2w1Ljg4MywyMS42MjVjMC44NjEsMy4xNzEsMy41NzQsNS40OTQsNi44NCw1Ljg1NWM2LjQ2MiwwLjcwOCwxMi45ODMsMC43MDgsMTkuNDQ1LDANCgkJCWMzLjI2OC0wLjM2LDUuOTgyLTIuNjgzLDYuODQ0LTUuODU1bDUuODgzLTIxLjYyNWMxLjM2My0wLjUxNiwyLjcyMy0xLjA4Niw0LjA2Ni0xLjcwM2wxOS40NzMsMTEuMTU2DQoJCQljMy4xMzQsMS43OTIsNy4wNzksMS4yNjYsOS42MzMtMS4yODVsMTIuNDg4LTEyLjQ4NGMyLjU1NS0yLjU1MiwzLjA4Mi02LjUsMS4yODUtOS42MzNsLTExLjE1Ni0xOS40NzYNCgkJCWMwLjYxNy0xLjM0NCwxLjE4NC0yLjY5OSwxLjY5OS00LjA2NmwyMS42MjUtNS44ODNjMy4xNzEtMC44NTksNS40OTMtMy41NzEsNS44NTYtNi44MzYNCgkJCUM0MDguMDgyLDEyMy4yNjIsNDA4LjA4MiwxMTYuNzM4LDQwNy4zNjcsMTEwLjI3NHogTTM5MS44NTUsMTIyLjYxM2wtMjAuMjg1LDUuNTEyYy0yLjY4MywwLjcyOC00Ljc5NSwyLjc5Ny01LjU3OCw1LjQ2NQ0KCQkJYy0wLjk2NSwzLjI0Ni0yLjI3Myw2LjM3OS0zLjkwMiw5LjM0OGMtMS4zMzIsMi40NC0xLjMwMSw1LjM5NywwLjA4Miw3LjgwOWwxMC4yNDYsMTcuODg3bC0zLjgzNiwzLjgzNmwtMTcuODgzLTEwLjI0Ng0KCQkJYy0yLjQwOC0xLjM4NC01LjM2My0xLjQxNy03LjgwMS0wLjA4NmMtMi45NzEsMS42My02LjEwNywyLjkzOS05LjM1NSwzLjkwNmMtMi42NjYsMC43ODQtNC43MzQsMi44OTQtNS40NjUsNS41NzRsLTUuNTIsMjAuMjg1DQoJCQljLTEuNzM0LDAuMDYzLTMuNDc0LDAuMDYzLTUuMjE5LDBsLTUuNTE1LTIwLjI4MWMtMC43MjgtMi42ODMtMi43OTctNC43OTUtNS40NjUtNS41NzhjLTMuMjQ4LTAuOTY3LTYuMzg0LTIuMjc2LTkuMzU1LTMuOTA2DQoJCQljLTIuNDM4LTEuMzMxLTUuMzkzLTEuMjk4LTcuODAxLDAuMDg2bC0xNy44ODMsMTAuMjQ2bC0zLjgzNi0zLjgzNmwxMC4yNDYtMTcuODg3YzEuMzgtMi40MDksMS40MTMtNS4zNjIsMC4wODYtNy44MDENCgkJCWMtMS42My0yLjk3MS0yLjkzOS02LjEwNy0zLjkwNi05LjM1NWMtMC43ODMtMi42NjgtMi44OTUtNC43MzctNS41NzgtNS40NjVsLTIwLjI4NS01LjUxNmMtMC4wNjItMS43MzgtMC4wNjItMy40NzksMC01LjIyM2wwLDANCgkJCWwyMC4yODUtNS41MTJjMi42ODMtMC43MjgsNC43OTUtMi43OTcsNS41NzgtNS40NjVjMC45NjctMy4yNDgsMi4yNzYtNi4zODQsMy45MDYtOS4zNTVjMS4zMjctMi40MzksMS4yOTQtNS4zOTItMC4wODYtNy44MDENCgkJCWwtMTAuMjQ2LTE3Ljg4NmwzLjgzNi0zLjgzNmwxNy44ODMsMTAuMjQ2YzIuNDA5LDEuMzgsNS4zNjIsMS40MTMsNy44MDEsMC4wODZjMi45NzEtMS42Myw2LjEwNy0yLjkzOSw5LjM1NS0zLjkwNg0KCQkJYzIuNjY4LTAuNzgzLDQuNzM3LTIuODk1LDUuNDY1LTUuNTc4bDUuNTE2LTIwLjI4MWMxLjc0Mi0wLjA2MywzLjQ4My0wLjA2Myw1LjIyMywwbDUuNTE2LDIwLjI4MQ0KCQkJYzAuNzI4LDIuNjgzLDIuNzk3LDQuNzk1LDUuNDY1LDUuNTc4YzMuMjQ4LDAuOTY3LDYuMzg0LDIuMjc2LDkuMzU1LDMuOTA2YzIuNDM5LDEuMzI3LDUuMzkyLDEuMjk0LDcuODAxLTAuMDg2bDE3Ljg4My0xMC4yNDYNCgkJCWwzLjgzNiwzLjgzNmwtMTAuMjQ2LDE3Ljg4N2MtMS4zODMsMi40MTItMS40MTQsNS4zNjgtMC4wODIsNy44MDljMS42MjksMi45NjgsMi45MzcsNi4xMDIsMy45MDIsOS4zNDgNCgkJCWMwLjc4MywyLjY2OCwyLjg5NSw0LjczNyw1LjU3OCw1LjQ2NWwyMC4yODUsNS41MTZDMzkxLjkxOCwxMTkuMTI5LDM5MS45MTgsMTIwLjg3LDM5MS44NTUsMTIyLjYxM3oiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHBhdGggZD0iTTMyMC4wNDcsODhjLTE3LjY3MywwLTMyLDE0LjMyNy0zMiwzMmMwLjAyLDE3LjY2NSwxNC4zMzUsMzEuOTgsMzIsMzJjMTcuNjczLDAsMzItMTQuMzI3LDMyLTMyUzMzNy43Miw4OCwzMjAuMDQ3LDg4eg0KCQkJIE0zMjAuMDQ3LDEzNmMtOC44MzcsMC0xNi03LjE2My0xNi0xNmMwLjAwOS04LjgzMyw3LjE2Ny0xNS45OTEsMTYtMTZjOC44MzcsMCwxNiw3LjE2MywxNiwxNlMzMjguODgzLDEzNiwzMjAuMDQ3LDEzNnoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNDAwIiB5PSIzMiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjQzMiIgeT0iMzIiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMjA4LDQyNEg4Yy00LjQxOCwwLTgsMy41ODItOCw4djQwYzAsNC40MTgsMy41ODIsOCw4LDhoMjAwYzQuNDE4LDAsOC0zLjU4Miw4LTh2LTQwQzIxNiw0MjcuNTgyLDIxMi40MTgsNDI0LDIwOCw0MjR6DQoJCQkgTTIwMCw0NjRIMTZ2LTI0aDE4NFY0NjR6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NzIsMEgxNjhjLTQuNDE4LDAtOCwzLjU4Mi04LDh2MTgwLjk5Yy00NS44OS0yNi40NjUtMTA0LjU0NS0xMC43MTctMTMxLjAxLDM1LjE3Mw0KCQkJYy0yNi40NjUsNDUuODktMTAuNzE3LDEwNC41NDUsMzUuMTczLDEzMS4wMWM0NS44OSwyNi40NjUsMTA0LjU0NSwxMC43MTcsMTMxLjAxLTM1LjE3M2M4LjQxNy0xNC41OTYsMTIuODQxLTMxLjE1MSwxMi44MjctNDhoODgNCgkJCXY0OGgtNTZjLTQuNDE4LDAtOCwzLjU4Mi04LDh2NDBjMCw0LjQxOCwzLjU4Miw4LDgsOGgxNjBjNC40MTgsMCw4LTMuNTgyLDgtOHYtNDBjMC00LjQxOC0zLjU4Mi04LTgtOGgtNDh2LTQ4aDEyMA0KCQkJYzQuNDE4LDAsOC0zLjU4Miw4LThWOEM0ODAsMy41ODIsNDc2LjQxOCwwLDQ3MiwweiBNMTEyLDM1MmMtNDQuMTgzLDAtODAtMzUuODE3LTgwLTgwYzAtNDQuMTgzLDM1LjgxNy04MCw4MC04MHM4MCwzNS44MTcsODAsODANCgkJCUMxOTEuOTUxLDMxNi4xNjIsMTU2LjE2MiwzNTEuOTUxLDExMiwzNTJ6IE0zOTIsMzM2djI0SDI0OHYtMjRIMzkyeiBNMzEyLDMyMHYtNDhoMjR2NDhIMzEyeiBNNDY0LDI1NkgyMDYuNTU1DQoJCQljLTAuOTE4LTUuNDQ0LTIuMzA4LTEwLjc5Ny00LjE1Ni0xNkg0NjRWMjU2eiBNNDY0LDIyNEgxOTUuMDFjLTUuMDc2LTguNzMtMTEuNDkxLTE2LjYwOS0xOS4wMS0yMy4zNVYxNmgyODhWMjI0eiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cGF0aCBkPSJNMTEyLDI0MGMtMTcuNjczLDAtMzIsMTQuMzI3LTMyLDMyYzAsMTcuNjczLDE0LjMyNywzMiwzMiwzMnMzMi0xNC4zMjcsMzItMzJDMTQzLjk4LDI1NC4zMzUsMTI5LjY2NSwyNDAuMDIsMTEyLDI0MHoNCgkJCSBNMTEyLDI4OGMtOC44MzcsMC0xNi03LjE2My0xNi0xNnM3LjE2My0xNiwxNi0xNnMxNiw3LjE2MywxNiwxNkMxMjcuOTkxLDI4MC44MzMsMTIwLjgzMywyODcuOTkxLDExMiwyODh6Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjE2IiB5PSIzNTIiIHdpZHRoPSIxNiIgaGVpZ2h0PSI1NiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIxODQiIHk9IjM1MiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjU2Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjE1MiIgeT0iMzc2IiB3aWR0aD0iMTYiIGhlaWdodD0iMzIiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCgk8Zz4NCgkJPHJlY3QgeD0iNDgiIHk9IjM3NiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjMyIi8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxyZWN0IHg9IjgwIiB5PSIzOTIiIHdpZHRoPSIxNiIgaGVpZ2h0PSIxNiIvPg0KCTwvZz4NCjwvZz4NCjxnPg0KCTxnPg0KCQk8cmVjdCB4PSIxMjAiIHk9IjM5MiIgd2lkdGg9IjE2IiBoZWlnaHQ9IjE2Ii8+DQoJPC9nPg0KPC9nPg0KPGc+DQoJPGc+DQoJCTxwYXRoIGQ9Ik00NjguMjg1LDM4OS4wOWMtMTUuNjMzLTE1LjU5NC00MC45MzctMTUuNTk0LTU2LjU3LDBsLTIyLjYyNSwyMi42MjVjLTE1LjU3OCwxNS42NjMtMTUuNTEsNDAuOTksMC4xNTQsNTYuNTY4DQoJCQljMTUuNjAyLDE1LjUxOCw0MC44MDksMTUuNTE5LDU2LjQxMywwLjAwMmwyMi42MjktMjIuNjI5QzQ4My44ODIsNDMwLjAyNiw0ODMuODgyLDQwNC43Miw0NjguMjg1LDM4OS4wOXogTTQ1MC4yNzMsMzk1Ljc5DQoJCQlsLTE1LjkyOSwxNS45MjlsLTExLjMxNi0xMS4zMTZDNDMwLjIyLDM5My4yNTgsNDQxLjEyOSwzOTEuNDExLDQ1MC4yNzMsMzk1Ljc5eiBNNDM0LjM0NCw0NTYuOTczDQoJCQljLTkuMzYxLDkuMzg1LTI0LjU1OCw5LjQwNC0zMy45NDMsMC4wNDNzLTkuNDA0LTI0LjU1OC0wLjA0My0zMy45NDNjMC4wMTUtMC4wMTUsMC4wMy0wLjAzLDAuMDQ1LTAuMDQ1bDExLjMxMy0xMS4zMTMNCgkJCWwzMy45NDMsMzMuOTQzTDQzNC4zNDQsNDU2Ljk3M3ogTTQ1Ni45NzMsNDM0LjM0NGwtMC4wMDIsMC4wMDJsLTExLjMxNS0xMS4zMTVsMTUuOTMtMTUuOTMNCgkJCUM0NjUuOTY0LDQxNi4yNDQsNDY0LjExNyw0MjcuMTUzLDQ1Ni45NzMsNDM0LjM0NHoiLz4NCgk8L2c+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8Zz4NCjwvZz4NCjxnPg0KPC9nPg0KPGc+DQo8L2c+DQo8L3N2Zz4NCg==" />
                             </span>
                        </div>
                        <div class="cat-cap">
                            <h5>Installation Software</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-sm-3">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span class="flaticon-team"></span>
                        </div>
                        <div class="cat-cap">
                            <h5>Maintenance</h5>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-3 col-sm-3">
                    <div class="single-cat text-center mb-50">
                        <div class="cat-icon">
                            <span>
                                <img src="data:image/svg+xml;base64,PHN2ZyBoZWlnaHQ9IjQ5MnB0IiB2aWV3Qm94PSIwIDAgNDkyIDQ5Mi45NzUwNyIgd2lkdGg9IjQ5MnB0IiB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciPjxwYXRoIGQ9Im0zMC45NzY1NjIgMzQyLjQ4ODI4MWgxMDR2LTE2aC0xMDRjLTQuNDIxODc0IDAtOC0zLjU4MjAzMS04LTh2LTI0OGgzMDR2NjRoMTZ2LTEwNGMwLTEzLjI1MzkwNi0xMC43NDYwOTMtMjQtMjQtMjRoLTI4OGMtMTMuMjU3ODEyIDAtMjQgMTAuNzQ2MDk0LTI0IDI0djI4OGMwIDEzLjI1MzkwNyAxMC43NDIxODggMjQgMjQgMjR6bTAtMzIwaDI4OGM0LjQxNzk2OSAwIDggMy41ODIwMzEgOCA4djI0aC0zMDR2LTI0YzAtNC40MTc5NjkgMy41NzgxMjYtOCA4LTh6bTAgMCIvPjxwYXRoIGQ9Im0zOC45NzY1NjIgMzAuNDg4MjgxaDE2djE2aC0xNnptMCAwIi8+PHBhdGggZD0ibTcwLjk3NjU2MiAzMC40ODgyODFoMTZ2MTZoLTE2em0wIDAiLz48cGF0aCBkPSJtMTAyLjk3NjU2MiAzMC40ODgyODFoMTZ2MTZoLTE2em0wIDAiLz48cGF0aCBkPSJtMTUwLjk3NjU2MiAxMTAuNDg4MjgxaDE2djE2aC0xNnptMCAwIi8+PHBhdGggZD0ibTE4Mi45NzY1NjIgMTEwLjQ4ODI4MWgxNnYxNmgtMTZ6bTAgMCIvPjxwYXRoIGQ9Im0yMTQuOTc2NTYyIDExMC40ODgyODFoMTZ2MTZoLTE2em0wIDAiLz48cGF0aCBkPSJtMTE4Ljk3NjU2MiAxMTAuNDg4MjgxaDE2djE2aC0xNnptMCAwIi8+PHBhdGggZD0ibTQ2Mi45NzY1NjIgMTUwLjQ4ODI4MWgtMjg4Yy0xMy4yNTc4MTIgMC0yNCAxMC43NDYwOTQtMjQgMjR2Mjg4YzAgMTMuMjUzOTA3IDEwLjc0MjE4OCAyNCAyNCAyNGgyODhjMTMuMjUzOTA3IDAgMjQtMTAuNzQ2MDkzIDI0LTI0di0yODhjMC0xMy4yNTM5MDYtMTAuNzQ2MDkzLTI0LTI0LTI0em0tMjg4IDE2aDI4OGM0LjQxNzk2OSAwIDggMy41ODIwMzEgOCA4djI0aC0zMDR2LTI0YzAtNC40MTc5NjkgMy41NzgxMjYtOCA4LTh6bTI4OCAzMDRoLTI4OGMtNC40MjE4NzQgMC04LTMuNTgyMDMxLTgtOHYtMjQ4aDMwNHYyNDhjMCA0LjQxNzk2OS0zLjU4MjAzMSA4LTggOHptMCAwIi8+PHBhdGggZD0ibTE4Mi45NzY1NjIgMTc0LjQ4ODI4MWgxNnYxNmgtMTZ6bTAgMCIvPjxwYXRoIGQ9Im0yMTQuOTc2NTYyIDE3NC40ODgyODFoMTZ2MTZoLTE2em0wIDAiLz48cGF0aCBkPSJtMjQ2Ljk3NjU2MiAxNzQuNDg4MjgxaDE2djE2aC0xNnptMCAwIi8+PHBhdGggZD0ibTMxOC45NzY1NjIgMjk0LjQ4ODI4MWMtMjYuNTExNzE4IDAtNDggMjEuNDkyMTg4LTQ4IDQ4IDAgMjYuNTExNzE5IDIxLjQ4ODI4MiA0OCA0OCA0OCAyNi41MDc4MTMgMCA0OC0yMS40ODgyODEgNDgtNDgtLjAyNzM0My0yNi41LTIxLjUwMzkwNi00Ny45NzI2NTYtNDgtNDh6bTAgODBjLTE3LjY3NTc4MSAwLTMyLTE0LjMyODEyNS0zMi0zMnMxNC4zMjQyMTktMzIgMzItMzJjMTcuNjcxODc2IDAgMzIgMTQuMzI4MTI1IDMyIDMycy0xNC4zMjgxMjQgMzItMzIgMzJ6bTAgMCIvPjxwYXRoIGQ9Im00MDguNTc0MjE5IDMxOC42NDg0MzgtMTQuMTkxNDA3LTIuODM5ODQ0Yy0uOTI5Njg3LTIuNjQ0NTMyLTEuOTk2MDkzLTUuMjM4MjgyLTMuMTk5MjE4LTcuNzY5NTMybDgtMTJjMi4xMTMyODEtMy4xNzE4NzQgMS42OTUzMTItNy4zOTg0MzctMS0xMC4wOTM3NWwtMjIuNjQwNjI1LTIyLjY1NjI1Yy0yLjY5NTMxMy0yLjY5OTIxOC02LjkyMTg3NS0zLjExNzE4Ny0xMC4wOTc2NTctMWwtMTIgOGMtMi41MzEyNS0xLjIwMzEyNC01LjEyMTA5My0yLjI2OTUzMS03Ljc2NTYyNC0zLjE5OTIxOGwtMi44NjMyODItMTQuMjAzMTI1Yy0uNzYxNzE4LTMuNzIyNjU3LTQuMDM5MDYyLTYuMzk4NDM4LTcuODM5ODQ0LTYuMzk4NDM4aC0zMmMtMy44MDQ2ODcgMC03LjA4MjAzMSAyLjY3NTc4MS03Ljg0Mzc1IDYuMzk4NDM4bC0yLjgzOTg0MyAxNC4xOTUzMTJjLTIuNjQwNjI1LjkyOTY4OC01LjIzNDM3NSAxLjk5NjA5NC03Ljc2NTYyNSAzLjE5OTIxOWwtMTItOGMtMy4xNzU3ODItMi4xMTcxODgtNy4zOTg0MzgtMS42OTkyMTktMTAuMDk3NjU2IDFsLTIyLjY1NjI1IDIyLjY0MDYyNWMtMi42OTUzMTMgMi42OTUzMTMtMy4xMTMyODIgNi45MjE4NzUtMSAxMC4wOTM3NWw4IDEyYy0xLjE5OTIxOSAyLjUzMTI1LTIuMjY5NTMyIDUuMTI1LTMuMTk5MjE5IDcuNzY5NTMxbC0xNC4xOTkyMTkgMi44NjMyODJjLTMuNzI2NTYyLjc2MTcxOC02LjQwMjM0NCA0LjAzOTA2Mi02LjM5ODQzOCA3LjgzOTg0M3YzMmMtLjAwMzkwNiAzLjgwMDc4MSAyLjY3MTg3NiA3LjA3ODEyNSA2LjM5ODQzOCA3LjgzOTg0NGwxNC4xOTE0MDYgMi44Mzk4NDRjLjkyOTY4OCAyLjY0NDUzMSAyIDUuMjM4MjgxIDMuMTk5MjE5IDcuNzY5NTMxbC04IDEyYy0yLjExMzI4MSAzLjE3MTg3NS0xLjY5NTMxMyA3LjM5ODQzOCAxIDEwLjA5Mzc1bDIyLjY0MDYyNSAyMi42NTYyNWMyLjY5NTMxMiAyLjY5OTIxOSA2LjkyMTg3NSAzLjExNzE4OCAxMC4wOTc2NTYgMWwxMi04YzIuNTMxMjUgMS4yMDMxMjUgNS4xMjUgMi4yNjk1MzEgNy43NjU2MjUgMy4xOTkyMTlsMi44NjMyODEgMTQuMjAzMTI1Yy43NjE3MTkgMy43MjI2NTYgNC4wMzkwNjMgNi4zOTg0MzcgNy44NDM3NSA2LjM5ODQzN2gzMmMzLjgwMDc4MiAwIDcuMDc4MTI2LTIuNjc1NzgxIDcuODM5ODQ0LTYuMzk4NDM3bDIuODM5ODQ0LTE0LjE5MTQwNmMyLjY0MDYyNS0uOTI5Njg4IDUuMjM0Mzc1LTIgNy43NjU2MjUtMy4yMDMxMjZsMTIgOGMzLjE3NTc4MSAyLjExNzE4OCA3LjM5ODQzNyAxLjY5OTIxOSAxMC4wOTc2NTYtMWwyMi42NTYyNS0yMi42NDA2MjRjMi42OTUzMTMtMi42OTUzMTMgMy4xMTMyODEtNi45MjE4NzYgMS0xMC4wOTM3NWwtOC0xMmMxLjE5OTIxOS0yLjUzMTI1IDIuMjY5NTMxLTUuMTI1IDMuMTk5MjE5LTcuNzY5NTMybDE0LjE5OTIxOS0yLjg2MzI4MWMzLjcyNjU2Mi0uNzYxNzE5IDYuNDAyMzQzLTQuMDM5MDYzIDYuNDAyMzQzLTcuODM5ODQ0di0zMmMwLTMuODAwNzgxLTIuNjc1NzgxLTcuMDc4MTI1LTYuNDAyMzQzLTcuODM5ODQzem0tOS41OTc2NTcgMzMuMjgxMjUtMTIuMzg2NzE4IDIuNDgwNDY4Yy0yLjkzMzU5NC41ODU5MzgtNS4yOTY4NzUgMi43NjU2MjUtNi4xMjEwOTQgNS42NDQ1MzItMS4zNDM3NSA0LjcwMzEyNC0zLjIyMjY1NiA5LjIzODI4MS01LjU5NzY1NiAxMy41MTU2MjQtMS40NjA5MzggMi42MTcxODgtMS4zMzIwMzIgNS44MzIwMzIuMzI4MTI1IDguMzI4MTI2bDYuOTkyMTg3IDEwLjQ3NjU2Mi0xMy4zNTkzNzUgMTMuMzYzMjgxLTEwLjQ4MDQ2OS02Ljk5MjE4N2MtMi40OTYwOTMtMS42NjQwNjMtNS43MTA5MzctMS43ODkwNjMtOC4zMjgxMjQtLjMyODEyNS00LjI3NzM0NCAyLjM3NS04LjgwODU5NCA0LjI1MzkwNi0xMy41MTE3MTkgNS41OTc2NTYtMi44Nzg5MDcuODI0MjE5LTUuMDU4NTk0IDMuMTgzNTk0LTUuNjQ4NDM4IDYuMTIxMDk0bC0yLjQ0OTIxOSAxMi4zNTE1NjJoLTE4Ljg3ODkwNmwtMi40ODA0NjgtMTIuMzgyODEyYy0uNTg5ODQ0LTIuOTM3NS0yLjc2OTUzMi01LjMwMDc4MS01LjY0ODQzOC02LjEyMTA5NC00LjcwMzEyNS0xLjM0Mzc1LTkuMjM4MjgxLTMuMjIyNjU2LTEzLjUxMTcxOS01LjYwMTU2My0yLjYxNzE4Ny0xLjQ1NzAzMS01LjgzMjAzMS0xLjMzMjAzMS04LjMyODEyNS4zMjgxMjZsLTEwLjQ4MDQ2OCA2Ljk5MjE4Ny0xMy4zNTkzNzYtMTMuMzU5Mzc1IDYuOTkyMTg4LTEwLjQ4MDQ2OWMxLjY2MDE1Ni0yLjQ5MjE4NyAxLjc4OTA2Mi01LjcwNzAzMS4zMjgxMjUtOC4zMjgxMjUtMi4zNzg5MDYtNC4yNzM0MzctNC4yNTc4MTMtOC44MDg1OTQtNS42MDE1NjMtMTMuNTExNzE4LS44MjAzMTItMi44Nzg5MDctMy4xODM1OTMtNS4wNTg1OTQtNi4xMTcxODctNS42NDg0MzhsLTEyLjM1MTU2My0yLjQ0NTMxMnYtMTguODgyODEzbDEyLjM4MjgxMy0yLjQ3NjU2M2MyLjkzNzUtLjU4OTg0MyA1LjI5Njg3NS0yLjc2OTUzMSA2LjEyMTA5NC01LjY0ODQzNyAxLjM0Mzc1LTQuNzAzMTI1IDMuMjIyNjU2LTkuMjM4MjgxIDUuNTk3NjU2LTEzLjUxMTcxOSAxLjQ2MDkzNy0yLjYyMTA5NCAxLjMzMjAzMS01LjgzNTkzNy0uMzI4MTI1LTguMzI4MTI1bC02Ljk5MjE4OC0xMC40ODA0NjkgMTMuMzU5Mzc2LTEzLjM1OTM3NCAxMC40ODA0NjggNi45OTIxODdjMi40OTYwOTQgMS42NjAxNTYgNS43MTA5MzggMS43ODUxNTYgOC4zMjgxMjUuMzI4MTI1IDQuMjc3MzQ0LTIuMzc4OTA2IDguODA4NTk0LTQuMjU3ODEyIDEzLjUxMTcxOS01LjYwMTU2MiAyLjg4MjgxMi0uODI0MjE5IDUuMDU4NTk0LTMuMTgzNTk0IDUuNjQ4NDM4LTYuMTIxMDk0bDIuNDQ5MjE4LTEyLjM1MTU2M2gxOC44Nzg5MDZsMi40ODA0NjkgMTIuMzgyODEzYy41ODk4NDQgMi45Mzc1IDIuNzY5NTMxIDUuMzAwNzgxIDUuNjQ4NDM4IDYuMTIxMDk0IDQuNzAzMTI1IDEuMzQzNzUgOS4yMzgyODEgMy4yMjI2NTYgMTMuNTExNzE5IDUuNjAxNTYyIDIuNjE3MTg3IDEuNDU3MDMxIDUuODMyMDMxIDEuMzMyMDMxIDguMzI4MTI0LS4zMjgxMjVsMTAuNDgwNDY5LTYuOTkyMTg3IDEzLjM1OTM3NSAxMy4zNTkzNzQtNi45OTIxODcgMTAuNDgwNDY5Yy0xLjY2MDE1NyAyLjQ5NjA5NC0xLjc4OTA2MyA1LjcxMDkzOC0uMzI4MTI1IDguMzI4MTI1IDIuMzc4OTA2IDQuMjczNDM4IDQuMjU3ODEyIDguODA4NTk0IDUuNjAxNTYyIDEzLjUxMTcxOS44MjAzMTMgMi44Nzg5MDYgMy4xODM1OTQgNS4wNTg1OTQgNi4xMTcxODggNS42NDg0MzdsMTIuMzU1NDY4IDIuNDQ1MzEzem0wIDAiLz48cGF0aCBkPSJtNDEuNzM0Mzc1IDM1NC43NTM5MDYtMTQuMTUyMzQ0IDcuNDY4NzVjMjMuMzA0Njg4IDQ0LjIxODc1IDU5LjQ0MTQwNyA4MC4zNTE1NjMgMTAzLjY1NjI1IDEwMy42NTYyNWw3LjQ3MjY1Ny0xNC4xNDA2MjVjLTQxLjM3MTA5NC0yMS44MDQ2ODctNzUuMTc5Njg4LTU1LjYxMzI4MS05Ni45NzY1NjMtOTYuOTg0Mzc1em0wIDAiLz48cGF0aCBkPSJtNDUyLjIxNDg0NCAxMzguMjIyNjU2IDE0LjE1MjM0NC03LjQ2ODc1Yy0yMy4zMDQ2ODgtNDQuMjE4NzUtNTkuNDQxNDA3LTgwLjM1MTU2Mi0xMDMuNjU2MjUtMTAzLjY1NjI1bC03LjQ3MjY1NyAxNC4xNDQ1MzJjNDEuMzcxMDk0IDIxLjgwMDc4MSA3NS4xNzk2ODggNTUuNjA5Mzc0IDk2Ljk3NjU2MyA5Ni45ODA0Njh6bTAgMCIvPjxwYXRoIGQ9Im0uNDg4MjgxIDM3OS41NTg1OTQgMTMuODU1NDY5LTcuOTk2MDk0IDggMTMuODU1NDY5LTEzLjg1OTM3NSA4em0wIDAiLz48cGF0aCBkPSJtMjcuMzQ3NjU2IDQyMC4zMzk4NDQgMTIuMjU3ODEzLTEwLjI4NTE1NiAxMC4yODEyNSAxMi4yNjE3MTgtMTIuMjU3ODEzIDEwLjI4MTI1em0wIDAiLz48cGF0aCBkPSJtNjAuODY3MTg4IDQ1NS44Mzk4NDQgMTAuMjgxMjUtMTIuMjU3ODEzIDEyLjI1NzgxMiAxMC4yODEyNS0xMC4yODEyNSAxMi4yNTc4MTN6bTAgMCIvPjxwYXRoIGQ9Im0xMDAuMDUwNzgxIDQ4NC45NzY1NjIgOC0xMy44NTU0NjggMTMuODU1NDY5IDcuOTk2MDk0LTggMTMuODU5Mzc0em0wIDAiLz48cGF0aCBkPSJtNDcxLjYwMTU2MiAxMDcuNTU0Njg4IDEzLjg1OTM3Ni04IDcuOTk2MDkzIDEzLjg1NTQ2OC0xMy44NTU0NjkgOHptMCAwIi8+PHBhdGggZD0ibTQ0NC4wNjY0MDYgNzAuNjY0MDYyIDEyLjI1NzgxMy0xMC4yODEyNSAxMC4yODUxNTYgMTIuMjU3ODEzLTEyLjI2MTcxOSAxMC4yODEyNXptMCAwIi8+PHBhdGggZD0ibTQxMC41NDY4NzUgMzkuMTA5Mzc1IDEwLjI4MTI1LTEyLjI1NzgxMyAxMi4yNTc4MTMgMTAuMjgxMjUtMTAuMjgxMjUgMTIuMjYxNzE5em0wIDAiLz48cGF0aCBkPSJtMzcyLjA0Njg3NSAxMy44NTU0NjkgOC0xMy44NTU0NjkgMTMuODU1NDY5IDgtNy45OTYwOTQgMTMuODU1NDY5em0wIDAiLz48cGF0aCBkPSJtNTQuOTc2NTYyIDE1OC40ODgyODFoNjR2MTZoLTY0em0wIDAiLz48cGF0aCBkPSJtNTQuOTc2NTYyIDE5MC40ODgyODFoNjR2MTZoLTY0em0wIDAiLz48cGF0aCBkPSJtNTQuOTc2NTYyIDIyMi40ODgyODFoNjR2MTZoLTY0em0wIDAiLz48cGF0aCBkPSJtNTQuOTc2NTYyIDI1NC40ODgyODFoNjR2MTZoLTY0em0wIDAiLz48cGF0aCBkPSJtNTQuOTc2NTYyIDI4Ni40ODgyODFoNjR2MTZoLTY0em0wIDAiLz48L3N2Zz4=" />
                            </span>
                        </div>
                        <div class="cat-cap">
                            <h5>Remaster</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Services Area End -->
    <!--? About Area Start-->
    <div class="support-company-area sup-compagny pt-100 pb-100 section-bg fix "
         data-background="technext.github.io/consultingbiz/assets/img/gallery/section_bg02.jpg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="support-location-img">
                        <img src="technext.github.io/consultingbiz/assets/img/gallery/about.png" alt="">
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6">
                    <div class="right-caption">
                        <!-- Section Tittle -->
                        <div class="section-tittle section-tittle2 mb-50">
                            <span>Nos Services</span>
                            <h2>Nos meilleurs Prestations</h2>
                        </div>
                        <div class="support-caption">
                            <p class="pera-top">L'environnement de travail est donc stimulant pour les étudiants mais il permet également à l'équipe pédagogique de donner un sens et
                                une vision concrète des apports théoriques, même si nos formations sont orientées à 90% sur des cas pratiques "pédagogiques".</p>
                            <p class="mb-65">Nos techniciens informatiques en herbe bénéficient de différents outils et différents logiciels pour pouvoir mener à
                                bien leur mission. Si vous voulez profiter de ce service, vous avez également à votre disposition un formulaire de contact qui vous permettra d'être mis en relation avec le centre le plus proche.</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- About Area End-->

    <!--? Hero Start -->
    <div class="slider-area2 Bg-none" id="about">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 Aboutus text-center">
                            <h2>A Propos</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->
    <div class="about-details section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb-125">
                    <div class="about-details-cap mb-50 justify-content-around">
                        <h4>Qui sommes nous?</h4>
                        <p>Dès sa création en 1999, ONLINEFORMAPRO s’est rapidement imposée comme une entreprise innovante dans le domaine de la pédagogie inversée et pédagogie active par projet.</p>
                        <p> En effet, entre Digital Learning et organisme de formation reconnu, notre culture pédagogique présente dans nos 21 sites en Bourgogne – Franche-Comté,
                            Grand Est et Rhône-Alpes nous a permis d’accélérer la mutation de la formation via des solutions innovantes et adaptées notamment dans les métiers de l’informatique.</p>
                    </div>

                    <div class="about-details-cap mb-50 justify-content-around">
                        <h4>Notre Vision</h4>
                        <p>Le projet "REPARE PC" initié par ONLINRFORMAPRO est né de la volonté de faire participer activement nos apprenants sur des cas
                            concrets de maintenance ou télémaintenance informatique.
                        </p>
                        <p> En effet, comment mieux se préparer au monde du travail et à la réalité du terrain
                            lorsque l'on est encore en phase d'apprentissage ??!!</p>
                        <p>Il suffit de proposer ses compétences en informatique gratuitement et intervenir sur des pannes réelles et des besoins
                            spécifiques émanant de véritables clients (professionnels ou particuliers).</p>
                    </div>

                    <div class="about-details-cap mb-50 justify-content-around">
                        <h4>Notre Objectif</h4>
                        <p>En ouvrant nos portes pendant deux après-midi par semaine en tant que centre de diagnostics et de réparations gratuit et accessible au public, notre objectif est de permettre aux apprenants de mettre en avant leurs apprentissages pratiques et théoriques abordés en centre et même de prolonger leurs connaissances
                            grâce à des compétences clés transverses au métier de technicien informatique :
                        </p>
                        <ul>
                            <li>- Accueil de la clientèle</li>
                            </br>
                            <li>- Analyse du besoin</li>
                            </br>
                            <li>- Assistance aux utilisateurs</li>
                            </br>
                            <li>- Conseils techniques et accompagnement</li>
                            </br>
                            <li>- Rédaction des rapports d'intervention</li>
                            </br>
                            <li>- Communication avec son équipe et le client dans le respect des bonnes pratiques</li>
                        </ul>
                        </br>
                        <p>Nous avons donc vocation à confronter nos apprenants sur des projets et incidents réels afin qu’ils soient opérationnels à l’issue de leur formation de technicien informatique. Ils pourront également réaliser une intervention à distance si vous
                            le souhaitez et vous donner toutes les explications nécessaires à la bonne utilisation de votre outil informatique.
                        </p>
                </div>
            </div>
        </div>
    </div>

    <!--? Hero Start -->
    <div class="slider-area2" id="contact">
        <div class="slider-height2 hero-overly2 d-flex align-items-center">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12">
                        <div class="hero-cap hero-cap2 text-center">
                            <h2>Nous Contacter</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- ================ contact section start ================= -->

    <section class="contact-section">
        <div class="container">
            <div class="d-none d-sm-block mb-5 pb-4">
                <div id="session"></div>
                <div id="maCarte" class="index-0">
                </div>

            </div>

            <?php if (isset($_SESSION['flash'])): ?>
                <?php foreach ($_SESSION['flash'] as $type => $message): ?>
                    <div class="alert alert-<?= $type; ?>">
                        <?= $message; ?>
                    </div>
                <?php endforeach; ?>
                <?php unset($_SESSION['flash']); ?>
            <?php endif; ?>
            <div class="col-12 text-center pb-5">
                <h4>Vous avez un problème avec votre matériel informatique ?
                    Voici comment va se dérouler notre relation…</h4>
            </div>
            <div class="row">
                <div class="col-6">
                    <h2 class="contact-title">Prendre Contact</h2>
                </div>
                <div class="col-6">
                    <h2 class="contact-title text-center">Prise de rendez-vous:</h2>
                </div>
                <div class="col-lg-6">
                    <form class="form-contact contact_form" action="technext.github.io/consultingbiz/contact.php"
                          method="post" id="contactForm">
                        <div class="row">
                            <div class="col-sm-6" style="display: none;">
                                <div class="form-group">
                                    <input class="form-control" name="namecenter" id="contact_center" type="text"
                                           value="Aucun centre séléctionner..">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100" name="message" id="message" cols="30" rows="9"
                                              placeholder=" Entrer le Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="name" id="name" type="text"
                                           placeholder="Entrer votre nom">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control" name="email" id="email" type="email"
                                           placeholder="Email">
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="button button-contactForm boxed-btn">Envoyer</button>
                        </div>
                    </form>
                </div>

                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <div class="media-body">
                          <img class="consigne" src="technext.github.io/consultingbiz/assets/img/gallery/consigne.png">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ================ contact section end ================= -->
        <!--? Hero Start -->
        <div class="slider-area3" id="after">
            <div class="slider-height2 hero-overly2 d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="hero-cap hero-cap2 text-center">
                                <h2>Et après ?</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="about-details section-padding30">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center pb-5">
                        <h4>Vous êtes une entreprise ou une association qui souhaite se débarrasser de matériels informatiques obsolètes ??!!</h4>
                    </div>

                    <div class="col-6">
                        <img class="consigne" src="technext.github.io/consultingbiz/assets/img/gallery/recuperation.jpg">
                    </div>
                    <div class="col-6 about-details-cap pt-5">
                        <h4>Pour la bonne cause</h4>
                        <p>Toujours dans cet esprit et cette volonté de faire participer activement nos apprenants sur des cas concrets de maintenance ou
                            télémaintenance informatique, « REPARE PC » vous propose de récupérer ce type de matériel. En effet, plutôt que de faire appel à une entreprise de recyclage,
                            nos apprenants proposent de reconditionner votre ancien matériel pour les redistribuer à des familles dans le besoin ou à des associations d'aide à l'emploi.
                        </p>
                        <img class="eco mx-5" src="technext.github.io/consultingbiz/assets/img/gallery/ecolog.jpg">
                    </div>

                </div>
            </div>
        </div>

</main>
<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg"
         data-background="technext.github.io/consultingbiz/assets/img/gallery/footer_bg.jpg">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo">
                                <a href="index.html"><img
                                            src="technext.github.io/consultingbiz/assets/img/logo/logo-online-blanc.png"
                                            alt=""
                                            style="max-width: 160px;"></a>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera ">
                                    <p class="info1">Permettre au plus grand nombre d’accéder librement, sans contrainte
                                        de lieu, de temps ou de rythme à des formations modulaires et souples.</p>
                                    <hr style="    border-color: #525151;margin-bottom: 0;">
                                    <br> <a class="footer-widget" style="margin-right:15px; font-size: 12px;" href="#">Mentions
                                        légales</a>
                                    <a class="footer-widget" style="margin-right:15px; font-size: 12px;"
                                       href="#">RGPD</a>
                                    <a class="footer-widget" style="margin-right:15px; font-size: 12px;"
                                       href="#">CGV</a>
                                    <a class="footer-widget" style="font-size: 12px;" href="#">Certification
                                        QUALIOPI</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="footer-widget-col col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle recent-tweets">
                                <h4>Dernier tweets</h4>
                                <ul>
                                    <li>
                                        <span style="font-size: 12px;">Cette année encore, Onlineformapro est partenaire du mouvement mondial "Hour of code".  Nous aurons le plaisir d'ac…
                                            <a style="font-size: 12px;" href="https://t.co/3qO305LTUo"
                                               title="https://t.co/3qO305LTUo"
                                               target="_blank">https://t.co/3qO305LTUo</a>
                                        </span>
                                        <a style="font-size: 12px;" class="twitter_time" target="_blank"
                                           href="http://twitter.com/Onlineformapro/statuses/1312723701159337985">129
                                            days ago</a></li>
                                    <li>
                                        <span style="font-size: 12px;">C'est parti pour
                                            <a style="font-size: 12px;" href="http://twitter.com/eLearn_Expo"
                                               title="Follow eLearn_Expo" target="_blank">@eLearn_Expo</a>
                                            2020 !  Rendez-vous stand A40 pour découvrir ou redécouvrir la solution digital lear…
                                            <a style="font-size: 12px;" href="https://t.co/diuGULNCD7"
                                               title="https://t.co/diuGULNCD7"
                                               target="_blank">https://t.co/diuGULNCD7</a>
                                        </span>
                                        <a style="font-size: 12px;" class="twitter_time" target="_blank"
                                           href="http://twitter.com/Onlineformapro/statuses/1308390396960088065">141
                                            days ago</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Contact</h4>
                                <div class="footer-pera">
                                    <ul class="address">
                                        <li>
                                            <i class="fa fa-home"></i>
                                            <p>19 rue du Praley, 70000 Vesoul</p>
                                        </li>
                                        <li>
                                            <i class="fa fa-mobile"></i>
                                            <p>Téléphone : <a href="tel:0384765244">+33(0)3 84 76 52 44</a></p>
                                        </li>
                                        <li>
                                            <i class="fa fa-envelope"></i>
                                            <p>
                                                <adresse>Email : <a href="/contact/">projet@onlineformapro.com</a>
                                                </adresse>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Form -->
                            <div class="footer-form">
                                <div id="mc_embed_signup">
                                    <form target="_blank"
                                          action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01"
                                          method="get" class="subscribe_form relative mail_part" >

                                        <div class="mt-10 info"></div>
                                    </form>
                                </div>
                                <img width="52" height="53"
                                     src="https://www.onlineformapro.com/wp-content/uploads/2017/12/slash_rouge.png"
                                     class="image wp-image-84  attachment-full size-full" alt="slash_rouge"
                                     style="max-width: 100%; height: auto;">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="https://twitter.com/onlineformapro?lang=fr"><i class="fab fa-twitter"></i></a>
                            <a href="https://www.facebook.com/Onlineformapro/" title="Facebook" target="_blank"><i
                                        class="fab fa-facebook-f"></i></a>
                            <a href="https://www.linkedin.com/company/onlineformapro/" title="LinkedIn" target="_blank"><i
                                        class="fab fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top">
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!----------------------------------------------------------------------Map JS----------------------------------------------------->
<script type="text/javascript">

    var lat = 47.61634;
    var lon = 6.14439;
    var carte = null;

    // Fonction d'initialisation de la carte
    function initMap() {

        // Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
        carte = L.map('maCarte').setView([lat, lon], 11);
        // Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
        L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
            // Il est toujours bien de laisser le lien vers la source des données
            attribution: 'données © <a href="//osm.org/copyright">OpenStreetMap</a>/ODbL - rendu <a href="//openstreetmap.fr">OSM France</a>',
            minZoom: 1,
            maxZoom: 20
        }).addTo(carte);
    }

    window.onload = function () {
        // Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
        initMap();

        var villes = <?= $villes_json; ?>

        var tableauMarker = []

        var marqueurs = L.markerClusterGroup();


        // creation de marqueur avec Popup
        var i = 0;
        var send;
        for (ville in villes) {
            i++;
            var marqueur1 =
                L.marker([villes[ville].lat, villes[ville].lon]); //addTo(carte);
            marqueur1.bindPopup("<img src='https://www.onlineformapro.com/wp-content/uploads/2020/01/logo-03.svg' width='20%' alt='Onlineformapro'>" +
                "<br>" +
                "<h3 class='catch'>" + [villes[ville].namecenter] + "</h3>" + "</br><b>Addresse:</b>" +
                "<br>" +
                "<b>" + [villes[ville].address] + "</b><br><p>Horraires: </p>" +
                "<p> Du Lundi au Vendredi:" + [villes[ville].openingt] + "</p>" +
                "<br>" +
                "<button style='margin-top: 5px' type='button' class='btn btn-primary send' onclick=\"document.getElementById('contact_center').value = '"+ villes[ville].namecenter +"';\"><a href='#contactForm'>Contacter</a></button>");
            marqueurs.addLayer(marqueur1);

            //On ajoute le marqueur au tableau
            tableauMarker.push(marqueurs);

        }

        //On regroupe les marqueurs dans un groupe lefleat
        var groupe = new L.featureGroup(tableauMarker);

        //On adapte le zoom au groupe
        carte.fitBounds(groupe.getBounds().pad(0.5));
        carte.addLayer(marqueurs);
    };

</script>
<script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
        integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
        crossorigin=""></script>
<script src="https://unpkg.com/leaflet.markercluster@1.4.1/dist/leaflet.markercluster.js"></script>

<!--    <script src="main.js"></script>-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW"
        crossorigin="anonymous"></script>
<!----------------------------------------------------------------------------------------------------------------------------------------------->
<!-- JS here -->

<script src="technext.github.io/consultingbiz/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<!-- Jquery, Popper, Bootstrap -->
<script src="technext.github.io/consultingbiz/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/popper.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/bootstrap.min.js"></script>
<!-- Jquery Mobile Menu -->
<script src="technext.github.io/consultingbiz/assets/js/jquery.slicknav.min.js"></script>

<!-- Jquery Slick , Owl-Carousel Plugins -->
<script src="technext.github.io/consultingbiz/assets/js/owl.carousel.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/slick.min.js"></script>
<!-- One Page, Animated-HeadLin -->
<script src="technext.github.io/consultingbiz/assets/js/wow.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/animated.headline.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.magnific-popup.js"></script>

<!-- Nice-select, sticky -->
<script src="technext.github.io/consultingbiz/assets/js/jquery.nice-select.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.sticky.js"></script>

<!-- counter , waypoint -->
<script src="cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.counterup.min.js"></script>

<!-- contact js -->
<script src="technext.github.io/consultingbiz/assets/js/contact.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.form.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.validate.min.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/mail-script.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->
<script src="technext.github.io/consultingbiz/assets/js/plugins.js"></script>
<script src="technext.github.io/consultingbiz/assets/js/main.js"></script>

</body>
</html>