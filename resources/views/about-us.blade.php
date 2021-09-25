@extends('layouts.app')
@section('title', 'About Us')
@section('content')

<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">About Us</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="home" href="{{('/')}}">Home</a>
                        </span>
                        <span>About Us</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                    
<!-- page-title end -->
<!--about-section-->
<section class="ttm-row about-section clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-md-6 col-sm-8">
                <div class="ttm_single_image-wrapper">
                    <img class="img-fluid auto_size" width="475" height="624" src="{{ asset('webasset')}}/images/single-img-07.jpg" alt="single-07">
                </div>
            </div>
            <div class="col-lg-7 col-md-12 col-xs-12">
                <div class="padding_left30 padding_top20 res-991-padding_left0 res-991-padding_top40">
                    <!-- section title -->
                    <div class="section-title">
                        <div class="title-header">
                            <h3>WHO WE ARE</h3>
                            <h2 class="title">An Ultimate Textile Brand in <b>Market since 1970</b></h2>
                        </div>
                        <div class="title-desc">
                            <p>Indian weavers of designer of furnishing fabrics is a textile manufacturer founded in 1970 and renowned for new and stylish interpretations of natural & organic fabrics.</p>
                        </div>
                    </div><!-- section title end -->
                    <div class="ttm-horizontal_sep width-100 padding_top30"></div>
                    <div class="d-sm-flex align-items-center">
                        <div class="ttm_single_image-wrapper text-left m-0">
                            <img class="img-fluid auto_size" width="168" height="88" src="{{ asset('webasset')}}/images/single-img-08.jpg" alt="single-08">
                        </div>
                        <div class="pl-4 res-575-padding_left0 res-575-margin_top15">
                            <h3 class="fs-20 mb-0 pr-5 res-991-padding_right0">Our Fabric Textiles Services Manufacture Found In 1996</h3>
                        </div>
                    </div>
                    <div class="ttm-horizontal_sep width-100 margin_top30 padding_bottom30"></div>
                    <div>
                        <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor ttm-textcolor-darkgrey without-border">
                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">We check for your current dental situation and decide treatment</span></li>
                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">Our specialists will take care of your smile with dedication</span></li>
                            <li><i class="ti ti-check"></i><span class="ttm-list-li-content">We run periodic check-ups to ensure your teeth are good</span></li>
                        </ul>
                    </div>
                    <div class="d-inline-block margin_top15">
                        <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top15" href="{{('/contact-us')}}">contact us</a>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</section>
<!--about-section end-->


<!--services-section-->
<section class="ttm-row service-section ttm-bgcolor-grey position-relative z-index-2 clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <!-- section-title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>INDUSTRIES &amp; PRODUCTION</h3>
                        <h2 class="title">Let's Experience <b>Exclusive Quality</b></h2>
                    </div>
                </div><!-- section-title end -->
            </div>
        </div>
        <!-- row end -->
        <div class="row">
            <div class="col-lg-12">
                <div class="featuredbox-number">
                    <div class="row">
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <i class="ttm-num ti-info"></i>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-textile-1"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Fabric Treatment</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>We do execute stabilization including reweaving &amp; stitch repair details.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <i class="ttm-num ti-info"></i>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-silk"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Artistic Direction</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Assist collection strategies, storage, application and pest production management.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <i class="ttm-num ti-info"></i>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-moisture-wicking-fabric"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Satin weaving</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Continuous weft yarn, with as few interruptions of warp as it possible.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <!--featured-icon-box-->
                            <div class="featured-icon-box icon-align-top-content style5">
                                <i class="ttm-num ti-info"></i>
                                <div class="featured-icon">
                                    <div class="ttm-icon ttm-icon_element-onlytxt ttm-icon_element-color-skincolor ttm-icon_element-size-md">
                                        <i class="flaticon flaticon-sewing-machine"></i>
                                    </div>
                                </div>
                                <div class="featured-content">
                                    <div class="featured-title">
                                        <h3>Fabric Dyeing</h3>
                                    </div>
                                    <div class="featured-desc">
                                        <p>Transfer dyes from aqueous solution onto the fiber surface &amp; diffusion.</p>
                                    </div>
                                </div>
                            </div><!-- featured-icon-box end-->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--services-section end-->


