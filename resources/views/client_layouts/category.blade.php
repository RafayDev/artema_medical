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
    <div style="margin-top:110px">
        <div class="container-fluid">

            <!-- Subcategory section start -->
            <section class=" subcategory ">
                <!-- <img src="assets/images/Sub-Categories.png" class="img-fluid"> -->
                <div
                    style="display: flex;flex-direction: column;background-image: url('{{asset('images/enner-banner.jpg')}}');height: 500px;background-size: cover;background-repeat: no-repeat;background-position: center;">
                    <div class="search-box">
                        <div class="container-fluid">

                            <div class="row search-prod text-center ">
                                <h1 class="col-md-12 alegreya  carrot-clr">Product Search</h1>
                                <div class="col-md-12">
                                    <form action="#" method="post" class="d-flex flex-row justify-content-center">
                                        <input type="text" class="form-control search-control" required=""
                                            name="search_value" placeholder="Search">
                                        @csrf <button style="border: none;background: none;" type="submit"
                                            class="mb-2"><img src="https://www.technimen.com/images/search-ico.png"
                                                class="img-fluid"></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- sidemenu -->
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

                        </ul>
                    </div>

                    <div class="col-md-9">

                        <div class="row">
                            <div class="col-md-12">
                                <h1 class="alegreya">{{$category_by_id->category_name}}</h1>
                            </div>
                            @foreach($category_by_id->subcategories as $subcategory)
                            <div class="col-md-4">
                                <a style="color: black"
                                    href="{{url('/')}}/products/{{$subcategory->id}}?{{$subcategory->sub_category_slug}}">
                                    <h4 class="subcat-box">{{$subcategory->sub_category_name}}</h4>
                                </a>
                            </div>
                            @endforeach

                        </div>
                    </div>
                </div>
                <!-- end sidemenu -->


            </section>
            <!-- Subcategory section end -->
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