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

<div id="nav">

<div id="nav-fixed">
<div class="container">

<div class="nav-logo">
<a href="index.html" class="logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAASCAMAAACw93oVAAAAM1BMVEUAAAD///8oLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEhrMZpoAAAAEHRSTlMAABEiM0RVZneImaq7zN3uf6QJ9gAAAhVJREFUSMeFlUGC4yAMBDsGYsAE6v+v3QNCJrvjWU5xsFXqRhIaBNmKfNZPFYqU8TUkjfXQsiQpwf2xjgFpPZxA1LZyBeg5vl5q5BtzR+gkKdOLrSxpcJVSCkBbyHoHZUP2ry29PVta1HlL6zg+0SXlTbakwdsidIohPcnAhkzsWzrZVpDc2cRwRKH8gtRJX4GXlrojG3DnHwFqkBQr10u61lYh94XvxN+QAY6lJd4iFzICHxjHnYDj40u3s51QyZuvz8jIcPvaLXIhK/TDORG2OK+X3NlEU7K9Mt9+RBYuR5JcpCEDkFWZeStvIg1p0gqnZM5OX5+QR6UHQ44ps0J3ZAEOJeCUpAs8V0O+pzd9HEveErv1Zd77kiusupytEYBzIY8xi+pjpre1Mb/tWs4mmsPM170v492Xn70v0wVNFVpYkVeDrhx+QlayVKcLneD2Pp7l0Sw/SEtgcGS3allq3dgN+aZJfRglu6/P5aNBNKTValXYxH01/l4+XlOdkLh8zi5ff0E28kIGC72Qny9kmU3S/0ZWcl3hPgQfCM/I60YqzxlkyPRFZBxfo8CRiWa+Splm3f0bsq/oSToGIziybcM1TVYEuKI1TPeBXrfxnP+HbD5j/e4wZAA7omkZ/e/j7X5tvbfXgiN/urwqMOIDsn79d9o4SP0fZPLzlbL7+nhF93LoZ2TYSsX6ZD6eZc6QnF5/AMoDM/cBQX3IAAAAAElFTkSuQmCC" alt=""></a>
</div>


<ul class="nav-menu nav navbar-nav">
<li><a href="category.html">News</a></li>
<li><a href="category.html">Popular</a></li>
<li class="cat-1"><a href="category.html">Web Design</a></li>
<li class="cat-2"><a href="category.html">JavaScript</a></li>
<li class="cat-3"><a href="category.html">Css</a></li>
<li class="cat-4"><a href="category.html">Jquery</a></li>
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
<a class="post-img" href="blog-post.html">
    <img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xwidget-3.jpg.pagespeed.ic.5z-SP7IbT6.webp') }}"  alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xwidget-4.jpg.pagespeed.ic.i3iWR0f20S.webp') }}"  alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
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


<div class="section">

<div class="container">

<div class="row">

<div class="col-md-6">
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>


<div class="col-md-6">
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
</div>

</div>


<div class="row">
<div class="col-md-12">
<div class="section-title">
<h2>Recent Posts</h2>
</div>
</div>

<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-1" href="category.html">Web Design</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}"alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-4" href="category.html">Css</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-1" href="category.html">Web Design</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
</div>

</div>


<div class="row">
<div class="col-md-8">
<div class="row">

<div class="col-md-12">
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
</div>


<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-4" href="category.html">Css</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
</div>
</div>
</div>


<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-1" href="category.html">Web Design</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>


<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
</div>

<div class="clearfix visible-md visible-lg"></div>

<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-1" href="category.html">Web Design</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
</div>


<div class="col-md-6">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>

</div>
</div>
<div class="col-md-4">

<div class="aside-widget">
<div class="section-title">
<h2>Most Read</h2>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="./img/widget-1.jpg" alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xwidget-2.jpg.pagespeed.ic.cSUEAOhjjU.webp') }}" alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="./img/widget-3.jpg" alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
</div>
</div>
<div class="post post-widget">
<a class="post-img" href="blog-post.html"><img src="./img/widget-4.jpg" alt=""></a>
<div class="post-body">
<h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And Development Tools</a></h3>
</div>
</div>
</div>


