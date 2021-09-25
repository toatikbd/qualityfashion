@extends('layouts.app')
@section('title', 'Fabric Printing')
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
                        <span>Fabric Printing</span>
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
                    <div class="ttm-service-description">
                        <h3>Manufacturer of denim fabrics services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five.</p>
                        <div class="padding_top20 padding_bottom20">
                            <div class="ttm_fatured_image-wrapper">
                                <img class="img-fluid" src="{{ asset('webasset')}}/images/services/services-01-1200x800.jpg" alt="services-1">
                            </div>
                        </div>
                        <div class="padding_top15 padding_bottom5">
                            <h3>The rayon fabrics wholesaler</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s, when an unknown printer took a galley.</p>
                            <div class="row">
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Lorem ipsum dolor sit amet</div>
                                        </li>
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur</div>
                                        </li>
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Cursus metus aliquam eleifend mi in.</div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="col-md-6">
                                    <ul class="ttm-list ttm-list-style-icon ttm-list-icon-color-skincolor margin_top15">
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Maecenas volutpat blandit aliquam etiam erat</div>
                                        </li>
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Lorem ipsum dolor sit amet, consectetur</div>
                                        </li>
                                        <li><i class="ti ti-check"></i>
                                            <div class="ttm-list-li-content">Donec et odio pellentesque diam volutpat</div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="padding_top30 padding_bottom15">
                            <h3>Provide In-house trainings</h3>
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <div class="ttm_single_image-wrapper text-left padding_top15">
                                        <img class="img-fluid" src="{{ asset('webasset')}}/images/single-img-10.jpg" alt="single-img-10">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <div class="ttm_single_image-wrapper text-left padding_top15">
                                        <img class="img-fluid" src="{{ asset('webasset')}}/images/single-img-11.jpg" alt="single-img-11">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="padding_top30 mb_15">
                            <h3>Understand your business</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard dummy text ever since the 1500s,&nbsp;<u>when an unknown printer took a galley</u>&nbsp;of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- row end -->
    </div>
</div>
@endsection