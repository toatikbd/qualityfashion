@extends('layouts.app')
@section('title', 'Fabric Dyeing')
@section('content')

<!-- page-title -->
<div class="ttm-page-title-row ttm-bg ttm-bgimage-yes ttm-bgcolor-darkgrey clearfix">
    <div class="ttm-row-wrapper-bg-layer ttm-bg-layer"></div>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="ttm-page-title-row-inner">
                    <div class="page-title-heading">
                        <h2 class="title">Services</h2>
                    </div>
                    <div class="breadcrumb-wrapper">
                        <span>
                            <a title="home" href="{{('/')}}">Home</a>
                        </span>
                        <span>Fabric Dyeing</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>                    
<!-- page-title end -->
<div class="ttm-row sidebar ttm-sidebar-left clearfix">
    <div class="container">
        <!-- row -->
        <div class="row">
            {{-- service aside bar --}}
            @include('layouts.partial.service-aside')
            {{-- end service aside bar --}}
            <div class="col-lg-8 content-area">
                <div class="ttm-service-single-content-area">
                    <div class="ttm-featured-wrapper margin_bottom40">
                        <img class="img-fluid" src="{{ asset('webasset')}}/images/services/services-05-1200x800.jpg" alt="services-05">
                    </div>
                    <div class="ttm-service-description">
                        <h3>About Dyeing Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, <u>when an unknown printer took a galley</u> of type and scrambled it to make a type specimen book.</p>
                        <p>There re many variaions of passags of Lorem Ipsum available, but majority have suffeed alteration in some ,by injectd humour, or randomised ws which ly believable.</p>
                        <div class="ttm-horizontal_sep width-100 margin_top35 margin_bottom35"></div>
                        <div class="row">
                            <div class="col-md-8">
                                <h3>Fully Trained Employees</h3>
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuswqo doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo et inventore veritatis et quasi architecto beatae vitae <u>dicta sunt explicabo.</u> loream inventore veritatis et quasi architecto beatae vitae dicta sunt sed ut the perspiciatis unde omnis quae ab illo et inventore veritatis et quasi architecto beatae <span class="ttm-textcolor-skincolor"><a href="#">vitae dicta</a></span> sunt explicabo. loream inventore veritatis</p>
                                {{-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top15" href="services-1.html">read more</a> --}}
                            </div>
                            <div class="col-md-4">
                                <div class="res-767-margin_top30">
                                    <img class="img-fluid auto_size" width="238" height="294" src="{{ asset('webasset')}}/images/single-img-12.jpg" alt="image"> 
                                </div>
                            </div>
                        </div>
                        <div class="ttm-horizontal_sep width-100 margin_top35 margin_bottom35"></div>
                        <div class="row">
                            <div class="col-md-4">
                                <img class="img-fluid auto_size" width="494" height="560" src="{{ asset('webasset')}}/images/single-img-13.jpg" alt="image"> 
                            </div>
                            <div class="col-md-8">
                                <div class="res-767-margin_top30">
                                    <h3>Quality Maintain Every Time</h3>
                                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accuswqo doloremque laudantium.</p>
                                    <p>et quasi architecto beatae vitae dicta sunt explicabo. loream inventore veritatis et quasi architecto beatae vitae dicta sunt sed ut the perspiciatis unde omnis iste natus error sit voluptatem.</p>
                                    {{-- <a class="ttm-btn ttm-btn-size-md ttm-btn-shape-square ttm-btn-style-border ttm-btn-color-dark margin_top15" href="services-2.html">read more</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</div>
@endsection