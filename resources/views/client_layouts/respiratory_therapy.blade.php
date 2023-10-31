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
                <div class="row mt-3">
                    <div class="col-md-2">
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
                    <div class="col-md-2">
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
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{asset('images/respiratory_images/bellavista_neo/1.webp')}}"
                                class="card-img-top">
                            <div class="card-body" style="background-color:#671B1D;color: white;">
                                <h5 class="card-title">bellavista™ neo Ventilators</h5>
                                <p class="card-text"></p>
                                <a href="#" data-toggle="modal" data-target="#bellavista_neo_modal"
                                    style="margin-top: 100px;" class="learn-more-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{asset('images/respiratory_images/ltv2/1.webp')}}" class="card-img-top">
                            <div class="card-body" style="background-color:#671B1D;color: white;">
                                <h5 class="card-title">LTV2™ Series Ventilators</h5>
                                <p class="card-text"></p>
                                <a href="#" data-toggle="modal" data-target="#ltv2_modal" style="margin-top: 100px;"
                                    class="learn-more-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <div class="card">
                            <img src="{{asset('images/respiratory_images/avea/1.webp')}}" class="card-img-top">
                            <div class="card-body" style="background-color:#671B1D;color: white;">
                                <h5 class="card-title">AVEA™ CVS Ventilation System</h5>
                                <p class="card-text">A comprehensive neonatal through adult ventilation system.</p>
                                <a href="#" data-toggle="modal" data-target="#avea_modal" class="learn-more-btn">Learn
                                    More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2"></div>
                    <div class="col-md-2 mt-4">
                        <div class="card">
                            <img src="{{asset('images/respiratory_images/bellavista/1.webp')}}" class="card-img-top">
                            <div class="card-body" style="background-color:#671B1D;color: white;">
                                <h5 class="card-title">bellavista ™ 1000 select Ventilator</h5>
                                <p class="card-text"></p>
                                <a href="#" data-toggle="modal" data-target="#bellavista_modal"
                                    style="margin-top: 100px;" class="learn-more-btn">Learn More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2 mt-4">
                        <div class="card">
                            <img src="{{asset('images/respiratory_images/revel/1.webp')}}" class="card-img-top">
                            <div class="card-body" style="background-color:#671B1D;color: white;">
                                <h5 class="card-title">ReVel™ Ventilator</h5>
                                <p class="card-text"></p>
                                <a href="#" data-toggle="modal" data-target="#revel_modal" style="margin-top: 120px;"
                                    class="learn-more-btn">Learn More</a>
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