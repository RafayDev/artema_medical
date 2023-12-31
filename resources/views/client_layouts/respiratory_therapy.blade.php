<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artema Medical - Categories</title>
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('css/specificstyles.css')}}">
    <style type="text/css">
    .floaticon {
        position: fixed;
        width: 60px;
        height: 60px;
        bottom: 40px;
        right: 40px;
        border-radius: 50px;
        text-align: center;
        font-size: 30px;
        z-index: 100;
    }

    @media only screen and (max-device-width: 1024px) {
        .parallax {
            background-attachment: scroll;
        }
    }

    .learn-more-btn {
        border: 2px solid white;
        /* White border */
        border-radius: 10px;
        /* Rounded corners */
        background-color: transparent;
        /* Transparent background */
        color: white;
        /* White text */
        padding: 10px 20px;
        /* Padding for the button */
        text-align: center;
        /* Center-align text and content */
        display: flex;
        /* Use flexbox for alignment */
        justify-content: center;
        /* Center horizontally */
        align-items: center;
        /* Center vertically */
    }

    /* You can add more styles or adjust the padding as needed */

    /* Optional: Add hover effect */
    .learn-more-btn:hover {
        background-color: white;
        /* Change background on hover */
        color: black;
        /* Change text color on hover */
    }

    .my-float {
        margin-top: 16px;
    }

    .fixed-top.scrolled {
        background-color: #fff !important;
        transition: background-color 200ms linear;
    }

    .parallax-window {
        min-height: 700px;
        background: transparent;
    }

    @media(max-width: 767px) {
        .search-control {
            width: 100%;
        }

        .navbar-brand {
            width: 230px;
        }

        .navbar-collapse {
            background-color: white;
            padding-left: 10%;
        }

        .about {
            padding-left: 0px;
            padding-right: 0px;
        }

        .about .container {
            padding: 0;
        }

        .btn-danger {
            padding: 6px;
            font-size: 12px;
            margin-bottom: 6px;
        }

        .news .container {
            padding: 6% 0%;
        }
    }
    </style>
</head>