<!--padding_top_zero-section-->
<section class="ttm-row padding_top_zero-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="ttm-bgcolor-white p-30">
                    <h3 class="fs-26">Stone Work Embroidery</h3>
                    <p>Consequat mauris nunc congue nisi vitae suscipit tellus mauris.</p>
                    <a class="ttm-btn btn-inline ttm-btn-size-md ttm-btn-color-dark margin_top5 margin_bottom5" href="{{('/design-fabric')}}">Read More</a>
                </div>
            </div>
            <div class="col-lg-8">
                <div class="ttm-bgcolor-skincolor p-30">
                    <div class="row ttm-vertical_sep">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style3">
                                <div class="ttm-fid-icon-wrapper">
                                    <i class="ti ti-cup"></i>
                                </div>
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                        <span   data-appear-animation="animateDigits" 
                                                data-from="0" 
                                                data-to="45" 
                                                data-interval="5" 
                                                data-before="" 
                                                data-before-style="sup" 
                                                data-after="+" 
                                                data-after-style="sub" 
                                                class="numinate">45
                                        </span>
                                        <span>+</span>
                                    </h4>
                                </div>
                                <h3 class="ttm-fid-title">Different kind texttile products</h3>
                            </div><!-- ttm-fid end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style3">
                                <div class="ttm-fid-icon-wrapper">
                                    <i class="ti ti-crown"></i>
                                </div>
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                        <span   data-appear-animation="animateDigits" 
                                                data-from="0" 
                                                data-to="25" 
                                                data-interval="5" 
                                                data-before="" 
                                                data-before-style="sup" 
                                                data-after="+" 
                                                data-after-style="sub" 
                                                class="numinate">25
                                        </span>
                                        <span>+</span>
                                    </h4>
                                </div>
                                <h3 class="ttm-fid-title">Years Of Working Experience</h3>
                            </div><!-- ttm-fid end -->
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <!-- ttm-fid -->
                            <div class="ttm-fid inside ttm-fid-with-icon ttm-fid-view-lefticon style3">
                                <div class="ttm-fid-icon-wrapper">
                                    <i class="ti ti-user"></i>
                                </div>
                                <div class="ttm-fid-contents">
                                    <h4 class="ttm-fid-inner">
                                        <span   data-appear-animation="animateDigits" 
                                                data-from="0" 
                                                data-to="325" 
                                                data-interval="25" 
                                                data-before="" 
                                                data-before-style="sup" 
                                                data-after="+" 
                                                data-after-style="sub" 
                                                class="numinate">325
                                        </span>
                                        <span>+</span>
                                    </h4>
                                </div>
                                <h3 class="ttm-fid-title">Trusted Satisfied Clients</h3>
                            </div><!-- ttm-fid end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--padding_top_zero-section end-->


<!--padding_top_zero-section-->
<section class="ttm-row padding_top_zero-section ttm-bgcolor-grey bg-layer-equal-height mb_20 res-991-mb_60 clearfix">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-lg-12">
                <div class="row no-gutters">
                    <div class="col-lg-7 col-md-12">
                        <div class="ttm-bg ttm-col-bgcolor-yes ttm-bgcolor-darkgrey ttm-bg ttm-left-span spacing-9">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer">
                                <div class="ttm-col-wrapper-bg-layer-inner"></div>
                            </div>
                            <div class="layer-content">
                                <!-- section title -->
                                <div class="section-title">
                                    <div class="title-header">
                                        <h3>WELL DESIGNED</h3>
                                        <h2 class="title">We Provide Clothes <b>More Than Just Stitched Fabric </b></h2>
                                    </div>
                                    <div class="title-desc">
                                        <p>FABLIO is the largest peer-to-peer comparison initiative in the textile industry. It tracks the apparel material and home textile sector’s progress toward more sustainable materials sourcing, as well as alignment with global effort. Besides the regular production became the largest exporter.</p>
                                    </div>
                                </div><!-- section title end -->
                                <div class="padding_top15">
                                    <!-- ttm-progress-bar -->
                                    <div class="ttm-progress-bar" data-percent="90%">
                                        <div class="progressbar-title">Textile</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="90">90%</div>
                                            </div>
                                        </div>
                                    </div><!-- ttm-progress-bar end -->
                                    <!-- ttm-progress-bar -->
                                    <div class="ttm-progress-bar clearfix" data-percent="80%">
                                        <div class="progressbar-title">Manufacture</div>
                                        <div class="progress-bar-inner">
                                            <div class="progress-bar progress-bar-color-bar_skincolor">
                                                <div class="progress-bar-percent ttm-bgcolor-skincolor" data-percentage="80">80%</div>
                                            </div>
                                        </div>
                                    </div><!-- ttm-progress-bar end -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5 col-md-12">
                        <!-- col-img-img-two -->
                        <div class="ttm-bg ttm-col-bgimage-yes col-bg-img-two ttm-right-span z-index-2 ml_80 res-991-margin_left0 margin_top70 res-991-margin_top0">
                            <div class="ttm-col-wrapper-bg-layer ttm-bg-layer"></div>
                            <div class="layer-content">
                            </div>
                        </div><!-- col-img-bg-img-two end-->
                        <img class="img-fluid ttm-equal-height-image w-100" src="{{ asset('webasset')}}/images/bg-image/col-bgimage-2.jpg" alt="bg-image">
                    </div>
                </div><!-- row end -->
            </div>
        </div>
    </div>