<div class="aside-widget">
<div class="section-title">
<h2>Featured Posts</h2>
</div>
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
<div class="post post-thumb">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>


<div class="aside-widget text-center">
<a href="#" style="display: inline-block;margin: auto;">
<img class="img-responsive" src="./img/ad-1.jpg" alt="">
</a>
</div>

</div>
</div>

</div>

</div>


<div class="section section-grey">

<div class="container">

<div class="row">
<div class="col-md-12">
<div class="section-title text-center">
<h2>Featured Posts</h2>
</div>
</div>

<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-5.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
</div>
</div>
</div>


<div class="col-md-4">
<div class="post">
<a class="post-img" href="blog-post.html"><img src="./img/post-3.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-1" href="category.html">Web Design</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website Design Mockup Into Code Automatically</a></h3>
</div>
</div>
</div>

</div>

</div>

</div>


<div class="section">

<div class="container">

<div class="row">
<div class="col-md-8">
<div class="row">
<div class="col-md-12">
<div class="section-title">
<h2>Most Read</h2>
</div>
</div>

<div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div>


<div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-2" href="category.html">JavaScript</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The Backend Development Block!</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div>


<div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-4" href="category.html">Css</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
</div>
</div>
</div>


<div class="col-md-12">
<div class="post post-row">
<a class="post-img" href="blog-post.html"><img src="{{ asset('articles/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
<div class="post-body">
<div class="post-meta">
<a class="post-category cat-3" href="category.html">Jquery</a>
<span class="post-date">March 27, 2018</span>
</div>
<h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use JQuery?</a></h3>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
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
<img class="img-responsive" src="./img/ad-1.jpg" alt="">
</a>
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
<a href="index.html" class="logo"><img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHIAAAASCAMAAACw93oVAAAAM1BMVEUAAAD///8oLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEgoLEhrMZpoAAAAEHRSTlMAABEiM0RVZneImaq7zN3uf6QJ9gAAAhVJREFUSMeFlUGC4yAMBDsGYsAE6v+v3QNCJrvjWU5xsFXqRhIaBNmKfNZPFYqU8TUkjfXQsiQpwf2xjgFpPZxA1LZyBeg5vl5q5BtzR+gkKdOLrSxpcJVSCkBbyHoHZUP2ry29PVta1HlL6zg+0SXlTbakwdsidIohPcnAhkzsWzrZVpDc2cRwRKH8gtRJX4GXlrojG3DnHwFqkBQr10u61lYh94XvxN+QAY6lJd4iFzICHxjHnYDj40u3s51QyZuvz8jIcPvaLXIhK/TDORG2OK+X3NlEU7K9Mt9+RBYuR5JcpCEDkFWZeStvIg1p0gqnZM5OX5+QR6UHQ44ps0J3ZAEOJeCUpAs8V0O+pzd9HEveErv1Zd77kiusupytEYBzIY8xi+pjpre1Mb/tWs4mmsPM170v492Xn70v0wVNFVpYkVeDrhx+QlayVKcLneD2Pp7l0Sw/SEtgcGS3allq3dgN+aZJfRglu6/P5aNBNKTValXYxH01/l4+XlOdkLh8zi5ff0E28kIGC72Qny9kmU3S/0ZWcl3hPgQfCM/I60YqzxlkyPRFZBxfo8CRiWa+Splm3f0bsq/oSToGIziybcM1TVYEuKI1TPeBXrfxnP+HbD5j/e4wZAA7omkZ/e/j7X5tvbfXgiN/urwqMOIDsn79d9o4SP0fZPLzlbL7+nhF93LoZ2TYSsX6ZD6eZc6QnF5/AMoDM/cBQX3IAAAAAElFTkSuQmCC" alt=""></a>
</div>
<ul class="footer-nav">
<li><a href="#">Privacy Policy</a></li>
<li><a href="#">Advertisement</a></li>
</ul>
<div class="footer-copyright">
<span>&copy; 
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
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
<input class="input" type="email" name="newsletter" placeholder="Enter your email">
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
<script src="{{ asset('js/bootstrap.min.js') }}"></script><script>eval(mod_pagespeed_15hy7ra_pu);</script>
<script>eval(mod_pagespeed_RDDE5qW6SI);</script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b428e9bde8fa4a1","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>
</body>
</html>
