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
    <link rel="stylesheet" type="text/css" href="{{asset('css/testimonial.css')}}">
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
            <a class="navbar-brand" href="{{url('/')}}"><img src="{{asset('images/logo.png')}}" class="img-fluid" style="margin-left: 20px;"
                    width="400px"></a>
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
                    <img src="{{asset('images/13.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/3.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/6.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/general-instuments.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/10.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/7.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/12.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/9.jpg')}}" class="img-fluid d-block w-100" width="100%">
                </div>

                <div class="carousel-item ">
                    <img src="{{asset('images/11.jpg')}}" class="img-fluid d-block w-100" width="100%">
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
        <!-- Our Partners Section  -->
        <section class="text-center mt-5">
            <h1 class="alegreya">OUR PARTNERS</h1>
            <div class="container mt-3">
                <div class="row">
                    <div class="col-md-1"></div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/4.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/CSU.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/JBM-Website-Logo.jpg')}}" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/kls.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-2">
                        <img src="{{asset('images/partners/Synergy-Logo.png')}}" class="img-fluid">
                    </div>
                    <div class="col-md-1"></div>
                </div>
            </div>
        </section>
        <!-- End of our Partner Section -->
        <!-- Aboutus section start -->
        <section class="text-center about mt-5">
            <div class="container">
                <h1 class="alegreya">INSTRUMENTS FOR SURGICAL PROCEDURES</h1>
                <p class="alegreya">Artema Medical is on a mission to make the world a better place in the surgical tool
                    industry as well as being an eco-friendly organization. Our dedicated team members are always
                    working under policies that bring greenery to the Earth. It is the sole responsibility of the people
                    to take care of the environment and stay away from such activities that are not beneficial to it. We
                    are playing our part in the best possible manner.</p>
                <a href="{{url('/')}}/about"><button style="padding: 2px 6px;" class="btn btn-outline-danger"><i
                            class="fa fa-plus"></i></button></a>
            </div>

        </section>
        <!-- Aboutus section end -->
        <!-- Client Section -->

        <!-- End of Client Section -->
        <!-- Testimonal section start -->
        <section class="testimonial text-center mb-5">
            <div class="container">

                <div class="heading white-heading">
                    Testimonial
                </div>
                <div id="testimonial4"
                    class="carousel slide testimonial4_indicators testimonial4_control_button thumb_scroll_x swipe_x"
                    data-ride="carousel" data-pause="hover" data-interval="5000" data-duration="2000">

                    <div class="carousel-inner" role="listbox">
                        <div class="carousel-item active">
                            <div class="testimonial4_slide">
                                <img src="{{asset('images/testimonial_1.png')}}" class="img-circle img-responsive" />
                                <p> "Artema immediately comes to mind for ophthalmic instruments. Their products have
                                    always met our expectations, and we will keep choosing them in the future."</p>
                                <h4>Bryan DelaCerna</h4>
                                <h5>NVision Laser Eye Centers</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="{{asset('images/testimonial_2.png')}}" class="img-circle img-responsive" />
                                <p>"Whenever precision and reliability are paramount in medical instruments, my first
                                    thought is Artema. Their dedication to quality and innovation has never let us down.
                                    We trust in their products wholeheartedly, and they've become an integral partner in
                                    delivering outstanding patient care."</p>
                                <h4>Cindy Edrington</h4>
                                <h5>ASC Director. Thibodaux Laser & Surgery Center</h5>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="testimonial4_slide">
                                <img src="{{asset('images/testimonial_3.png')}}" class="img-circle img-responsive" />
                                <p>"We’ve been working with Artema Medical for quite a few years now and in all of that
                                    time we’ve never ordered an instrument that has let us or our surgeons down. We’ve
                                    been able to complete open shoulder trays and laminectomy trays with less expensive
                                    but high quality products and our doctors don’t notice a difference." </p>
                                <h4>Jennifer Chura</h4>
                                <h5>RCST, CIS, M.S. Midtown Surgery Center, New York</h5>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#testimonial4" data-slide="prev">
                        <span class="carousel-control-prev-icon"></span>
                    </a>
                    <a class="carousel-control-next" href="#testimonial4" data-slide="next">
                        <span class="carousel-control-next-icon"></span>
                    </a>
                </div>
            </div>
        </section>
        <!-- Testimonal section end -->
        <!-- Parrallex Wrapper starts -->
        <section class="parallax-section d-none d-lg-block mt-5">
            <a href="{{url('/')}}/category/1?General-Instrumentation">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/5.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/10?Needle-Holders">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/15.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/5?Dental-Instruments">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/16.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/4?Scissors">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/20.png')}}"></div>
            </a>
            <a href="{{url('/')}}/category/6?ENT-Instruments">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/2.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/2?Orthopedic-Instruments">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/4.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/7?Cardiovascular">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/1.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/8?Gynaecology">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/17.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/3?Podiarty-Instruments">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/18.jpg')}}"></div>
            </a>
            <a href="{{url('/')}}/category/9?Plastic-Surgery">
                <div class="parallax-window" data-parallax="scroll" data-image-src="{{asset('images/19.jpg')}}"></div>
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
        $(document).ready(function() {
            $('.customer-logos').slick({
                slidesToShow: 6,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 1500,
                arrows: false,
                dots: false,
                pauseOnHover: false,
                responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 4
                    }
                }, {
                    breakpoint: 520,
                    settings: {
                        slidesToShow: 3
                    }
                }]
            });
        });
        </script>
</body>

</html>