</section>
<!--padding_top_zero-section end-->


<!--team-section-->
<section class="ttm-row team-section ttm-bgcolor-grey clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-lg-8 m-auto">
                <!-- section title -->
                <div class="section-title title-style-center_text">
                    <div class="title-header">
                        <h3>TEAMMEMBERS</h3>
                        <h2 class="title">The Textiles <b>Experts! </b></h2>
                    </div>
                </div><!-- section title end -->
            </div>
        </div>
        <!-- row -->
        <div class="mb_15 row slick_slider" data-slick='{"slidesToShow": 3, "slidesToScroll": 1, "arrows":false, "dots":false, "autoplay":true, "infinite":true, "responsive": [{"breakpoint":1100,"settings":{"slidesToShow": 3}} , {"breakpoint":777,"settings":{"slidesToShow": 2}}, {"breakpoint":575,"settings":{"slidesToShow": 1}}]}'>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style1">
                    <div class="ttm-team-box-view-overlay">
                        {{-- <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('webasset')}}/images/team-member/team-img01.jpg" alt="image">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Michal Wincent</a></h5>
                        </div>
                        <p class="team-position">Product Designer</p>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style1">
                    <div class="ttm-team-box-view-overlay">
                        {{-- <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('webasset')}}/images/team-member/team-img02.jpg" alt="image">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Andrew Jackson</a></h5>
                        </div>
                        <p class="team-position">Material Designer</p>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style1">
                    <div class="ttm-team-box-view-overlay">
                        {{-- <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('webasset')}}/images/team-member/team-img03.jpg" alt="image">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">John Tyler</a></h5>
                        </div>
                        <p class="team-position">Senior Employee</p>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style1">
                    <div class="ttm-team-box-view-overlay">
                        {{-- <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('webasset')}}/images/team-member/team-img04.jpg" alt="image">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">James Pamment</a></h5>
                        </div>
                        <p class="team-position">Employee</p>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
            <div class="col-lg-4">
                <!-- featured-imagebox-team -->
                <div class="featured-imagebox featured-imagebox-team style1">
                    <div class="ttm-team-box-view-overlay">
                        {{-- <div class="featured-iconbox ttm-media-link">
                            <div class="media-block">
                                <ul class="social-icons">
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="facebook"><i class="fa fa-facebook"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="twitter"><i class="fa fa-twitter"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="google"><i class="fa fa-google-plus"></i></a></li>
                                    <li><a class="tooltip-top" href="#" rel="noopener" aria-label="linkedin"><i class="fa fa-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div> --}}
                        <div class="featured-thumbnail">
                            <img class="img-fluid" src="{{ asset('webasset')}}/images/team-member/team-img05.jpg" alt="image">
                        </div>
                    </div>
                    <div class="featured-content">
                        <div class="featured-title">
                            <h5><a href="team-details.html">Elina Shaikh</a></h5>
                        </div>
                        <p class="team-position">Account Manager</p>
                    </div>
                </div><!-- featured-imagebox-team end-->
            </div>
        </div>
    </div>
</section>
<!--team-section end-->
@endsection
