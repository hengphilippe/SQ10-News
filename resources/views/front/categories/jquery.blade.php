<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>WebMag HTML Template</title>

    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:700%7CNunito:300,600" rel="stylesheet">

    <link type="text/css" rel="stylesheet" href="{{ asset('css/front.css') }}" />




    <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body>

    <header id="header">

        @include('front.includes.header')

        <div class="page-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <ul class="page-header-breadcrumb">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            {{-- @foreach (Request::segments() as $segment)
                            <li>
                                <a href="">{{ end($segment) }}</a>
                            </li>
                                @endforeach --}}
                            <li>
                                {{ last(request()->segments()) }}
                            </li>
                        </ul>
                        <h1>{{ Str::upper(last(request()->segments())) }}</h1>
                    </div>
                </div>
            </div>
        </div>

    </header>


    <div class="section">

        <div class="container">

            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs
                                            Class</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects
                                            Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-6.jpg.pagespeed.ic.XqKLoKE85z.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid
                                            On The Backend Development Block!</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix visible-md visible-lg"></div>

                        <div class="col-md-12">
                            <div class="section-row">
                                <a href="#">
                                    <img class="img-responsive center-block"
                                        src="img/xad-2.jpg.pagespeed.ic.RB_ZDhAXxh.webp" alt="">
                                </a>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                            JQuery?</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Microsoft’s TypeScript Fills A
                                            Long-standing Void In JavaScript</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-3.jpg.pagespeed.ic.UjtolzGXxD.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Javascript : Prototype vs
                                            Class</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid
                                            On The Backend Development Block!</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12">
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive"
                                src="data:image/webp;base64,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"
                                alt="">
                        </a>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                    src="img/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                    src="img/xwidget-2.jpg.pagespeed.ic.cSUEAOhjjU.webp" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your
                                        Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                    src="img/xwidget-3.jpg.pagespeed.ic.5z-SP7IbT6.webp" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On
                                        The Backend Development Block!</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="blog-post.html"><img
                                    src="img/xwidget-4.jpg.pagespeed.ic.i3iWR0f20S.webp" alt=""></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                        Development Tools</a></h3>
                            </div>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Catagories</h2>
                        </div>
                        <div class="category-widget">
                            <ul>
                                <li><a href="#" class="cat-1">Web Design<span>340</span></a></li>
                                <li><a href="#" class="cat-2">JavaScript<span>74</span></a></li>
                                <li><a href="#" class="cat-4">JQuery<span>41</span></a></li>
                                <li><a href="#" class="cat-3">CSS<span>35</span></a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="tags-widget">
                            <ul>
                                <li><a href="#">Chrome</a></li>
                                <li><a href="#">CSS</a></li>
                                <li><a href="#">Tutorial</a></li>
                                <li><a href="#">Backend</a></li>
                                <li><a href="#">JQuery</a></li>
                                <li><a href="#">Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">JavaScript</a></li>
                                <li><a href="#">Website</a></li>
                            </ul>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Archive</h2>
                        </div>
                        <div class="archive-widget">
                            <ul>
                                <li><a href="#">Jan 2018</a></li>
                                <li><a href="#">Feb 2018</a></li>
                                <li><a href="#">Mar 2018</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>


    <footer id="footer">

        <div class="container">

            <div class="row">
                <div class="col-md-5">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href="index.html" class="logo"><img
                                    src="data:image/webp;base64,UklGRiQCAABXRUJQVlA4TBgCAAAvcUAEEH8gEEgC2l9xhUEZpIlI6DiQG23/2zYvk8F8msDGuctg52z/zwtAG4gbkKUzUKJxTqW8AekJqA2ccwA0gE+JZia/4g8JK0T0fwJWeaD1DiB8zFiSdkgk6S4YeQBrKx9gpAJ2d6r4AnMHCJUH3vuMH0ZRdIukF0VSDaNNq6uUpSrW+kqSrozqwHs5wLDBuI6dbABfHmOkPLCfYiTPGsn2Eg8YrurApJyhHVsVYJrSlwKgJZ2iNa2+CYDJNw9YFjK4yhnpBrhKOdBiJwd9BUCr0H4HLJ8FYGIytHYw0gCepE3jPTlwoDqpqzxmYN5BGGQJe5aK7Ke4Cp6oAWM5aVOHsMMyz/sbGdam5zDaUY1pbIU6YdSBmUpp/2u8P87EYViHsSQFJJLUy2MUyHfVsbZVYTGAuYrsSjGJx7DGsM7EgfHDKIoukvSiaKEaRv5s8ERnrLGKjFQ8ypOA6THeeyzzMK5jJxvA24G1r5FOWst3sK0KM5XS1gf8g25g3pGFVcHIfyJtuvJpK9VjLAeYxrC82YPWuzDINneMfFfyrK20xxyoccj09Qaw+Ohlm1mMVbGGaTu5voJDhr+awHhey7YsWts7eWuuPDCU05IuwyyG96oA+3Iy9WMswJXvqgewpQYj2TGEKgFbylsPoyi6RdKLoqmuH+mJfKutDmZ5iIkBugMsSdohkaSHuSPtq2GtrWJoT6Q7RQ=="
                                    alt=""></a>
                        </div>
                        <ul class="footer-nav">
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Advertisement</a></li>
                        </ul>
                        <div class="footer-copyright">
                            <span>&copy;
                                <script>
                                    document.write(new Date().getFullYear());
                                </script> All rights reserved | This template is made with <i
                                    class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com"
                                    target="_blank">Colorlib</a>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">About Us</h3>
                                <ul class="footer-links">
                                    <li><a href="about.html">About Us</a></li>
                                    <li><a href="#">Join Us</a></li>
                                    <li><a href="contact.html">Contacts</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="footer-widget">
                                <h3 class="footer-title">Catagories</h3>
                                <ul class="footer-links">
                                    <li><a href="category.html">Web Design</a></li>
                                    <li><a href="category.html">JavaScript</a></li>
                                    <li><a href="category.html">Css</a></li>
                                    <li><a href="category.html">Jquery</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="footer-widget">
                        <h3 class="footer-title">Join our Newsletter</h3>
                        <div class="footer-newsletter">
                            <form>
                                <input class="input" type="email" name="newsletter"
                                    placeholder="Enter your email">
                                <button class="newsletter-btn"><i class="fa fa-paper-plane"></i></button>
                            </form>
                        </div>
                        <ul class="footer-social">
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </footer>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script>
        eval(mod_pagespeed_15hy7ra_pu);
    </script>
    <script>
        eval(mod_pagespeed_RDDE5qW6SI);
    </script>

    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());


        gtag('config', 'UA-23581568-13');
    </script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597"
        integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A=="
        data-cf-beacon='{"rayId":"6b54f7813bb4c6d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}'
        crossorigin="anonymous"></script>
</body>

</html>
