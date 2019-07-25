@extends('front.master')
@section('title')
    Home
    @endsection

@section('content')
    <aside id="colorlib-hero">
        <div class="flexslider">
            <ul class="slides">
                <li style="background-image: url({{asset('/front/')}}/images/img_bg_1.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h1>How a website designer began customizing and designing</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('/front/')}}/images/img_bg_2.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h1>How a website designer began customizing and designing</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('/front/')}}/images/img_bg_3.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h1>How a website designer began customizing and designing</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li style="background-image: url({{asset('/front/')}}/images/img_bg_4.jpg);">
                    <div class="overlay"></div>
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6 col-md-pull-3 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
                                <div class="slider-text-inner">
                                    <div class="desc">
                                        <p class="meta">
                                            <span class="cat"><a href="#">Events</a></span>
                                            <span class="date">20 March 2018</span>
                                            <span class="pos">By <a href="#">Rich</a></span>
                                        </p>
                                        <h1>Top 5 Places To Start Your Vacation This Summer</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </aside>

    <div id="colorlib-container">
        <div class="container">
            @role(['admin','Moderator'])
            <a href="{{route('blog.create')}}" class="btn btn-success" style="float: right">Write Blog</a><hr/>
            @endrole
            <div class="row row-pb-md">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-1.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-slider">
                            <div class="owl-carousel">
                                <div class="item">
                                    <a href="blog.html" class="image-popup-link"><img src="{{asset('/front/')}}/images/blog-3.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                                </div>
                                <div class="item">
                                    <a href="blog.html" class="image-popup-link"><img src="{{asset('/front/')}}/images/blog-4.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                                </div>
                            </div>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Travel</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-4.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Lifestyle</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-5.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-6.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-8">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <div class="video colorlib-video" style="background-image: url({{asset('/front/')}}/images/blog-8.jpg);">
                                <a href="https://vimeo.com/channels/staffpicks/93951774" class="popup-vimeo"><i class="icon-play"></i></a>
                                <div class="overlay"></div>
                            </div>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Watch</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Watch our video how to make website</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-7.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-9.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-10.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-11.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-pb-md">
                <div class="col-md-4">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-12.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="blog-entry">
                        <div class="blog-img">
                            <a href="blog.html"><img src="{{asset('/front/')}}/images/blog-13.jpg" class="img-responsive" alt="html5 bootstrap template"></a>
                        </div>
                        <div class="desc">
                            <p class="meta">
                                <span class="cat"><a href="#">Events</a></span>
                                <span class="date">20 March 2018</span>
                                <span class="pos">By <a href="#">Rich</a></span>
                            </p>
                            <h2><a href="blog.html">Recipe for your site</a></h2>
                            <p>A small river named Duden flows by their place and supplies it with the necessary </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <ul class="pagination">
                        <li class="disabled"><a href="#">&laquo;</a></li>
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#">4</a></li>
                        <li><a href="#">&raquo;</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    @endsection