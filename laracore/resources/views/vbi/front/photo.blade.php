@extends('vbi/template/head')
@section('container')

        <div class="container">
            <div id="main_area">
                <div class="col-xs-12" id="slider">
                    <div class="row">
                        <div class="col-sm-8" id="carousel-bounding-box">
                            <div class="carousel slide" id="myCarousel">
                                <div class="carousel-inner">
                                    <div class="active item" data-slide-number="0">
                                        <img src="http://placehold.it/770x300&text=one"></div>
                                    <div class="item" data-slide-number="1">
                                        <img src="http://placehold.it/770x300&text=two"></div>
                                    <div class="item" data-slide-number="2">
                                        <img src="http://placehold.it/770x300&text=three"></div>
                                    <div class="item" data-slide-number="3">
                                        <img src="http://placehold.it/770x300&text=four"></div>
                                    <div class="item" data-slide-number="4">
                                        <img src="http://placehold.it/770x300&text=five"></div>
                                    <div class="item" data-slide-number="5">
                                        <img src="http://placehold.it/770x300&text=six"></div>
                                </div>
                                <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                                <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                </a>
                            </div>
                        </div>
                        <div class="col-sm-4" id="carousel-text"></div>
                        <div id="slide-content" style="display: none;">
                            <div id="slide-content-0">
                                <h2>Slider One</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                            <div id="slide-content-1">
                                <h2>Slider Two</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                            <div id="slide-content-2">
                                <h2>Slider Three</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                            <div id="slide-content-3">
                                <h2>Slider Four</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                            <div id="slide-content-4">
                                <h2>Slider Five</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                            <div id="slide-content-5">
                                <h2>Slider Six</h2>
                                <p>Lorem Ipsum Dolor</p>
                                <p class="sub-text">October 24 2014 - <a href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row hidden-xs" id="slider-thumbs">
                    <ul class="hide-bullets">
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-0"><img src="http://placehold.it/170x100&text=one"></a>
                        </li>
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-1"><img src="http://placehold.it/170x100&text=two"></a>
                        </li>
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-2"><img src="http://placehold.it/170x100&text=three"></a>
                        </li>
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-3"><img src="http://placehold.it/170x100&text=four"></a>
                        </li>
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-4"><img src="http://placehold.it/170x100&text=five"></a>
                        </li>
                        <li class="col-sm-2">
                            <a class="thumbnail" id="carousel-selector-5"><img src="http://placehold.it/170x100&text=six"></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

@stop
