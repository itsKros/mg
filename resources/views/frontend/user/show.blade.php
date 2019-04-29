@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>
.section {
            padding-top: 90px;
        }
        /*banner*/
        .contact-img-area {
            background-color: transparent;
            background-image: url(img/bg-banner/bg-pagetitle.jpg);
            background-position: center top;
            background-repeat: no-repeat;
            padding: 200px 0 100px;
        }
        .contact-img-area {
            position: relative;
        }
        .contact-img-area::before {
            background: rgba(0, 0, 0, 0.6) none repeat scroll 0 0;
            content: "";
            height: 100%;
            left: 0;
            position: absolute;
            top: 0;
            width: 100%;
        }
        .contact-img-area a {
            color: #dedede;
        }
        , .contact-img-area p {
            color: #fff;
        }
        /*banner-title*/
        h2.page-title {
            color: #fff;
            font-size: 40px;
            font-style: normal;
            font-weight: normal;
            line-height: 40px;
            margin: 0;
            opacity: 1;
            padding: 0;
            text-transform: uppercase;
        }
        .single-service > p {
            line-height: 23px;
            padding: 0 25px;
        }
        /*slider*/
        .pro-img-tab-slider .item a img {
            background: #f1f1f1 none repeat scroll 0 0;
            border-radius: 0;
            margin: 30px 0 0;
            width: 100%;
        }
        .pro-img-tab-slider.indicator-style2.owl-theme .owl-controls .owl-buttons div.owl-prev {
            right: 96%;
        }
        .pro-img-tab-slider.indicator-style2.owl-theme .owl-controls .owl-buttons div {
            color: #b7b7b7;
            font-size: 17px;
            padding: 4px 11px;
            right: 10px;
            top: 41%;
        }
        .owl-theme .owl-controls .owl-buttons .owl-prev {
            left: 15px;
            right: auto;
        }
        .owl-theme .owl-controls .owl-buttons div {
            background: transparent none repeat scroll 0 0; 
            border: 1px solid #23aaab;
            border-radius: 0;
            color: #23aaab;
            font-size: 18px;
            height: 35px;
            margin: 2px;
            opacity: 0;
            padding: 0;
            position: absolute;
            right: 15px;
            text-align: center;
            top: 36%;
            transition: all 0.3s ease 0s;
            width: 35px;
        }
        .section .item {
            padding: 5px;
        }
        /*request form*/
        .request-bg {
            padding: 90px 0;
            background-color: #E8EAE9;
        }
       .wrap-input {
            width: 100%;
            position: relative;
            border: 1px solid #e6e6e6;
            border-radius: 2px;
            margin-bottom: 5px;
        }
        .wrap-input .input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 3px;
            border: none;
        }
        button.contact-form-btn {
            padding: 15px 20px;
            border-radius: 3px;
            border: none;
        }
        .kbtn {background: #272727;border: 0;padding: 15px 35px;}
        .kbtn:hover {background-color: #23aaab;}

</style>
@endsection

@section('pagetitle')
        <!-- pages-title-start -->
        <section class="contact-img-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="con-text">
                            <h2 class="page-title">Montreal Gentlemen</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection
@section('content')
    <!-- single peoduct content section start -->
    <section class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 none-si-pro">
                                <div class="pro-img-tab-content tab-content">
                                    <div class="tab-pane active" id="image-1">
                                        <div class="simpleLens-big-image-container">
                                            <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                data-lens-image="/public/uploads/featuredimages/{{$user->featuredimage}}" href="/public/uploads/featuredimages/{{$user->featuredimage}}">
                                                <img src="/public/uploads/featuredimages/{{$user->featuredimage}}" alt="" class="simpleLens-big-image">
                                            </a>
                                        </div>
                                    </div>


                                    <div class="tab-pane" id="image-main">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                    data-lens-image="/public/uploads/featuredimages/{{$user->featuredimage}}" href="/public/uploads/featuredimages/{{$user->featuredimage}}">
                                                    <img src="/public/uploads/featuredimages/{{$user->featuredimage}}" alt="" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div>

                                    @foreach($galleryitems as $galleryitem)
                                        <div class="tab-pane" id="image-{{$galleryitem->id}}">
                                            <div class="simpleLens-big-image-container">
                                                <a class="simpleLens-lens-image" data-lightbox="roadtrip"
                                                    data-lens-image="/public/uploads/galleries/{{$galleryitem->galleryitem}}" href="/public/uploads/featuredimages/{{$galleryitem->galleryitem}}">
                                                    <img src="/public/uploads/galleries/{{$galleryitem->galleryitem}}" alt="" class="simpleLens-big-image">
                                                </a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>


                                <div class="pro-img-tab-slider indicator-style2">
                                        
                                        <div class="item">
                                            <a href="#image-main" data-toggle="tab">
                                                <img src="/public/uploads/featuredimages/{{$user->featuredimage}}" alt="" />
                                            </a>
                                        </div>
                                        @foreach($galleryitems as $galleryitem)
                                            <div class="item">
                                                <a href="#image-{{$galleryitem->id}}" data-toggle="tab">
                                                    <img src="/public/uploads/galleries/{{$galleryitem->galleryitem}}" alt="" />
                                                </a>
                                            </div>
                                        @endforeach
                                        
                                    </div>

                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="">
                                    <div class="single-product-sec-head">
                                        <h1>{{$user->name}}</h1>
                                    </div>
                                    <div class="short-description">
                                        {!! $user->modeldetail !!}
                                        
                                    </div>
                                    <div class="single-product-sec-head">
                                            
                                        </div>
                                    <div class="col-md-6 k">
                                            <h5>Model Assets</h5>
                                        <table class="table table-bordered ma">
                                            <tbody>
                                            <tr>
                                            <td><strong>Height</strong></td>
                                            <td>{{$user->height}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Weight</strong></td>
                                            <td>{{$user->weight}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Age</strong></td>
                                            <td>{{$user->age}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Hair Color</strong></td>
                                            <td>{{$user->hair_color}}</td>
                                            </tr>
                                            <tr>
                                            <td><strong>Eyes Color</strong></td>
                                            <td>{{$user->eye_color}}</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="col-md-6 k">
                                            <h5>Model Price</h5>
                                            <table class="table table-bordered ma price">
                                                <tbody>
                                                @foreach($packages as $package)
                                                <tr>
                                                    <td><strong>1 hrs.</strong></td>
                                                    <td>$ {{$package->onehour}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>4 hrs</strong></td>
                                                    <td>$ {{$package->fourhour}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>8 hrs.</strong></td>
                                                    <td>$ {{$package->eighthour}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>24 hrs.</strong></td>
                                                    <td>$ {{$package->twentyfourhour}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Weekend</strong></td>
                                                    <td>$ {{$package->weekend}} USD</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Week</strong></td>
                                                    <td>$ {{$package->week}} USD</td>
                                                </tr>
                                                @endforeach
                                                </tbody>
                                            </table>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- quick view start -->
        <div class="quick-view modal fade in" id="quick-view">
            <div class="container">
                <div class="row">
                    <div id="view-gallery" class="owl-carousel product-slider owl-theme">
                        <div class="col-xs-12">
                            <div class="d-table">
                                <div class="d-tablecell">
                                    <div class="modal-dialog">
                                        <div class="main-view modal-content">
                                            <div class="modal-footer" data-dismiss="modal">
                                                <span>x</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-5">
                                                    <div class="quick-image">
                                                        <div class="single-quick-image tab-content text-center">
                                                            <div class="tab-pane  fade in active" id="sin-pro-1">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-2">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-3">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-4">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="quick-thumb">
                                                            <div class="nav nav-tabs">
                                                                <ul>
                                                                    <li><a data-toggle="tab" href="#sin-pro-1"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-2"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-3"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-4"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="quick-right">
                                                        <div class="quick-right-text">
                                                            <h3><strong>product name title</strong></h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has beenin the stand ard
                                                                dummy text ever since the 1500s, when an unknown printer
                                                                took a galley of type and scrames bled it make a type
                                                                specimen book. It has survived not only five centuries, but
                                                                also the leap into electronic type setting, remaining
                                                                essentially unchanged It was popularised in the 1960s with
                                                                the release of Letraset sheets containing Lorem Ipsum
                                                                passages.</p>
                                                            <div class="pro-img-tab-slider indicator-style2">
                                                                <div class="item"><a href="#image-1" data-toggle="tab"><img
                                                                            src="img/products/12.jpg" alt="" /></a></div>
                                                                <div class="item"><a href="#image-2" data-toggle="tab"><img
                                                                            src="img/products/13.jpg" alt="" /></a></div>
                                                                <div class="item"><a href="#image-3" data-toggle="tab"><img
                                                                            src="img/products/14.jpg" alt="" /></a></div>
                                                                <div class="item"><a href="#image-4" data-toggle="tab"><img
                                                                            src="img/products/15.jpg" alt="" /></a></div>
                                                                <div class="item"><a href="#image-5" data-toggle="tab"><img
                                                                            src="img/products/11.jpg" alt="" /></a></div>
                                                                <div class="item"><a href="#image-6" data-toggle="tab"><img
                                                                            src="img/products/10.jpg" alt="" /></a></div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-product item end -->
                        <div class="col-xs-12">
                            <div class="d-table">
                                <div class="d-tablecell">
                                    <div class="modal-dialog">
                                        <div class="main-view modal-content">
                                            <div class="modal-footer" data-dismiss="modal">
                                                <span>x</span>
                                            </div>
                                            <div class="row">
                                                <div class="col-xs-12 col-sm-5">
                                                    <div class="quick-image">
                                                        <div class="single-quick-image tab-content text-center">
                                                            <div class="tab-pane  fade in active" id="sin-pro-5">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-6">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-7">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                            <div class="tab-pane fade in" id="sin-pro-8">
                                                                <img src="img/quick-view/10.jpg" alt="" />
                                                            </div>
                                                        </div>
                                                        <div class="quick-thumb">
                                                            <div class="nav nav-tabs">
                                                                <ul>
                                                                    <li><a data-toggle="tab" href="#sin-pro-5"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-6"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-7"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                    <li><a data-toggle="tab" href="#sin-pro-8"> <img
                                                                                src="img/quick-view/10.jpg"
                                                                                alt="quick view" /> </a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-xs-12 col-sm-7">
                                                    <div class="quick-right">
                                                        <div class="quick-right-text">
                                                            <h3><strong>product name title</strong></h3>
                                                            <p>Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has beenin the stand ard
                                                                dummy text ever since the 1500s, when an unknown printer
                                                                took a galley of type and scrames bled it make a type
                                                                specimen book. It has survived not only five centuries, but
                                                                also the leap into electronic type setting, remaining
                                                                essentially unchanged It was popularised in the 1960s with
                                                                the release of Letraset sheets containing Lorem Ipsum
                                                                passages.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- single-product item end -->
                    </div>
                </div>
            </div>
        </div>
        <!-- quick view end -->
        <!-- request section start -->
        <section class="section">
            <div class="request-logo">
                <div class="request-bg">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="col-md-6">
                                    <h2>Request An Encounter</h2>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est
                                        tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis
                                        justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id
                                        nulla. Donec a neque libero. Pellentesque aliquet, sem eget laoreet ultrices, ipsum
                                        metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante.
                                        Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien
                                        libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet,
                                        consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi
                                        posuere nisl, in accumsan elit odio...</p>
                                </div>
                                <div class="col-md-6">
                                    <div class="wrap-contact">
                                        <form class="contact-form">
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="name" placeholder="Full Name *">
                                            </div>
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="email" placeholder="Email *">
                                            </div>
                                            <div class="wrap-input">
                                                <input class="input" type="text" name="phone" placeholder="Phone">
                                            </div>
                                            <div class="wrap-input">
                                                <textarea class="input" name="message" placeholder="Your message here..."></textarea>
                                            </div>
                                            <div class="container-contact-form-btn">
                                                <button class="btn btn-primary kbtn">Submit</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- request section end -->
@endsection