<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artema Medical - Contact Us</title>
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
    <div style="margin-top:110px; margin-bottom:50px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3527.876427573422!2d-82.64071052393186!3d27.84433581943502!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88c2e6a2b7855c1f%3A0x4e3e0f613f7708f7!2s7901%204th%20St%20N%2C%20St.%20Petersburg%2C%20FL%2033702%2C%20USA!5e0!3m2!1sen!2s!4v1698416808208!5m2!1sen!2s"
                        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
            <div class="row mt-3">
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="large-text-ho">Head Office</h1>
                        </div>
                    </div>
                    <div class="row contact-info">
                        <div class="col-md-12">
                            <p class="alegreya"><img src="{{asset('images/contact/1.png')}}"
                                    class="img-fluid">7901 4th St. N STE 10963,Saint Petersburg, Florida, 33702</p>
                        </div>
                        <div class="col-md-6 ">
                            <img src="{{asset('images/contact/2.png')}}" class="img-fluid float-left">
                            <p class="alegreya"> <strong class="uppercase">General Enquires</strong> <br>
                                info@artemamedical.com</p>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('images/contact/3.png')}}" class="img-fluid float-left">
                            <p class="alegreya"><strong class="uppercase">Telephone</strong> <br>+ 1 (210) 468 7779
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 contact">
                    <form class="contact-form" action="#" method="post">
                        <div class="row">
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="First name"
                                    name="fname">
                            </div>
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="Last name"
                                    name="lname">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="City" name="city">
                            </div>
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="Country"
                                    name="country">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="col">
                                <input type="text" required="" class="form-control" placeholder="Phone" name="phone">
                            </div>
                        </div>

                        <div class="row">
                            <div class="col">
                                <textarea class="form-control" required="" rows="6" placeholder="Message"
                                    name="msg"></textarea>
                            </div>
                        </div>
                        <input type="hidden" name="_token" value="5zqOKCtShJAUq2TIjDkhmK5faBGihHVP5nesVP3p">
                        <div class="row">
                            <div class="col">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1"
                                        required="">
                                    <label class="form-check-label alegreya" for="defaultCheck1">
                                        I agree that my personal information is used in accordance with the
                                        <strong>Privacy</strong> and <strong>Cookie Policy</strong></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                                <button
                                    style="background-color: #671b1d; color: #f4e1e1; border: 2px solid #8a4545; padding: 10px 20px; font-size: 16px; font-family: 'Arial', sans-serif; border-radius: 4px; cursor: pointer; transition: background-color 0.3s ease;"
                                    onmouseover="this.style.backgroundColor='#8a4545';"
                                    onmouseout="this.style.backgroundColor='#671b1d';" type="submit">Send</button>

                            </div>
                        </div>
                    </form>
                </div>
            </div>
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