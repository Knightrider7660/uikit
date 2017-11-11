@extends('layouts.master')
@section('title')
    NooN xs
    @endsection

@section('banner')
    <div class="row">
        <div class="main_banner_area">
            <div class="col-md-6 col-sm-6">
                <div class="single_banner wow fadeIn">
                    <img src="{{asset('public/images/iphone1.png')}}" alt="" />
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="single_banner_text wow zoomIn" data-wow-duration="1s">
                    <h2>Awesome Noon</h2>
                    <p>Effective catalysts for change. Seamlessly optimize team driven catalysts for change through web services. </p>

                    <div class="apps_downlod">
                        <a href=""><img src="{{asset('public/images/ap.png')}}" alt="" /></a>

                        <a href=""><img src="{{asset('public/images/ag.png')}}" alt="" /></a>
                    </div>
                </div>
            </div>


            <div class="scrolldown">
                <a href="#features" class="scroll_btn"></a>
            </div>
        </div>


    </div>
    @endsection

@section('about')
    <div class="row">
        <div class="abouts_content">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_abouts_img text-center wow fadeInLeft" data-wow-duration="1s">
                    <img src="{{asset('public/images/abouts.png')}}" alt="" />
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_abouts_text wow fadeInRight" data-wow-duration="1s">
                    <h2>Pixel Perfect Design</h2>
                    <p>Conveniently whiteboard prospect catalysts for change without principle centeredempower.</p>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('features')
    <div class="row">
        <div class="main_features">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_features_text wow fadeIn" data-wow-duration="2s">
                    <h2>We Create Noon</h2>
                    <p>Conveniently whiteboard prospect catalysts for change without principle centeredempower.</p>
                </div>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <div class="single_features_img wow fadeIn" data-wow-duration="2s">
                    <img src="{{asset('public/images/features.png')}}" alt="" />
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('pricing')
    <div class="row">
        <div class="main_works">

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_works text-right wow fadeInLeft" data-wow-duration="2s">
                    <div class="single_works_deatels">
                        <i class="icon icon-puzzle"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div>
                    <div class="single_works_deatels">
                        <i class="icon icon-files"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div>
                    <div class="single_works_deatels">
                        <i class="icon icon-star"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_works_text_middel text-center wow fadeInDown" data-wow-duration="2s">
                    <img src="{{asset('public/images/workiphone.png')}}" alt="" />
                </div>
            </div>

            <div class="col-md-4 col-sm-12 col-xs-12">
                <div class="single_works text-left wow fadeInRight" data-wow-duration="2s">
                    <div class="single_works_deatels">
                        <i class="icon icon-focus"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div>

                    <div class="single_works_deatels">
                        <i class="icon icon-brush2"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div>

                    <div class="single_works_deatels">
                        <i class="icon icon-flash-outline"></i>
                        <h5>Carefully CRafted</h5>
                        <p>Conveniently whiteboa prospect and  to perform catalysts change without principle centered to done power.</p>
                    </div><!-- End of single works deatels -->
                </div>
            </div><!-- End of col-md-4 -->
        </div><!-- End of main Works -->
    </div><!-- End of row -->
    @endsection

@section('video')
    <div class="row">
        <div class="main_video_content text-center">
            <div class="head_title">
                <h2>Let's See a Demo</h2>
                <p>Conveniently whiteboard prospect catalysts for change without principle centere empower.</p>
            </div>
            <div class="col-md-12 col-sm-12">
                <div class="icon_area">
                    <a href="http://youtube.com" class="youtube-media"><img src="{{asset('public/images/play.png')}}" alt="play-icon" /></a>
                </div>
            </div>

            <p>Download the new app now: <a href="">uimint.com/noon</a></p>
        </div>
    </div>
    @endsection

@section('clients')
    <div class="row">
        <div class="main_clients_content">
            <div class="head_title text-center">
                <h2>Client’s Feedback</h2>
            </div>
            <div class="main_clients">
                <div class="col-md-4">
                    <div class="single_clients">
                        <p>" Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initi ate inexpensiveios. </p>
                        <div class="clients_details">
                            <div class="clients_img">
                                <img src="{{asset('public/images/clients.png')}}" alt="" />
                            </div>
                            <div class="clients_name">
                                <p>Ronalld Veper, <span> Baskin Brothres co.</span></p>
                                <p><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_clients">
                        <p>" Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initi ate inexpensiveios. </p>
                        <div class="clients_details">
                            <div class="clients_img">
                                <img src="{{asset('public/images/clients.png')}}" alt="" />
                            </div>
                            <div class="clients_name">
                                <p>Ronalld Veper, <span> Baskin Brothres co.</span></p>
                                <p><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_clients">
                        <p>" Holisticly empower leveraged ROI whereas effective web-readiness. Completely enable emerging meta-services with cross-platform web services. Quickly initi ate inexpensiveios. </p>
                        <div class="clients_details">
                            <div class="clients_img">
                                <img src="{{asset('public/images/clients.png')}}" alt="" />
                            </div>
                            <div class="clients_name">
                                <p>Ronalld Veper, <span> Baskin Brothres co.</span></p>
                                <p><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a><a href=""><i class="fa fa-star"></i></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('customize')
    <div class="row">
        <div class="main_customiz">
            <div class="col-md-6 col-md-offset-6 col-sm-9 col-sm-offset-3 col-xs-8 col-xs-offset-4">
                <div class="single_customiz">
                    <h2>Customize Layout</h2>
                    <a href="">Get it now <i class="fa fa-arrow-right"></i></a>
                </div>
            </div>
        </div>
    </div>
    @endsection

@section('faq')
    <div class="row">
        <div class="main_joine_content text-center">
            <div class="head_title">
                <h2>Join Over Million Peoples</h2>
                <p>Conveniently whiteboard prospect catalysts for change without principle centere empower.</p>
            </div>
            <div class="main_joinus">
                <a href=""><i class="fa fa-apple"></i>App Store</a>
                <a href=""><i class="fa fa-android"></i>Play Store</a>
                <a href=""><i class="fa fa-windows"></i>Window Store</a>
            </div>
        </div>
    </div>
    @endsection