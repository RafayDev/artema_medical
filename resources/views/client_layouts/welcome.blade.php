<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artema Medical - Home</title>
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
                    width="450px"></a>
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
                        </div>
                    </li>
                    <li class="nav-item">
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
                    </li>
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
    <!-- Content Here -->
    <div style="margin-top:110px">
        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" data-interval="5000">
            <div class="carousel-inner">

                <div class="carousel-item  active">
                    <img src="{{asset('images/13.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/3.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/6.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/general-instuments.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/10.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/7.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/12.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/9.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/11.jpg')}}" class="img-fluid d-block w-100"
                        width="100%">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <!-- header end  -->
        <!-- Aboutus section start -->
        <section class="text-center about">
            <div class="container">
                <h1 class="alegreya">INSTRUMENTS FOR SURGICAL PROCEDURES</h1>
                <p class="alegreya">Artema Medical (Pvt). Ltd., was established in 1970 as Artema Corporation. This
                    institution was conceived under the leadership of the late Agha Kamal Haider. His goal was to
                    provide the health care market with specialized, hand crafted surgical instruments designed to meet
                    the highest standard in quality.</p>
                <a href="{{url('/')}}/about"><button style="padding: 2px 6px;"
                        class="btn btn-outline-danger"><i class="fa fa-plus"></i></button></a>
            </div>

        </section>
        <!-- Aboutus section end -->

        <!-- Events & Exhibition starts -->
        <section class="news">
            <div class="container">
                <h2 class="alegreya" style="text-align: center;">EVENTS & EXHIBITIONS</h2>
                <div id="mixedSlider">
                    <div class="MS-content">

                    </div>
                    <!-- <div class="MS-controls">
                        <button class="MS-left"><i class="fa fa-angle-left" aria-hidden="true"></i></button>
                        <button class="MS-right"><i class="fa fa-angle-right" aria-hidden="true"></i></button>
                    </div> -->
                </div>



            </div>
        </section>
        <!-- Events & Exhibition ends -->
        <!-- Parrallex Wrapper starts -->
        <section class="parallax-section d-none d-lg-block">
            <a href="{{url('/')}}/category/1?General-Instrumentation">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/5.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/10?Needle-Holders">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/15.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/5?Dental-Instruments">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/16.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/4?Scissors">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/20.png')}}"></div>
            </a>
            <a href="{{url('/')}}/category/6?ENT-Instruments">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/2.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/2?Orthopedic-Instruments">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/4.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/7?Cardiovascular">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/1.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/8?Gynaecology">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/17.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/3?Podiarty-Instruments">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/18.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/9?Plastic-Surgery">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/19.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/11?Surgical-Sets">
                <div class="parallax-window" data-parallax="scroll"
                    data-image-src="{{asset('images/enner-banner.jpg')}}"></div>
            </a>

        </section>
        <!-- Parrallex Wrapper ends -->
        <section class="d-md-none d-lg-none">
            <a href="{{url('/')}}/category/1?general-instrumentation">
                <img src="{{asset('images/5.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/10?needle-holders">
                <img src="{{asset('images/15.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/5?dental-instruments">
                <img src="{{asset('images/16.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/4?scissors">
                <img src="{{asset('images/20.png')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/6?ent-instruments">
                <img src="{{asset('images/2.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/2?orthopedic-instruments">
                <img src="{{asset('images/4.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/7?cardiovascular">
                <img src="{{asset('images/1.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/8?gynaecology">
                <img src="{{asset('images/17.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/3?podiarty-instruments">
                <img src="{{asset('images/18.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/9?plastic-surgery">
                <img src="{{asset('images/19.jpg')}}" class="img-fluid">
            </a>
            <a href="{{url('/')}}/category/11?surgical-sets">
                <img src="{{asset('images/enner-banner.jpg')}}" class="img-fluid">
            </a>
        </section>
        <!-- newsletter starts -->
        <section class="newsletter space-up ">
            <div class="container text-center" style="max-width: 500px">
                <h4><img src="{{asset('images/newletter.png')}}">
                    <stong>Artema Medical</stong> <small>NEWS LETTER</small>
                </h4>
            </div>
        </section>
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