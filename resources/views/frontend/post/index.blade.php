@extends('layouts.frontend')

@section('content')
<header>
    <!--Top-->
    <nav id="top">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <strong>Welcome to Us!</strong>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline top-link link">
                        <li><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
                        <li><a href="contact.html"><i class="fa fa-comments"></i> Contact</a></li>
                        <li><a href="#"><i class="fa fa-question-circle"></i> FAQ</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>

    <!--Navigation-->
    <nav id="menu" class="navbar container">
        <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse"><i class="fa fa-bars"></i></button>
            <a class="navbar-brand" href="#">
                <div class="logo"><span>Newspaper</span></div>
            </a>
        </div>
        <div class="collapse navbar-collapse navbar-ex1-collapse">
            <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Login <i class="fa fa-arrow-circle-o-down"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 101</a></li>
                                <li><a href="archive.html">Text 102</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Video <i class="fa fa-arrow-circle-o-down"></i></a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 201</a></li>
                                <li><a href="archive.html">Text 202</a></li>
                                <li><a href="archive.html">Text 203</a></li>
                                <li><a href="archive.html">Text 204</a></li>
                                <li><a href="archive.html">Text 205</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Category <i class="fa fa-arrow-circle-o-down"></i></a>
                    <div class="dropdown-menu" style="margin-left: -203.625px;">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 301</a></li>
                                <li><a href="archive.html">Text 302</a></li>
                                <li><a href="archive.html">Text 303</a></li>
                                <li><a href="archive.html">Text 304</a></li>
                                <li><a href="archive.html">Text 305</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 306</a></li>
                                <li><a href="archive.html">Text 307</a></li>
                                <li><a href="archive.html">Text 308</a></li>
                                <li><a href="archive.html">Text 309</a></li>
                                <li><a href="archive.html">Text 310</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li><a href="archive.html">Text 311</a></li>
                                <li><a href="archive.html">Text 312</a></li>
                                <li><a href="archive.html#">Text 313</a></li>
                                <li><a href="archive.html#">Text 314</a></li>
                                <li><a href="archive.html">Text 315</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="archive.html"><i class="fa fa-cubes"></i> Blocks</a></li>
                <li><a href="contact.html"><i class="fa fa-envelope"></i> Contact</a></li>
            </ul>
            <ul class="list-inline navbar-right top-social">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus-square"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="featured container">
    <div id="owl-demo" class="owl-carousel">
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/1.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/2.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/3.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/8.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/9.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/10.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/11.jpg') }}" />
            </div>
        </div>
        <div class="item">
            <div class="zoom-container">
                <div class="zoom-caption">
                    <span>Youtube</span>
                    <a href="single.html">
                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                    </a>
                    <p>Video's Name</p>
                </div>
                <img src="{{ asset('newspaper365/images/12.jpg') }}" />
            </div>
        </div>
    </div>
</div>
<!-- Header -->