<body>
    <a href="https://wa.me/923318999475" class="floaticon" target="_blank">
        <img src="{{asset('images/whts.png')}}" class="img-fluid float-right">
    </a>

    <header>
        <!-- navbar starts -->
        <nav class="navbar fixed-top navbar-expand-lg">
            <div class="button">
                <a class="btn-open" href="#"></a>
            </div>
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-fluid"
                    style="margin-left: 20px;" width="400px"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <!-- <span class="navbar-toggler-icon"></span> -->
                <i class="fa fa-navicon"></i>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{url('/')}}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/about">About Us</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
                            Products
                        </a>
                        <div class="dropdown-menu" style="z-index: 999">
                            @foreach($categories as $category)
                            <a class="dropdown-item"
                                href="{{url('/')}}/category/{{$category->id}}?{{$category->category_slug}}">
                                <i class="fa fa-caret-right"></i> {{$category->category_name}}</a>
                            @endforeach
                            <a class="dropdown-item" href="{{url('/')}}/respiratory-therapy">
                                <i class="fa fa-caret-right"></i> Respiratory Therapy</a>
                        </div>
                    </li>
                    <!-- <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/events">Events & Exhibition</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/factory-view">Factory View</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/resources">Resources</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/compliances">Compliances</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="{{url('/')}}/contact">Contact Us</a>
                    </li>
                </ul>
            </div>

        </nav>

        <!-- navbar ends -->

        <!-- category menu starts -->
        <div class="overlay">
            <div class="wrap">
                <!-- <img src="{{url('/')}}/images/logo.png" class="img-fluid"> -->

                <ul class="wrap-nav" style="margin-top: 10%;">
                    @foreach($categories as $category)
                    <li>
                        <a href="{{url('/')}}/category/{{$category->id}}?{{$category->category_slug}}"
                            style="font-weight: bold;">{{$category->category_name}}</a>
                        @foreach($category->subcategories as $subcategory)
                        <ul>
                            <li>
                                <a class="sub-nav"
                                    href="{{url('/')}}/products/{{$subcategory->id}}?{{$subcategory->sub_category_slug}}">
                                    <!-- <i class="fa fa-caret-right"></i>  -->
                                    {{$subcategory->sub_category_name}}
                                </a>
                            </li>
                        </ul>
                        @endforeach
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </header>
    <div style="margin-top:110px">
        <div class="row space-up">
            <div class="col-md-3 sidemenu">
                <h2 class="cat-head space-up">Categories</h2>
                <ul class="list-group">
                    @foreach($categories as $category)
                    <li class="list-group-item alegreya">
                        <a style="color: black"
                            href="{{url('/')}}/category/{{$category->id}}?{{$category->category_slug}}"> <i
                                class="fa fa-caret-right"></i> {{$category->category_name}}</a>
                    </li>
                    @endforeach
                    <li class="list-group-item alegreya">
                        <a style="color: black" href="{{url('/')}}/respiratory-therapy"> <i
                                class="fa fa-caret-right"></i>Respiratory Therapy</a>
                    </li>

                </ul>
            </div>
            <div class="col-md-9">
                <div class="container">
                    <div class="row mt-3">
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/bellavista_1000e/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">bellavista™ 1000e Ventilator</h5>
                                    <p class="card-text">Ventilation support for your patient's respiratory needs.</p>
                                    <a href="#" data-toggle="modal" data-target="#bellavista_1000e_modal"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/bellavista_1000/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">bellavista™ 1000 Ventilator</h5>
                                    <p class="card-text">Ventilation support for your patient's respiratory needs.</p>
                                    <a href="#" data-toggle="modal" data-target="#bellavista_1000_modal"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/bellavista_neo/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">bellavista™ neo Ventilators</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#bellavista_neo_modal"
                                        style="margin-top: 80px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/ltv2/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">LTV2™ Series Ventilators</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#ltv2_modal" style="margin-top: 80px;"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/avea/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">AVEA™ CVS Ventilation System</h5>
                                    <p class="card-text">A comprehensive neonatal through adult ventilation.</p>
                                    <a href="#" data-toggle="modal" data-target="#avea_modal"
                                        class="learn-more-btn">Learn
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/bellavista/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">bellavista ™ 1000 select Ventilator</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#bellavista_modal"
                                        style="margin-top: 80px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/revel/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">ReVel™ Ventilator</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#revel_modal"
                                        style="margin-top: 100px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/3100a/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">3100A/B HFOV Ventilators</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#a_modal" style="margin-top: 75px;"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vyntus_one/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Vyntus™ ONE Pulmonary Function System</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vyntus_one_modal"
                                        style="margin-top: 75px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vyntus_body/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Vyntus™ BODY Plethysmograph</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vyntus_body_modal"
                                        style="margin-top: 95px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vyntus_cpx/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Vyntus™ CPX Metabolic Cart</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vyntus_cpx_modal"
                                        style="margin-top: 95px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/infant/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Infant Flow™ SiPAP</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#infant_modal"
                                        style="margin-top: 120px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vyntus_walk/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Vyntus™ WALK Mobile Exercise Testing</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vyntus_walk_modal"
                                        style="margin-top: 90px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vyntus_sipro/1.webp')}}"
                                    class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">Vyntus™ SPIRO PC Spirometer</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vyntus_sipro_modal"
                                        style="margin-top: 90px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/micro/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">MicroGard™ II PFT Filter</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#micro_modal" style="margin-top: 90px;"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/vela/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">VELA™ Ventilator</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#vela_modal" style="margin-top: 115px;"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/ltv/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">LTV™ Series Ventilators</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#ltv_modal" style="margin-top: 115px;"
                                        class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3" style="width: 16rem; margin-top:20px">
                            <div class="card">
                                <img src="{{asset('images/respiratory_images/cardio/1.webp')}}" class="card-img-top">
                                <div class="card-body" style="background-color:#671B1D;color: white;">
                                    <h5 class="card-title">CardioSoft ECG</h5>
                                    <p class="card-text"></p>
                                    <a href="#" data-toggle="modal" data-target="#cardio_modal"
                                        style="margin-top: 115px;" class="learn-more-btn">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade bd-example-modal-xl" id="bellavista_1000e_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">bellavista™ 1000e Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_bellavista_1000e" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000e/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000e/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000e/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_bellavista_1000e"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_bellavista_1000e" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>bellavista™ 1000e Ventilator</h3>
                                <p>The bellavista™ 1000e offers a full spectrum of high performance features in a
                                    compact size including:
                                <ul>
                                    <li>Adaptive Ventilation Mode - A smart ventilation mode faster weaning and a
                                        reduction of manual settings</li>
                                    <li>High Flow Oxygen Therapy improves the oxygenation of patients while enhancing
                                        patient comfort</li>
                                    <li>Lung Recruitment Tool provides an automated recruitment maneuver that is
                                        reliable and reproducible.</li>
                                    <li>Synchrony tools - Improved patient synchrony with auto.sync, auto.rise and
                                        auto.leak</li>
                                    <li>SettingAssist - Foresee all ventilation settings with a comfortable and easy to
                                        use display&nbsp;</li>
                                </ul>
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>&nbsp;<strong>The comprehensive features include</strong>:</p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Neonatal to Adult ICU
                                        ventilator with&nbsp;high definition&nbsp;17.3” touchscreen</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Intuitive user interface</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Adaptive Ventilation Mode
                                    </li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">High Flow Oxygen Therapy</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Advanced NIV features</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Lung Recruitment Tool</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Minimum of 3 hours battery
                                        capacity</li>
                                </ul>
                                <p>&nbsp;</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="bellavista_1000_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">bellavista™ 1000 Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_bellavista_1000" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_1000/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_bellavista_1000"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_bellavista_1000" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>bellavista™ 1000 Ventilator</h3>
                                <p>bellavista™ offers adult through neonatal support with a powerful turbine, highly
                                    configurable user interface and lung protective features. This next-generation
                                    ventilator combines cutting-edge technology to simplify clinical practice and
                                    support daily challenges across care settings. This new ventilator offers efficient
                                    ventilation and lung protection that’s focused on:
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Minimizing respiratory
                                        distress through <strong>advanced synchronization</strong></li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Reduced workload for
                                        clinicians through monitoring features like <strong>AnimatedLung</strong> and
                                        <strong>VentSummary</strong>
                                    </li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Versatility with modes of
                                        ventilation to support <strong>adult through neonatal patients&nbsp;</strong>
                                    </li>
                                </ul>
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>&nbsp;<strong>Performance</strong><br>State of the art technology with streamlined
                                    hardware
                                    that’s compact, powerful and durable. Offering robust performance with peak flows up
                                    to 260 L/min. Software intelligence that’s clinically proven and highly
                                    responsive.<br><br><strong>Flexibility</strong><br>User-centric design that’s as
                                    customizable, navigable and intuitive as using a smartphone. Compact hardware allows
                                    the user to ventilate on the go during intra-hospital transport with 4-hour battery
                                    life and easy-steer transport cart.</p>
                                <p>&nbsp;<strong>Value</strong><br>Configurable to meet the needs of any clinical
                                    practice.<br>Simplified, preventive maintenance for a low cost of ownership.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="bellavista_neo_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">bellavista™ neo Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_bellavista_neo" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_neo/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_neo/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista_neo/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_bellavista_neo"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_bellavista_neo" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>bellavista™ neo Ventilators</h3>
                                <p>The bellavista™ neo is a neonatal ventilator dedicated to the NICU. Artema has an
                                    unwavering determination to develop dependable solutions that are easy to use and
                                    designed with precision and reliability to support neonates. The bellavista neo with
                                    its best-in-class NIV performance and flexibility across key ventilation modalities
                                    from conventional to nCPAP to high flow nasal cannula, bellavista meets the unique
                                    and essential needs of babies 10kg. Now, our healthcare providers can have peace of
                                    mind and support these babies through their first weeks of life so they can grow
                                    up strong, healthy and full of hope. </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>Intuitive 13.3 inches&nbsp;or 17.3-inch&nbsp;graphical user interface</li>
                                    <li>nCPAP and nIPPV with choice of pressure or flow-based ventilation</li>
                                    <li>High Flow Oxygen Therapy with flow up to 50 l/min</li>
                                    <li>Measurement of continuous bi-directional patient airflow and airway pressure
                                        with the proximal flow sensor</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="ltv2_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">LTV2™ Series Ventilators</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_ltv2" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv2/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv2/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv2/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_ltv2"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button" data-target="#carousel_ltv2"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>LTV2™ Series Ventilators</h3>
                                <p>Over the years, we have enhanced our LTV™ ventilators with a series of line
                                    extensions and improvements. Decades later, the LTV has established a reputation of
                                    reliability, versatility, and durability. With our new LTV2™ 2200 and LTV2 2150
                                    models, we continue to innovate by providing more capabilities, higher performance,
                                    and greater portability. Plus, our LTV2 ventilators have an easy-to-use interface,
                                    making it simple to use for clinicians. </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>Turbine technology eliminates the need for a high-pressure air source</li>
                                    <li>Oxygen resource management tool reduces oxygen consumption * 2200 model only
                                    </li>
                                    <li>Enhanced patient comfort and care with flow trigger and internal PEEP
                                        compensation</li>
                                    <li>Optimization trial settings</li>
                                    <li>Versatility with highly customizable settings to support patient success</li>
                                    <li>Hot swappable battery</li>
                                    <li>Low cost of ownership</li>
                                    <li>Data output capabilities</li>
                                    <li>NPPV enhancements</li>
                                    <li>Sigh breath for more natural breathing</li>
                                    <li>Improved power capabilities</li>
                                    <li>Institutional use and for intra-hospital transport</li>
                                    <li>Easy to read displays</li>
                                    <li>Comprehensive monitoring</li>
                                    <li>Supports invasive and non-invasive applications</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="avea_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">AVEA™ CVS Ventilation System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_avea" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/avea/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/avea/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/avea/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_avea"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button" data-target="#carousel_avea"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>AVEA™ CVS Ventilation System</h3>
                                <p>For clinicians and administrators in the acute care environment, the Avea™ CVS is a
                                    comprehensive neonatal through adult ventilation system with the complete package of
                                    all advanced features and maneuvers in one device. It helps empower clinicians at
                                    the bedside to improve patient outcomes and decrease costs-of-care, while the
                                    Respiratory Knowledge Portal receives and processes data, converting it to
                                    actionable insights to help clinicians improve respiratory care processes.</p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Neonatal, pediatric and adult
                                        capable</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Invasive and Non-invasive
                                        Ventilation (including Infant nCPAP and nIMV )</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Active exhalation valve
                                        promotes ventilator synchrony and comfort</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Internal battery provides up
                                        to 30 minutes of power</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Internal compressor/ air
                                        source &nbsp;(runs on DC/ battery&nbsp;power)</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="bellavista_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">bellavista ™ 1000 select Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_bellavista" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/bellavista/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_bellavista"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_bellavista" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>bellavista ™ 1000 select Ventilator</h3>
                                <p>With exceptional leak compensation and trigger algorithms, the bellavista™ 1000
                                    select goes beyond standard non-invasive (NIV) ventilation and supports patients
                                    through the continuum of care whether it’s HFOT, NIV or invasive ventilation, all in
                                    one device.

                                    The bellavista 1000 select offers a full spectrum of high-performance features to
                                    maximize patient comfort during non-invasive & invasive ventilation including
                                    advanced synchronization tools such as auto.sync, auto.rise and auto.leak as well as
                                    TargetVent. </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>ICU ventilator with 13.3-inch touchscreen</li>
                                    <li>Expanded non-invasive functions</li>
                                    <li>TargetVent</li>
                                    <li>Data Communication*</li>
                                    <li>Integrated Pneumatic Nebulizer*</li>
                                    <li>Lung Mechanics*</li>
                                    <li>High Flow Oxygen Therapy*</li>
                                    <li>Minimum four hours of battery life</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="revel_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">ReVel™ Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_revel" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/revel/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/revel/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/revel/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_revel"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_revel" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>ReVel™ Ventilator</h3>
                                <p>The Artema ReVel Ventilator is a portable ventilator offering both pediatric and
                                    adult patients in emergency transport for patients who weigh a minimum of 5 kg (11
                                    lbs) It is suitable for service in home-care, hospital and transport environments as
                                    a source of continuous or intermittent positive pressure ventilation support,
                                    delivering invasive or non-invasive therapy. It has automatic leak compensation of
                                    up to 30 lpm to meet the patient’s flow demand and comfort needs. </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>Supports pediatric and adult patients in emergency transport</li>
                                    <li>Supports both non-invasive and invasive</li>
                                    <li>Suitable for service in home-care, hospital and transport environments&nbsp;
                                    </li>
                                    <li>4-hour internal hot-swappable battery</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="a_modal" tabindex="-1" role="dialog" aria-labelledby="myModalTitle"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">3100A/B HFOV Ventilators</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_a" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/3100a/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/3100a/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/3100a/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_a"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button" data-target="#carousel_a"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>3100A/B HFOV Ventilators</h3>
                                <p>The 3100 series High Frequency Oscillatory Ventilators (HFOV) are proven for
                                    intervening in treating respiratory failure in neonates and ARDS in pediatric and
                                    adult patients. Using lung protective tools, you can apply continuous distending
                                    pressure and superimpose minimal pressure and volume swings to inflate the lung, and
                                    avoid respiratory failure. As shown in numerous clinical and peer-reviewed studies,
                                    the 3100 series ventilators help enhance patient care for critically injured
                                    patients. </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>Lower hospital cost&nbsp;</li>
                                    <li>As little as two days on HFOV before extubation</li>
                                    <li>Decreased duration of oxygen therapy&nbsp;</li>
                                    <li>Decreased nCPAP duration&nbsp;</li>
                                    <li>Decreased chronic lung disease (CLD)</li>
                                    <li>Discharge up to 24 days earlier</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vyntus_one_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Vyntus™ ONE Pulmonary Function System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vyntus_one" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_one/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_one/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_one/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vyntus_one"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_vyntus_one" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Vyntus™ ONE Pulmonary Function System</h3>
                                <p>Designed to be hassle-free for clinicians and friendly for patients, Vytnus™ ONE is
                                    incredibly capable with a modular design for an impressive array of features. Tests
                                    are more accurate, less intrusive and less stressful for patients.

                                    Vyntus™ ONE offers complete pulmonary function testing such as spirometry, DLCO,
                                    nitrogen washout lung volumes, LCI and MIP/MEP. It can be expanded to do
                                    cardiopulmonary stress testing, creating a single device at a fraction of the
                                    footprint.

                                    Vyntus™ ONE can be configured to accommodate any medical center's needs. Visit our
                                    Knowledge Base and learn how the latest SentrySuite software helps you achieve the
                                    best possible results according to the latest ATS/ERS 2019 Spirometry guidelines.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Modular design with 3
                                        configuration options</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Validated, simple hygiene and
                                        maintenance routines</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Factory Calibrated,
                                        Ultrasonic Flow Sensor with Double Shot Technology</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Meets latest ATS/ERS DLCO
                                        guidelines</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Innovative eDemand valve
                                        requiring less patient effort</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Tool free
                                        O<sub>2</sub>&nbsp;cell exchange</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Mobile version for PFT
                                        testing outside the lab</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vyntus_body_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Vyntus™ body Pulmonary Function System</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vyntus_body" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_body/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_body/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_body/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vyntus_body"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_vyntus_body" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Vyntus™ ONE Pulmonary Function System</h3>
                                <p>People come in all shapes and sizes, so we designed Vyntus™ BODY to accommodate most
                                    patients without increasing the cabin footprint. Many enhancements were incorporated
                                    to make Vyntus™ BODY accessible and user-friendly for both patients and technicians.

                                    Vyntus™ BODY employs much of the same breakthrough technology found in the Vyntus™
                                    ONE, but with a redesigned breathing circuit and our new Ultrasonic Sensor
                                    Technology. In addition, Vyntus™ BODY is enhanced with additional innovation such as
                                    digital pressure compensation, which helps to reduce environmental influences and
                                    improves measurement accuracy
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <ul>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">1110L Cabin Volume&nbsp;
                                        </li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Reinforced bench
                                            supporting up to 551 lbs</li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Less than 3" step-in
                                            clearance for easier patient transfer</li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Flexible telescoping arm
                                            that extends 25" outside the cabin when needed</li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Prominent grab bar to
                                            assist in safe patient entry and exit</li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Three frequency
                                            calibration adapting to different breathing rates</li>
                                        <li data-gc-list-depth="1" data-gc-list-style="bullet">Factory calibrated
                                            Ultrasonic Flow Sensor Technology</li>
                                    </ul>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vyntus_cpx_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Vyntus™ CPX Metabolic Cart</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vyntus_cpx" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_cpx/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_cpx/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_cpx/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vyntus_cpx"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_vyntus_cpx" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Vyntus™ CPX Metabolic Cart</h3>
                                <p>Performing CPET tests can be complex and difficult, especially after peripheral
                                    devices are added. Vyntus™ CPX stands out from all other metabolic carts, as many
                                    new features now make CPET testing easy to learn and perform.

                                    Vyntus™ CPX has taken the hassle out of CPET testing by integrating hardware and
                                    software peripherals, utilizing pre-exercise hardware and software checks,
                                    automating flow sensor calibration, and incorporating software that actually helps
                                    guide users through performing the best test possible. Test completed? The Vyaire
                                    software platform can also assist with data cleanup and assessment.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Gas analyzer technology
                                        improvements – 75ms response time and a unique&nbsp;“Tool-free“
                                        O<sub>2</sub><span>&nbsp;fuel cell change </span></li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Proven Digital Volume
                                        Transducer (DVT) flow sensor technology provides accurate and reliable
                                        flow/volume measurements in the complete range of low-to-high flow</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Interfaces seamlessly with
                                        numerous ECGs for comprehensive CPET testing on a single curved wide screen,
                                        which we call <em>Big Cinema</em>.</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Automated volume calibration
                                        ensures consistency, saves time and hassle</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">On-board pulse oximetry with
                                        finger, ear-clip and forehead sensors</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Powered by SentrySuite™ with
                                        cues and guidance during measurement and post-test workflow to help standardize
                                        evaluations and reduce time to results</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Smart tools automate pre-test
                                        setup and provide timed cues &amp; guidance for events required during the test
                                        (e.g.: blood pressure, RPE signaling, exercise flow volume loops, etc.)</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="infant_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Infant Flow™ SiPAP</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_infant" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/infant/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/infant/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/infant/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_infant"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_infant" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Infant Flow™ SiPAP</h3>
                                <p>For over two decades, the Infant Flow™ nCPAP system has delivered gentle respiratory
                                    support to thousands of neonates worldwide. The system, combined with the patented
                                    variable flow generator, provides NPPV by offering nasal CPAP and Biphasic
                                    modalities. The system takes the work out of breathing, freeing precious calories to
                                    be used for growth and development.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul class="d4c1">
                                    <li>
                                        <p class="title">Lowest work of breathing<sup>1</sup></p>
                                    </li>
                                    <li>
                                        <p>Decrease the need for intubation by 78%<sup>2</sup></p>
                                    </li>
                                    <li>
                                        <p>40% less days on respiratory support in patients treated with BiPhasic
                                            mode<sup><span style="font-size: 12.5px;">3</span></sup></p>
                                    </li>
                                    <li>
                                        <p>A 47% decrease in required oxygen compared to conventional nCPAP<sup>4</sup>
                                        </p>
                                    </li>
                                    <li>
                                        <p>Compliant with U.S. National Patient Safety Goal (NPSG 06.01.01) for alarm
                                            safety<sup>5</sup></p>
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vyntus_walk_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Vyntus™ WALK Mobile Exercise Testing</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vyntus_walk" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_walk/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_walk/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_walk/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vyntus_walk"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_vyntus_walk" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Vyntus™ WALK Mobile Exercise Testing</h3>
                                <p>Vyntus™ WALK allows patients to perform an untethered six-minute walk test (6MWT) by
                                    wearing wireless sensors that communicate data to a technician-held tablet PC.

                                    The system is both patient- and technician-friendly and because we know a single
                                    sensor does not fit all clinical needs, comes with an array of easy-to-wear sensors.
                                    Because standardizing the complete testing process is critical to meaningful data
                                    for patient trending, Vyaire has integrated the complete ATS testing standards in
                                    the workflow-driven tablet software application.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Standardize testing to the
                                        recommended American Thoracic Society (ATS) 6MWT protocol, because consistent
                                        testing yields consistent data for comparison</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">The patient wears a wireless
                                        Bluetooth™ wrist pulse oximeter that allows them to freely move through the
                                        course, untethered</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Multiple oximetry sensors
                                        (finger, ear clip, forehead) come with each Vyntus™ WALK because not all
                                        patients are best-fit candidates for a finger probe</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">View real-time data
                                        graphically over time, or switch to the <em>Easy-View</em> mode with large
                                        numeric values for HR and SpO<sub>2</sub></li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Quality checks and built-in
                                        guidance throughout testing helps ensure the credibility of your data</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">There is more to a 6MWT than
                                        HR and SpO<sub>2</sub>, and Vyntus™ WALK lets you manually enter blood pressure,
                                        oxygen supply, oxygen supply type, rate of perceived exertion and Bode index for
                                        a more complete patient test</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Vyntus™ WALK can be run as a
                                        standalone device or the data can move in and out of SentrySuite™ software</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vyntus_sipro_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">Vyntus™ SPIRO PC Spirometer</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vyntus_sipro" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_sipro/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_sipro/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vyntus_sipro/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vyntus_sipro"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_vyntus_sipro" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>Vyntus™ SPIRO PC Spirometer</h3>
                                <p>The Vyntus™ SPIRO was born out of our obsession to perfect a spirometer that is
                                    easy-to-use and has the flexibility to provide accurate results for the general user
                                    and sophisticated labs. Vyntus™ SPIRO can be used as either a stationary or portable
                                    spirometer.

                                    Thousands of PFT labs depend every day on our proven, accurate and reliable
                                    pneumotach. Endorsed as the measurement device of choice by hundreds of
                                    publications, its excellent dynamic range effectively tests a broad population from
                                    small children to professional athletes.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">The pneumotach handle is
                                        lightweight and has a long cable to the computer, so patients and technicians
                                        can sit and/or stand comfortably</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">From a single screen, patient
                                        data can be entered, flow sensor calibrated, tests performed, QA checked, and
                                        patient data trended via&nbsp;<em>SentrySuite</em>™<em>
                                            360</em>&nbsp;<em>Guidance</em> provides real-time instructions on
                                        performing the test (quiet breathing, complete inspiration, blast out, complete
                                        inspiration) and includes both text and visual graphics</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet"><em>Quality
                                            Feedback</em>&nbsp;is shown directly on the screen for each maneuver based
                                        on quality check types according to ATS/ERS, NIOSH, and Office Spirometry
                                        standards</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Trending of current data to
                                        past visits is as easy as pressing a button!</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Software is designed for both
                                        pre/post testing as well as bronchial provocation testing</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">The pneumatach has been
                                        designed to work with the validated MicroGard™&nbsp;II bacterial/viral filter
                                        and is easy to disassemble and clean</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="micro_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">MicroGard™ II PFT Filter</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_micro" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/micro/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/micro/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/micro/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_micro"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_micro" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>MicroGard™ II PFT Filter</h3>
                                <p>MicroGard™ II filters provide an easy way to help ensure protection from
                                    cross-contamination which keeps both the patient and operator safe without
                                    compromising on system performance.

                                    MicroGard™ II filters are used with Vyntus™, Vmax MasterScreen, and Micro Medical
                                    PFT instrumentation.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>MicroGard™ II B has an integrated oval-shaped mouthpiece suitable for adult and
                                    pediatric use. The IIB kit includes an oval filter with nose clip. MicroGard™ II C
                                    has a round-shaped connector for use with special lung function mouthpieces, ideal
                                    for gas dilution and body plethysmographic measurements. The II C kit includes a
                                    round filter with nose clip and rubber mouthpiece.</p>
                                <ul>
                                    <li>99.999% viral and bacterial efficiency against cross contamination (Nelson Test
                                        Report 10003754)</li>
                                    <li>Low resistance to airflow</li>
                                    <li>Minimal dead space (55mL)</li>
                                    <li>Filter housing and filter fleece tested for biocompatibility</li>
                                    <li>Three filter configuration versions, two package sizes</li>
                                    <li>Validated for compliance with the complete Vyaire Respiratory Diagnostics
                                        product line</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="vela_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">VELA™ Ventilator</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_vela" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vela/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vela/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/vela/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_vela"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button" data-target="#carousel_vela"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>VELA™ Ventilator</h3>
                                <p>The VELA™ Ventilator is a full-function invasive and noninvasive ventilator that
                                    provides high-performance tools to support patients across the continuum of care.
                                    Available in three models, the VELA Ventilator offers a variety of features that can
                                    be customized to your specific ventilation and budgetary needs.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Intuitive user interface
                                        facilitates ease of use.</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Operates independent of air
                                        sources for greater flexibility.</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">No scheduled maintenance of
                                        the turbine maintains a low cost of ownership.</li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="ltv_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">LTV™ Series Ventilators</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_ltv" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/ltv/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_ltv"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button" data-target="#carousel_ltv"
                                    data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>LTV™ Series Ventilatorsr</h3>
                                <p>The LTV is specifically designed for the dynamic environment of portable ventilation,
                                    whether in-home care, intra-hospital transport or emergency care settings. The
                                    lightweight, slim profile design with hot-swappable batteries provides the necessary
                                    tools to meet the demands of patients on the move that weigh at least 5 kg.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li>Easy transition and operation allows patients to transfer from the hospital to
                                        home</li>
                                    <li>Turbine technology eliminates the need for a high-pressure air source</li>
                                    <li>Oxygen resource management tool reduces oxygen consumption</li>
                                    <li>Enhanced patient comfort and care with flow trigger and internal PEEP
                                        compensation</li>
                                    <li>Optimizable trial settings</li>
                                    <li>Versatility with highly customizable settings to support patient success</li>
                                    <li>Single solution for any patient weighing 5 kg or more</li>
                                    <li>Quick patient ventilation</li>
                                    <li>Supports invasive and non-invasive applications</li>
                                    <li>Portable Impact resistant construction</li>
                                    <li>Easy to read displays</li>
                                    <li>Comprehensive monitoring</li>
                                    <li>Compact, deployable design supports invasive and non-invasive applications&nbsp;
                                    </li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    <div class="modal fade bd-example-modal-xl" id="cardio_modal" tabindex="-1" role="dialog"
        aria-labelledby="myModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="myModalTitle">CardioSoft ECG</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-4">
                                <div id="carousel_cardio" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        <div class="carousel-item active" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/cardio/4.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/cardio/2.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                        <div class="carousel-item" data-interval="2000">
                                            <img src="{{asset('images/respiratory_images/cardio/3.webp')}}"
                                                class="d-block w-100" alt="...">
                                        </div>
                                    </div>
                                </div>
                                <button class="btn btn-secondary" type="button" data-target="#carousel_cardio"
                                    data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Previous</span> -->
                                </button>
                                <button class="btn btn-secondary float-right" type="button"
                                    data-target="#carousel_cardio" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <!-- <span class="visually-hidden">Next</span> -->
                                </button>
                            </div>
                            <div class="col-md-6">
                                <h3>CardioSoft ECG</h3>
                                <p>CardioSoft is a CAM-USB hardware, PC-based 12-Lead ECG system that is the perfect
                                    extension of your metabolic cart, providing you with clinical excellence for
                                    complete cardiopulmonary exercise testing (CPET).

                                    The CardioSoft ECG system is a comprehensive system for precise acquisition,
                                    evaluation and reporting of your ECG data, but it is also surprisingly easy to use.
                                    Everything is on the main testing screen and quickly accessible with a simple mouse
                                    click.
                                </p>
                                <h5>&nbsp;Features & Benefits</h5>
                                <p>
                                <ul>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Exchangeable lead wires</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Provides continuous storage
                                        of up to 12 leads for safety and color-coded arrhythmias for easy viewing</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Monitors all 12 leads and
                                        displays the single lead with largest ST segment change from baseline directly
                                        on the screen for easy viewing</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">Relevant data, including
                                        patient demographics, is shared between CardioSoft and our Vyntus<sup>™</sup><b>
                                        </b>CPX to reduce the chance of errors by duplicate entries</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">The cubic spline and finite
                                        residual filtering of CardioSoft provides baseline correction and artifact
                                        resolution, with ST measurements</li>
                                    <li data-gc-list-depth="1" data-gc-list-style="bullet">The comprehensive interface
                                        encompasses a wide range of treadmills and cycle ergometers sold by
                                        Vyaire<sup>™</sup></li>
                                </ul>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- modal end -->
    @include('client_layouts.footer')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script type="text/javascript" src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{asset('js/custom.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/parallax.min.js')}}"></script>
    <script type="text/javascript">
    $(function() {
        $(document).scroll(function() {
            var $nav = $(".fixed-top");
            $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
        });
    });
    </script>
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
    <script type="text/javascript" src="{{asset('js/multislider.js')}}"></script>
    <script>
    $('#mixedSlider').multislider({
        duration: 750,
        interval: 3000
    });
    </script>
</body>

</html>