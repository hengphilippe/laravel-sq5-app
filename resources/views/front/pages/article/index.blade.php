@extends('front.layouts.master')
@section('contents')
    <script data-pagespeed-no-defer>
        //<![CDATA[
        (function() {
            for (var g = "function" == typeof Object.defineProperties ? Object.defineProperty : function(b, c, a) {
                        if (a.get || a.set) throw new TypeError("ES3 does not support getters and setters.");
                        b != Array.prototype && b != Object.prototype && (b[c] = a.value)
                    }, h = "undefined" != typeof window && window === this ? this : "undefined" != typeof global &&
                    null != global ? global : this, k = ["String", "prototype", "repeat"], l = 0; l < k.length -
                1; l++) {
                var m = k[l];
                m in h || (h[m] = {});
                h = h[m]
            }
            var n = k[k.length - 1],
                p = h[n],
                q = p ? p : function(b) {
                    var c;
                    if (null == this) throw new TypeError(
                        "The 'this' value for String.prototype.repeat must not be null or undefined");
                    c = this + "";
                    if (0 > b || 1342177279 < b) throw new RangeError("Invalid count value");
                    b |= 0;
                    for (var a = ""; b;)
                        if (b & 1 && (a += c), b >>>= 1) c += c;
                    return a
                };
            q != p && null != q && g(h, n, {
                configurable: !0,
                writable: !0,
                value: q
            });
            var t = this;

            function u(b, c) {
                var a = b.split("."),
                    d = t;
                a[0] in d || !d.execScript || d.execScript("var " + a[0]);
                for (var e; a.length && (e = a.shift());) a.length || void 0 === c ? d[e] ? d = d[e] : d = d[e] = {} :
                    d[e] = c
            };

            function v(b) {
                var c = b.length;
                if (0 < c) {
                    for (var a = Array(c), d = 0; d < c; d++) a[d] = b[d];
                    return a
                }
                return []
            };

            function w(b) {
                var c = window;
                if (c.addEventListener) c.addEventListener("load", b, !1);
                else if (c.attachEvent) c.attachEvent("onload", b);
                else {
                    var a = c.onload;
                    c.onload = function() {
                        b.call(this);
                        a && a.call(this)
                    }
                }
            };
            var x;

            function y(b, c, a, d, e) {
                this.h = b;
                this.j = c;
                this.l = a;
                this.f = e;
                this.g = {
                    height: window.innerHeight || document.documentElement.clientHeight || document.body
                        .clientHeight,
                    width: window.innerWidth || document.documentElement.clientWidth || document.body.clientWidth
                };
                this.i = d;
                this.b = {};
                this.a = [];
                this.c = {}
            }

            function z(b, c) {
                var a, d, e = c.getAttribute("data-pagespeed-url-hash");
                if (a = e && !(e in b.c))
                    if (0 >= c.offsetWidth && 0 >= c.offsetHeight) a = !1;
                    else {
                        d = c.getBoundingClientRect();
                        var f = document.body;
                        a = d.top + ("pageYOffset" in window ? window.pageYOffset : (document.documentElement || f
                            .parentNode || f).scrollTop);
                        d = d.left + ("pageXOffset" in window ? window.pageXOffset : (document.documentElement || f
                            .parentNode || f).scrollLeft);
                        f = a.toString() + "," + d;
                        b.b.hasOwnProperty(f) ? a = !1 : (b.b[f] = !0, a = a <= b.g.height && d <= b.g.width)
                    } a && (b.a.push(e),
                    b.c[e] = !0)
            }
            y.prototype.checkImageForCriticality = function(b) {
                b.getBoundingClientRect && z(this, b)
            };
            u("pagespeed.CriticalImages.checkImageForCriticality", function(b) {
                x.checkImageForCriticality(b)
            });
            u("pagespeed.CriticalImages.checkCriticalImages", function() {
                A(x)
            });

            function A(b) {
                b.b = {};
                for (var c = ["IMG", "INPUT"], a = [], d = 0; d < c.length; ++d) a = a.concat(v(document
                    .getElementsByTagName(c[d])));
                if (a.length && a[0].getBoundingClientRect) {
                    for (d = 0; c = a[d]; ++d) z(b, c);
                    a = "oh=" + b.l;
                    b.f && (a += "&n=" + b.f);
                    if (c = !!b.a.length)
                        for (a += "&ci=" + encodeURIComponent(b.a[0]), d = 1; d < b.a.length; ++d) {
                            var e = "," + encodeURIComponent(b.a[d]);
                            131072 >= a.length + e.length && (a += e)
                        }
                    b.i && (e = "&rd=" + encodeURIComponent(JSON.stringify(B())), 131072 >= a.length + e.length && (a +=
                        e), c = !0);
                    C = a;
                    if (c) {
                        d = b.h;
                        b = b.j;
                        var f;
                        if (window.XMLHttpRequest) f =
                            new XMLHttpRequest;
                        else if (window.ActiveXObject) try {
                            f = new ActiveXObject("Msxml2.XMLHTTP")
                        } catch (r) {
                            try {
                                f = new ActiveXObject("Microsoft.XMLHTTP")
                            } catch (D) {}
                        }
                        f && (f.open("POST", d + (-1 == d.indexOf("?") ? "?" : "&") + "url=" + encodeURIComponent(b)), f
                            .setRequestHeader("Content-Type", "application/x-www-form-urlencoded"), f.send(a))
                    }
                }
            }

            function B() {
                var b = {},
                    c;
                c = document.getElementsByTagName("IMG");
                if (!c.length) return {};
                var a = c[0];
                if (!("naturalWidth" in a && "naturalHeight" in a)) return {};
                for (var d = 0; a = c[d]; ++d) {
                    var e = a.getAttribute("data-pagespeed-url-hash");
                    e && (!(e in b) && 0 < a.width && 0 < a.height && 0 < a.naturalWidth && 0 < a.naturalHeight || e in
                        b && a.width >= b[e].o && a.height >= b[e].m) && (b[e] = {
                        rw: a.width,
                        rh: a.height,
                        ow: a.naturalWidth,
                        oh: a.naturalHeight
                    })
                }
                return b
            }
            var C = "";
            u("pagespeed.CriticalImages.getBeaconData", function() {
                return C
            });
            u("pagespeed.CriticalImages.Run", function(b, c, a, d, e, f) {
                var r = new y(b, c, a, e, f);
                x = r;
                d && w(function() {
                    window.setTimeout(function() {
                        A(r)
                    }, 0)
                })
            });
        })();

        pagespeed.CriticalImages.Run('/mod_pagespeed_beacon', 'https://preview.colorlib.com/theme/webmag/#',
            '-ilGEe-FWC', true, false, 'pzkBS3UbaY8');
        //]]>
    </script>
    <header id="header">
        <div id="post-header" class="page-header">
            <div class="background-img"
                style="background-image:url({{ asset('front/img/xpost-page.jpg.pagespeed.ic.6yBf5KNAup.webp') }})"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-10">
                        <div class="post-meta">
                            <a class="post-category cat-2" href="category.html">JavaScript</a>
                            <span class="post-date">March 27, 2018</span>
                        </div>
                        <h1>Ask HN: Does Anybody Still Use JQuery?</h1>
                    </div>
                </div>
            </div>
        </div>

    </header>
    <div class="section">

        <div class="container">

            <div class="row">

                <div class="col-md-8">
                    <div class="section-row sticky-container">
                        <div class="main-post">
                            <h3>Lorem Ipsum: when, and when not to use it</h3>
                            <p>Do you like Cheese Whiz? Spray tan? Fake eyelashes? That's what is Lorem Ipsum to many—it
                                rubs them the wrong way, all the way. It's unreal, uncanny, makes you wonder if
                                something is wrong, it seems to seek your attention for all the wrong reasons. Usually,
                                we prefer the real thing, wine without sulfur based preservatives, real butter, not
                                margarine, and so we'd like our layouts and designs to be filled with real words, with
                                thoughts that count, information that has value. </p>
                            <p>The toppings you may chose for that TV dinner pizza slice when you forgot to shop for
                                foods, the paint you may slap on your face to impress the new boss is your business. But
                                what about your daily bread? Design comps, layouts, wireframes—will your clients accept
                                that you go about things the facile way? Authorities in our business will tell in no
                                uncertain terms that Lorem Ipsum is that huge, huge no no to forswear forever. Not so
                                fast, I'd say, there are some redeeming factors in favor of greeking text, as its use is
                                merely the symptom of a worse problem to take into consideration.</p>
                            <figure class="figure-img">
                                <img class="img-responsive"
                                    src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""
                                    data-pagespeed-url-hash="950850851"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                <figcaption>So Lorem Ipsum is bad (not necessarily)</figcaption>
                            </figure>
                            <p>You begin with a text, you sculpt information, you chisel away what's not needed, you
                                come to the point, make things clear, add value, you're a content person, you like
                                words. Design is no afterthought, far from it, but it comes in a deserved second.
                                Anyway, you still use Lorem Ipsum and rightly so, as it will always have a place in the
                                web workers toolbox, as things happen, not always the way you like it, not always in the
                                preferred order. Even if your less into design and more into content strategy you may
                                find some redeeming value with, wait for it, dummy copy, no less.</p>
                            <p>There's lot of hate out there for a text that amounts to little more than garbled words
                                in an old language. The villagers are out there with a vengeance to get that
                                Frankenstein, wielding torches and pitchforks, wanting to tar and feather it at the
                                least, running it out of town in shame.</p>
                            <p>One of the villagers, Kristina Halvorson from Adaptive Path, holds steadfastly to the
                                notion that design can’t be tested without real content:</p>
                            <blockquote class="blockquote">
                                I’ve heard the argument that “lorem ipsum” is effective in wireframing or design because
                                it helps people focus on the actual layout, or color scheme, or whatever. What kills me
                                here is that we’re talking about creating a user experience that will (whether we like
                                it or not) be DRIVEN by words. The entire structure of the page or app flow is FOR THE
                                WORDS.
                            </blockquote>
                            <p>If that's what you think how bout the other way around? How can you evaluate content
                                without design? No typography, no colors, no layout, no styles, all those things that
                                convey the important signals that go beyond the mere textual, hierarchies of
                                information, weight, emphasis, oblique stresses, priorities, all those subtle cues that
                                also have visual and emotional appeal to the reader. Rigid proponents of content
                                strategy may shun the use of dummy copy but then designers might want to ask them to
                                provide style sheets with the copy decks they supply that are in tune with the design
                                direction they require.</p>
                            <h3>Summing up, if the copy is diverting attention from the design it’s because it’s not up
                                to task.</h3>
                            <p>Typographers of yore didn't come up with the concept of dummy copy because people thought
                                that content is inconsequential window dressing, only there to be used by designers who
                                can’t be bothered to read. Lorem Ipsum is needed because words matter, a lot. Just fill
                                up a page with draft copy about the client’s business and they will actually read it and
                                comment on it. They will be drawn to it, fiercely. Do it the wrong way and draft copy
                                can derail your design review.</p>
                        </div>
                        <div class="post-shares sticky-shares">
                            <a href="#" class="share-facebook"><i class="fa fa-facebook"></i></a>
                            <a href="#" class="share-twitter"><i class="fa fa-twitter"></i></a>
                            <a href="#" class="share-google-plus"><i class="fa fa-google-plus"></i></a>
                            <a href="#" class="share-pinterest"><i class="fa fa-pinterest"></i></a>
                            <a href="#" class="share-linkedin"><i class="fa fa-linkedin"></i></a>
                            <a href="#"><i class="fa fa-envelope"></i></a>
                        </div>
                    </div>

                    <div class="section-row text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive"
                                src="{{ asset('front/img/xad-2.jpg.pagespeed.ic.RB_ZDhAXxh.webp') }}" alt=""
                                data-pagespeed-url-hash="520125700"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                    </div>


                    <div class="section-row">
                        <div class="post-author">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object"
                                        src="{{ asset('front/img/xauthor.png.pagespeed.ic.-dOTrKKeTJ.webp') }}" alt=""
                                        data-pagespeed-url-hash="2096537711"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h3>John Doe</h3>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                    <ul class="author-social">
                                        <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h2>3 Comments</h2>
                        </div>
                        <div class="post-comments">

                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object"
                                        src="{{ asset('front/img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp') }}" alt=""
                                        data-pagespeed-url-hash="1889391393"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h4>John Doe</h4>
                                        <span class="time">March 27, 2018 at 8:00 am</span>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>

                                    <div class="media">
                                        <div class="media-left">
                                            <img class="media-object"
                                                src="{{ asset('front/img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp') }}"
                                                alt="" data-pagespeed-url-hash="1889391393"
                                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                        </div>
                                        <div class="media-body">
                                            <div class="media-heading">
                                                <h4>John Doe</h4>
                                                <span class="time">March 27, 2018 at 8:00 am</span>
                                                <a href="#" class="reply">Reply</a>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
                                                commodo consequat.</p>
                                        </div>
                                    </div>

                                </div>
                            </div>


                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object"
                                        src="{{ asset('front/img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp') }}" alt=""
                                        data-pagespeed-url-hash="1889391393"
                                        onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                                </div>
                                <div class="media-body">
                                    <div class="media-heading">
                                        <h4>John Doe</h4>
                                        <span class="time">March 27, 2018 at 8:00 am</span>
                                        <a href="#" class="reply">Reply</a>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                        nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>


                    <div class="section-row">
                        <div class="section-title">
                            <h2>Leave a reply</h2>
                            <p>your email address will not be published. required fields are marked *</p>
                        </div>
                        <form class="post-reply">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Name *</span>
                                        <input class="input" type="text" name="name">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Email *</span>
                                        <input class="input" type="email" name="email">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <span>Website</span>
                                        <input class="input" type="text" name="website">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <textarea class="input" name="message" placeholder="Message"></textarea>
                                    </div>
                                    <button class="primary-button">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>


                <div class="col-md-4">

                    <div class="aside-widget text-center">
                        <a href="#" style="display: inline-block;margin: auto;">
                            <img class="img-responsive"
                                src="data:image/webp;base64,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"
                                alt="" data-pagespeed-url-hash="225625779"
                                onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                        </a>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Most Read</h2>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xwidget-1.jpg.pagespeed.ic.NYJjOYjv_V.webp') }}" alt=""
                                    data-pagespeed-url-hash="3605550000"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="#">Tell-A-Tool: Guide To Web Design
                                        And Development Tools</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xwidget-2.jpg.pagespeed.ic.cSUEAOhjjU.webp') }}" alt=""
                                    data-pagespeed-url-hash="3900049921"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="#">Pagedraw UI Builder Turns Your
                                        Website Design Mockup Into Code Automatically</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xwidget-3.jpg.pagespeed.ic.5z-SP7IbT6.webp') }}" alt=""
                                    data-pagespeed-url-hash="4194549842"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="#">Why Node.js Is The Coolest Kid On
                                        The Backend Development Block!</a></h3>
                            </div>
                        </div>
                        <div class="post post-widget">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xwidget-4.jpg.pagespeed.ic.i3iWR0f20S.webp') }}" alt=""
                                    data-pagespeed-url-hash="194082467"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <h3 class="post-title"><a href="#">Tell-A-Tool: Guide To Web Design
                                        And Development Tools</a></h3>
                            </div>
                        </div>
                    </div>


                    <div class="aside-widget">
                        <div class="section-title">
                            <h2>Featured Posts</h2>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xpost-2.jpg.pagespeed.ic.DOAToGcDYE.webp') }}" alt=""
                                    data-pagespeed-url-hash="361851009"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-3" href="#">Jquery</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Ask HN: Does Anybody Still Use
                                        JQuery?</a></h3>
                            </div>
                        </div>
                        <div class="post post-thumb">
                            <a class="post-img" href="#"><img
                                    src="{{ asset('front/img/xpost-1.jpg.pagespeed.ic.2GXRfHYjOg.webp') }}" alt=""
                                    data-pagespeed-url-hash="67351088"
                                    onload="pagespeed.CriticalImages.checkImageForCriticality(this);"></a>
                            <div class="post-body">
                                <div class="post-meta">
                                    <a class="post-category cat-2" href="#">JavaScript</a>
                                    <span class="post-date">March 27, 2018</span>
                                </div>
                                <h3 class="post-title"><a href="#">Chrome Extension Protects Against
                                        JavaScript-Based CPU Side-Channel Attacks</a></h3>
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
                                <li><a href="#">January 2018</a></li>
                                <li><a href="#">Febuary 2018</a></li>
                                <li><a href="#">March 2018</a></li>
                            </ul>
                        </div>
                    </div>

                </div>

            </div>

        </div>

    </div>


@endsection
