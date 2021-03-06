@extends('front.layouts.master')
@section('contents')

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
                                <img class="img-responsive" src="{{ asset('front/img/xpost-4.jpg.pagespeed.ic.5tBCPmCJW-.webp') }}" alt=""
                                    data-pagespeed-url-hash="950850851" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
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

                    <div class="section-row">
                        <div class="post-author">
                            <div class="media">
                                <div class="media-left">
                                    <img class="media-object" src="{{ asset('front/img/xauthor.png.pagespeed.ic.-dOTrKKeTJ.webp') }}"
                                        alt="" data-pagespeed-url-hash="2096537711"
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
                                    <img class="media-object" src="{{ asset('front/img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp') }}"
                                        alt="" data-pagespeed-url-hash="1889391393"
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
                                    <img class="media-object" src="{{ asset('front/img/xavatar.png.pagespeed.ic.yoqFUweBw4.webp') }}"
                                        alt="" data-pagespeed-url-hash="1889391393"
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
                    <x-front.right_sidebar.menu_image />
                    <x-front.right_sidebar.most_read />
                    <x-front.right_sidebar.featured_posts />
                    <x-front.right_sidebar.categories />
                    <x-front.right_sidebar.archive />
                </div>
            </div>
        </div>
    </div>

@endsection
