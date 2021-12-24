@extends('front.layouts.master')
@section('contents')
    <div class="section">
        <div class="container">
            <div class="row">

                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route('menu.article') }}"><img
                                src="{{ asset('front/img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="{{ route('menu.article') }}">Chrome Extension Protects
                                    Against
                                    JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="post post-thumb">
                        <a class="post-img" href="{{ route('menu.article') }}"><img
                                src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="{{ route('menu.article') }}">Ask HN: Does Anybody Still
                                    Use
                                    JQuery?</a></h3>
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

                
                {{-- <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="{{ route('menu.article') }}"><img
                                src="{{ asset('front/img/xpost-3.jpg.pagespeed.ic.UjtolzGXxD.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1" href="#">Web Design</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="{{ route('menu.article') }}">Pagedraw UI Builder Turns
                                    Your Website
                                    Design Mockup Into Code Automatically</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                    JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                    JQuery?</a></h3>
                        </div>
                    </div>
                </div>

                <div class="clearfix visible-md visible-lg"></div>

                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-6.jpg.pagespeed.ic.XqKLoKE85z.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Why Node.js Is The Coolest Kid On The
                                    Backend Development Block!</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-4" href="#">Css</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1" href="#">Web Design</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web Design And
                                    Development Tools</a></h3>
                        </div>
                    </div>
                </div> --}}

            </div>

            <div class="row">
                <div class="col-md-8">
                    <div class="row">

                        <div class="col-md-12">
                            <div class="post post-thumb">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="#">Jquery</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                            JQuery?</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="#">Css</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-1" href="#">Web Design</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Tell-A-Tool: Guide To Web
                                            Design And Development Tools</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix visible-md visible-lg"></div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""></a>
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
                                        src="{{ asset('front/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="#">Jquery</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                            JQuery?</a></h3>
                                </div>
                            </div>
                        </div>

                        <div class="clearfix visible-md visible-lg"></div>

                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-3.jpg.pagespeed.ic.UjtolzGXxD.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-1" href="#">Web Design</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your
                                            Website Design Mockup Into Code Automatically</a></h3>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-6">
                            <div class="post">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""></a>
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

                    </div>
                </div>

                <div class="col-md-4">
                    {{-- <x-front.right_sidebar.most_read /> --}}
                    {{-- <x-front.right_sidebar.featured_posts /> --}}
                    {{-- <x-front.right_sidebar.image /> --}}
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
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-2" href="#">JavaScript</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects Against
                                    JavaScript-Based CPU Side-Channel Attacks</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-5.jpg.pagespeed.ic.jXTrIrIxiM.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-3" href="#">Jquery</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Ask HN: Does Anybody Still Use
                                    JQuery?</a></h3>
                        </div>
                    </div>
                </div>


                <div class="col-md-4">
                    <div class="post">
                        <a class="post-img" href="blog-post.html"><img
                                src="{{ asset('front/img/xpost-3.jpg.pagespeed.ic.UjtolzGXxD.webp') }}" alt=""></a>
                        <div class="post-body">
                            <div class="post-meta">
                                <a class="post-category cat-1" href="#">Web Design</a>
                                <span class="post-date">March 27, 2018</span>
                            </div>
                            <h3 class="post-title"><a href="blog-post.html">Pagedraw UI Builder Turns Your Website
                                    Design Mockup Into Code Automatically</a></h3>
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
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-2" href="#">JavaScript</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">Chrome Extension Protects
                                            Against JavaScript-Based CPU Side-Channel Attacks</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-6.jpg.pagespeed.ic.XqKLoKE85z.webp') }}" alt=""></a>
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
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-4" href="#">Css</a>
                                        <span class="post-date">March 27, 2018</span>
                                    </div>
                                    <h3 class="post-title"><a href="blog-post.html">CSS Float: A Tutorial</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam...</p>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12">
                            <div class="post post-row">
                                <a class="post-img" href="blog-post.html"><img
                                        src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""></a>
                                <div class="post-body">
                                    <div class="post-meta">
                                        <a class="post-category cat-3" href="#">Jquery</a>
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
                            <div class="section-row">
                                <button class="primary-button center-block">Load More</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <x-front.right_sidebar.categories />
                </div>
            </div>

        </div>
    </div>
@endsection
