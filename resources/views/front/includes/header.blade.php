<header id="header">

    <div id="nav">

        <div id="nav-fixed">
            <div class="container">

                <div class="nav-logo">
                    <a href="{{ url('/') }}" class="logo"><img
                            src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAASCAMAAACw93oVAAAAM1BMVEUAAAD///8oLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEhrMZpoAAAAEHRSTlMAABEiM0RVZneImaq7zN3uf6QJ9gAAAhVJREFUSMeFlUGC4yAMBDsGYsAE6v+v3QNCJrvjWU5xsFXqRhIaBNmKfNZPFYqU8TUkjfXQsiQpwf2xjgFpPZxA1LZyBeg5vl5q5BtzR+gkKdOLrSxpcJVSCkBbyHoHZUP2ry29PVta1HlL6zg+0SXlTbakwdsidIohPcnAhkzsWzrZVpDc2cRwRKH8gtRJX4GXlrojG3DnHwFqkBQr10u61lYh94XvxN+QAY6lJd4iFzICHxjHnYDj40u3s51QyZuvz8jIcPvaLXIhK/TDORG2OK+X3NlEU7K9Mt9+RBYuR5JcpCEDkFWZeStvIg1p0gqnZM5OX5+QR6UHQ44ps0J3ZAEOJeCUpAs8V0O+pzd9HEveErv1Zd77kiusupytEYBzIY8xi+pjpre1Mb/tWs4mmsPM170v492Xn70v0wVNFVpYkVeDrhx+QlayVKcLneD2Pp7l0Sw/SEtgcGS3allq3dgN+aZJfRglu6/P5aNBNKTValXYxH01/l4+XlOdkLh8zi5ff0E28kIGC72Qny9kmU3S/0ZWcl3hPgQfCM/I60YqzxlkyPRFZBxfo8CRiWa+Splm3f0bsq/oSToGIziybcM1TVYEuKI1TPeBXrfxnP+HbD5j/e4wZAA7omkZ/e/j7X5tvbfXgiN/urwqMOIDsn79d9o4SP0fZPLzlbL7+nhF93LoZ2TYSsX6ZD6eZc6QnF5/AMoDM/cBQX3IAAAAAElFTkSuQmCC"
                            alt=""></a>
                </div>


                <ul class="nav-menu nav navbar-nav">
                    <li><a href="{{ route('category.news') }}">News</a></li>
                    <li><a href="{{ route('category.popular') }}">Popular</a></li>
                    <li class="cat-1"><a href="{{ route('category.webdesign') }}">Web Design</a></li>
                    <li class="cat-2"><a href="{{ route('category.javascript') }}">JavaScript</a></li>
                    <li class="cat-3"><a href="{{ route('category.css') }}">Css</a></li>
                    <li class="cat-4"><a href="{{ route('category.jquery') }}">Jquery</a></li>
                </ul>


                <div class="nav-btns">
                    <button class="aside-btn"><i class="fa fa-bars"></i></button>
                    <button class="search-btn"><i class="fa fa-search"></i></button>
                    <div class="search-form">
                        <input class="search-input" type="text" name="search" placeholder="Enter Your Search ...">
                        <button class="search-close"><i class="fa fa-times"></i></button>
                    </div>
                </div>

            </div>
        </div>


        <div id="nav-aside">

            <div class="section-row">
                <ul class="nav-aside-menu">
                    <li><a href="index.html">Home</a></li>
                    <li><a href="about.html">About Us</a></li>
                    <li><a href="#">Join Us</a></li>
                    <li><a href="#">Advertisement</a></li>
                    <li><a href="contact.html">Contacts</a></li>
                </ul>
            </div>


            <div class="section-row">
                <h3>Recent Posts</h3>
                <div class="post post-widget">
                    <a class="post-img" href="blog-post.html"><img
                            src="{{ asset('images/img/xwidget-2.jpg.pagespeed.ic.cSUEAOhjjU.webp') }}" alt=""></a>
                    <div class="post-body">
                        <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                Design Mockup Into Code Automatically</a></h3>
                    </div>
                </div>
                <div class="post post-widget">
                    <a class="post-img" href="blog-post.html"><img
                            src="img/xwidget-3.jpg.pagespeed.ic.5z-SP7IbT6.webp" alt=""></a>
                    <div class="post-body">
                        <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The
                                Backend Development Block!</a></h3>
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


            <div class="section-row">
                <h3>Follow us</h3>
                <ul class="nav-aside-social">
                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                </ul>
            </div>


            <button class="nav-aside-close"><i class="fa fa-times"></i></button>

        </div>

    </div>

</header>