<!-- /////////////////////////////////////////Content -->
<div id="page-content" class="archive-page container">
    <div class="">
        <div class="row">
            <div id="main-content" class="col-md-8">
                <div class="box">
                    <a href="#"><h2 class="vid-name">Lorem ipsum dolor sit amet</h2></a>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i> June 12, 2015</span>
                        <span><i class="fa fa-comment"></i> 0 Comments</span>
                        <span><i class="fa fa-heart"></i>1,200</span>
                        <ul class="list-inline">
                            <li><a href="#">Rate</a></li>
                            <li> - </li>
                            <li>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</span>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-vid">
                        <div class="zoom-container">
                            <div class="zoom-caption">
                            </div>
                            <img src="{{ asset('newspaper365/images/9.jpg') }}" />
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.justo duo dolores et ea rebum. Consetetur sadipscing elitr,  consetetur sadipscing elitr elitr. <a href="#">MORE...</a></p>
                    </div>
                </div>
                <hr class="line">
                <div class="box">
                    <a href="#"><h2 class="vid-name">Lorem ipsum dolor sit amet</h2></a>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i> June 12, 2015</span>
                        <span><i class="fa fa-comment"></i> 0 Comments</span>
                        <span><i class="fa fa-heart"></i>1,200</span>
                        <ul class="list-inline">
                            <li><a href="#">Rate</a></li>
                            <li> - </li>
                            <li>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</span>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-vid">
                        <div class="zoom-container">
                            <div class="zoom-caption">
                            </div>
                            <img src="{{ asset('newspaper365/images/7.jpg') }}" />
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.justo duo dolores et ea rebum. Consetetur sadipscing elitr,  consetetur sadipscing elitr elitr. <a href="#">MORE...</a></p>
                    </div>
                </div>
                <hr class="line">
                <div class="box">
                    <a href="#"><h2 class="vid-name">Lorem ipsum dolor sit amet</h2></a>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i> June 12, 2015</span>
                        <span><i class="fa fa-comment"></i> 0 Comments</span>
                        <span><i class="fa fa-heart"></i>1,200</span>
                        <ul class="list-inline">
                            <li><a href="#">Rate</a></li>
                            <li> - </li>
                            <li>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</span>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-vid">
                        <div class="zoom-container">
                            <div class="zoom-caption">
                                <span class="youtube">Youtube</span>
                                <a href="single.html">
                                    <i class="fa fa-play icon-play" style="color: #fff"></i>
                                </a>
                                <p>Video's Name</p>
                            </div>
                            <img src="{{ asset('newspaper365/images/8.jpg') }}" />
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.justo duo dolores et ea rebum. Consetetur sadipscing elitr,  consetetur sadipscing elitr elitr. <a href="#">MORE...</a></p>
                    </div>
                </div>
                <hr class="line">
                <div class="box">
                    <a href="#"><h2 class="vid-name">Lorem ipsum dolor sit amet</h2></a>
                    <div class="info">
                        <h5>By <a href="#">Kelvin</a></h5>
                        <span><i class="fa fa-calendar"></i> June 12, 2015</span>
                        <span><i class="fa fa-comment"></i> 0 Comments</span>
                        <span><i class="fa fa-heart"></i>1,200</span>
                        <ul class="list-inline">
                            <li><a href="#">Rate</a></li>
                            <li> - </li>
                            <li>
									<span class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-half-o"></i>
									</span>
                            </li>
                        </ul>
                    </div>
                    <div class="wrap-vid">
                        <div class="zoom-container">
                            <div class="zoom-caption">
                                <span class="vimeo">Vimeo</span>
                                <a href="single.html">
                                    <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                </a>
                                <p>Video's Name</p>
                            </div>
                            <img src="{{ asset('newspaper365/images/6.jpg') }}" />
                        </div>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Consetetur sadipscing elitr, sed diam nonumy eirmod tempor inviduntut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum.justo duo dolores et ea rebum. Consetetur sadipscing elitr,  consetetur sadipscing elitr elitr. <a href="#">MORE...</a></p>
                    </div>
                </div>
                <hr class="line">
                <div class="box">
                    <center>
                        <ul class="pagination">
                            <li>
                                <a href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                                <a href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                </a>
                            </li>
                        </ul>
                    </center>
                </div>
            </div>
            <div id="sidebar" class="col-md-4">
                <!---- Start Widget ---->
                <div class="widget wid-follow">
                    <div class="heading"><h4>Follow Us</h4></div>
                    <div class="content">
                        <ul class="list-inline">
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-facebook">
                                        <span class="fa fa-facebook fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-twitter">
                                        <span class="fa fa-twitter fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                            <li>
                                <a href="facebook.com/">
                                    <div class="box-google">
                                        <span class="fa fa-google-plus fa-2x icon"></span>
                                        <span>1250</span>
                                        <span>Fans</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                        <img src="{{ asset('newspaper365/images/banner.jpg') }}" />
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget wid-post">
                    <div class="heading"><h4>Category</h4></div>
                    <div class="content">
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="youtube">Youtube</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/1.jpg') }}" />
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="vimeo">Vimeo</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/2.jpg') }}" />
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                        <div class="post wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="youtube">Youtube</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/3.jpg') }}" />
                            </div>
                            <div class="wrapper">
                                <h5 class="vid-name"><a href="#">Video's Name</a></h5>
                                <div class="info">
                                    <h6>By <a href="#">Kelvin</a></h6>
                                    <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                    <span><i class="fa fa-heart"></i>1,200</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!---- Start Widget ---->
                <div class="widget ">
                    <div class="heading"><h4>Top News</h4></div>
                    <div class="content">
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="vimeo">Vimeo</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/1.jpg') }}" />
                            </div>
                            <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="vimeo">Vimeo</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/2.jpg') }}" />
                            </div>
                            <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                        <div class="wrap-vid">
                            <div class="zoom-container">
                                <div class="zoom-caption">
                                    <span class="vimeo">Vimeo</span>
                                    <a href="single.html">
                                        <i class="fa fa-play-circle-o fa-5x" style="color: #fff"></i>
                                    </a>
                                    <p>Video's Name</p>
                                </div>
                                <img src="{{ asset('newspaper365/images/3.jpg') }}" />
                            </div>
                            <h3 class="vid-name"><a href="#">Video's Name</a></h3>
                            <div class="info">
                                <h5>By <a href="#">Kelvin</a></h5>
                                <span><i class="fa fa-calendar"></i>25/3/2015</span>
                                <span><i class="fa fa-heart"></i>1,200</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection