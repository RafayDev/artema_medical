<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artema Medical - About Us</title>
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

    @import url('https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap');

    /* Importing the Raleway font */
    /* Styles for the "About Us" section */
    #about-us-section {
        background: linear-gradient(45deg, #671b1d, #9c292b);
        /* Gradient background */
        height: 400px;
        /* Adjust the height as needed */
        display: flex;
        align-items: center;
        /* Vertically centers the content */
        justify-content: center;
        /* Horizontally centers the content */
        color: white;
        /* Text color */
        font-size: 48px;
        /* Bigger font size */
        font-family: 'Raleway', sans-serif;
        /* Raleway font */
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
    <div style="margin-top:110px">
        <section class="mb-5">
            <div id="about-us-section">
                About Us
            </div>
            <div class="container mt-4">
                <div class="row mb-5">
                    <div class="col-md-2">
                        <h1><i class="fa fa-quote-left"></i></h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-8">
                    <h2>Message From The CEO</h2>
                        <p style="font-size:18px; margin-top:15px;"> <b>Dear Valued Customers and Partners,</b><br>
                            I am delighted to extend my warmest greetings as the CEO of ARTEMA GROUP
                            OF COMPANIES and to introduce you to our latest catalogue. This catalog is a
                            testament o our unwavering commitment to delivering exceptional products
                            and services to meet your needs.
                            At ARTEMA, we have always strived for excellence, innovation, and customer
                            satisfaction. Our team of dedicated professionals has worked tirelessly to
                            curate a selection of products and services that reflect our passion for
                            quality and progress.
                            As you explore these pages, you will discover a wide range of offerings, each
                            designed with your success and satisfaction in mind. We understand that
                            our success is deeply intertwined with yours, and it is our mission to provide
                            you with the tools and solutions you need to thrive.
                            I want to express my gratitude to our loyal customers, dedicated employees,
                            and valued partners who have been instrumental in our journey of growth
                            and success. Your trust and support inspire us to push the boundaries of
                            what is possible and to continuously raise the bar.
                            At ARTEMA, we embrace the future with optimism and excitement. We are
                            committed to innovation, sustainability, and building lasting relationships.
                            Together, we can achieve remarkable milestones and create a brighter future.
                            Thank you for choosing ARTEMA GROUP OF COMPANIES as your partner
                            on this journey. We look forward to serving you and exceeding your expectations.
                            With utmost appreciation,<br>
                            <b>Saad Khan</b>
                        </p>
                    </div>
                    <div class="col-md-4">
                    <img src="{{asset('images/about/3.jpeg')}}" class="img-fluid" style="margin-top: 20px;">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-6">
                        <h2>Our Guiding Principles</h2>
                        <p style="font-size:18px; margin-top:15px;">Artema Medical is on a mission to make the world a
                            better place in the
                            surgical tool industry
                            as well as being an eco-friendly organization. Our dedicated team members are always working
                            under policies that bring greenery to the Earth.<br>
                            It is the sole responsibility of the people to take care of the environment and stay away
                            from such activities that are not beneficial to it. We are playing our part in the best
                            possible manner.</p>
                        <h2>Artema's Vision</h2>
                        <p style="font-size:18px; margin-top:15px;">We fulfil that duty every day by dedicating all of
                            our enthusiasm, expertise, and experience to enhancing lives through exceptional and
                            cutting-edge technology that prioritises human life. We commit our efforts to the
                            environment, a better future, and those who rely on our technology anywhere in the
                            world.<br>

                            We fulfil that duty every day by dedicating all of our enthusiasm, expertise, and experience
                            to enhancing lives through exceptional and cutting-edge technology that prioritises human
                            life. We commit our efforts to the environment, a better future, and those who rely on our
                            technology anywhere in the world.</p>
                            
                    </div>
                    <div class="col-md-6">
                        <img src="{{asset('images/about/1.jpg')}}" class="img-fluid" style="margin-top: 20px;">
                        <img src="{{asset('images/about/2.jpg')}}" class="img-fluid" style="margin-top: 20px;">
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-2 mt-2">
                        <h1 class="float-right"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z" />
                            </svg></h1>
                    </div>
                    <div class="col-md-3 mt-3">
                        <h6>+ 1 (210) 468 7779</h6>
                        <h6>sales@artemamedical.com</h6>
                    </div>
                    <div class="col-md-1 mt-2">
                        <h1 class="float-left"><svg xmlns="http://www.w3.org/2000/svg" height="1em"
                                viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M408 120c0 54.6-73.1 151.9-105.2 192c-7.7 9.6-22 9.6-29.6 0C241.1 271.9 168 174.6 168 120C168 53.7 221.7 0 288 0s120 53.7 120 120zm8 80.4c3.5-6.9 6.7-13.8 9.6-20.6c.5-1.2 1-2.5 1.5-3.7l116-46.4C558.9 123.4 576 135 576 152V422.8c0 9.8-6 18.6-15.1 22.3L416 503V200.4zM137.6 138.3c2.4 14.1 7.2 28.3 12.8 41.5c2.9 6.8 6.1 13.7 9.6 20.6V451.8L32.9 502.7C17.1 509 0 497.4 0 480.4V209.6c0-9.8 6-18.6 15.1-22.3l122.6-49zM327.8 332c13.9-17.4 35.7-45.7 56.2-77V504.3L192 449.4V255c20.5 31.3 42.3 59.6 56.2 77c20.5 25.6 59.1 25.6 79.6 0zM288 152a40 40 0 1 0 0-80 40 40 0 1 0 0 80z" />
                            </svg></h1>
                    </div>
                    <div class="col-md-4 mt-3 text-left">
                        <h6>7901 4th St. N STE 10963,Saint Petersburg, Florida, 33702</h6>
                    </div>
                </div>
            </div>
        </section>

    </div>
    </div>
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