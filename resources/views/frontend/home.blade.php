@extends('layouts.frontend.master')

@section('content')
        <!-- slider-section-start -->
        <section class="slider-main-area">
            <div class="main-slider an-si">
                <div class="bend niceties preview-2 hm-ver-1">
                    <div id="ensign-nivoslider-2" class="slides">	
                        <img src="{{asset('frontend/img/slider/1.png')}}" alt="" title="#slider-direction-3"  />
                        <img src="{{asset('frontend/img/slider/2.png')}}" alt="" title="#slider-direction-1"  />
                    </div>
                    <!-- direction 1 -->
                    <div id="slider-direction-3" class="t-cn slider-direction Builder">
                        <div class="slide-all">
                            <!-- layer 1 -->
                            <div class="layer-1">
                                <h2 class="title0">Meet</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Vin Armani</h2>
                            </div>
                          
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="#">View Profile Now</a>
                            </div>
                        </div>
                    </div>
                    <div id="slider-direction-1" class="t-cn slider-direction Builder">
                        <div class="slide-all slide2">
                             <!-- layer 1 -->
                             <div class="layer-1">
                                <h2 class="title0">Meet</h2>
                            </div>
                            <!-- layer 2 -->
                            <div class="layer-2">
                                <h2 class="title6">Vin Armani</h2>
                            </div>
                            
                            <!-- layer 3 -->
                            <div class="layer-3">
                                <a class="min1" href="#">View Profile Now</a>
                            </div>
                        </div>
                    </div>
			    </div>
            </div>
        </section>
		<!-- slider section end -->
        
        <!-- new-products section start -->
        <section class="new-products single-products section-padding-top section-padding-bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title">
                                <h3>{{$homeinfo->welcometitle}}</h3>
                                <div class="section-icon">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                </div>
                                <div class="wpara">
                                        {!!$homeinfo->welcomecontent!!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div id="new-products" class="owl-carousel product-slider owl-theme">
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>sale</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/2.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Jon Doe</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>new</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/4.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Vin Armani</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- single product end -->
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/6.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Steve Wolf</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/8.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Angelo</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>sale</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/10.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Product Title</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">View Profile</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                            <div class="col-xs-12">
                                <div class="single-product">
                                    <div class="product-img">
                                        <div class="pro-type">
                                            <span>new</span>
                                        </div>
                                        <a href="#">
                                            <img src="{{asset('frontend/img/products/1.jpg')}}" alt="Product Title" />
                                        </a>
                                    </div>
                                    <div class="product-dsc">
                                        <h3><a href="#">Product Title</a></h3>
                                        <div class="star-price">
                                            <span class="price-left">$52.00</span>
                                            <span class="star-right">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- single product end -->
                        </div>
                    </div>
                </div>
        </section>
        <!-- new-products section end -->
        
        <!-- Edge to Edge section start -->
        <section class="sectione">
            <div class="container-fluid e2e" style="border-top: 1px solid #cecece;">
                <div class="row">
                    <div class="col-md-6 edi first"></div>
                    <div class="col-md-6 edc">
                        <div class="section-title">
                            <h3>{{$homeinfo->ete_first_title}}</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div  class="wpara nor">
                                {!! $homeinfo->ete_first_content !!}
                        </div>

                        <div class="btnw">
                            <a href="#" class="btn btn-lg btn-primary kbtn">View All Montreal Gentleman</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Edge to Edge section end -->


        <!-- Edge to Edge section start -->
        <section class="sectione">
            <div class="container-fluid e2e">
                <div class="row">
                    <div class="col-md-6 edc">
                        <div class="section-title">
                            <h3>{{$homeinfo->ete_second_title}}</h3>
                            <div class="section-icon">
                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div  class="wpara nor">
                                {!!$homeinfo->ete_second_content!!}

                        </div>

                        <div class="btnw">
                            <a href="#" class="btn btn-lg btn-primary kbtn">Read More</a>
                        </div>
                    </div>

                    <div class="col-md-6 edi second"></div>
                </div>
            </div>
        </section>
        <!-- Edge to Edge section end -->


        <!-- testimonials section start -->
        <section class="testimonials stripe-parallax-bg" data-parallax-speed="0.5">
            <div class="overlay"></div>
            <div class="re-testimonials">
                <div class="container">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="section-title re-section-title">
                                <h3>TESTIMONIALS</h3>
                                <div class="section-icon re-section1">
                                    <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-12 col-md-10 col-text-center text-center">
                            <div id="testimonials" class="re-owl-carousel2 owl-carousel product-slider owl-theme">
                                <div class="single-testimonial">
                                    <div class="testimonial-dsc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt  ut labore et dolore magna aliqua. <br>Ut enim ad minim  veniam, quis nostrud exercitation ullamco  laboris nisi ut aliquip ex ea commodo consequat.<br> Duis aute irure dolor in reprehenderit in voluptate  velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="{{asset('frontend/img/woman-18.png')}}" alt="Title" /></a>
                                        <h4><a href="#">Raymond Morales</a></h4>
                                        <span>chairman</span>
                                    </div>
                                </div>
                                <!-- single testimonial item end -->
                                <div class="single-testimonial">
                                    <div class="testimonial-dsc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="{{asset('frontend/img/testimonial/2.png')}}" alt="Title" /></a>
                                        <h4><a href="#">Raymond Morales</a></h4>
                                        <span>chairman</span>
                                    </div>
                                </div>
                                <!-- single testimonial item end -->
                                <div class="single-testimonial">
                                    <div class="testimonial-dsc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                                    </div>
                                    <div class="testimonial-img">
                                        <a href="#"><img src="{{asset('frontend/img/testimonial/3.png')}}" alt="Title" /></a>
                                        <h4><a href="#">Raymond Morales</a></h4>
                                        <span>chairman</span>
                                    </div>
                                </div>
                                <!-- single testimonial item end -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonials section end -->
        
        
        <!-- Featured section start -->
        <section class="">
            <div class="brand-logo">
                <div class="barnd-bg">
                    <div class="container">

                            <div class="row">
                                    <div class="col-xs-12">
                                        <div class="section-title">
                                            <h3>Featured In</h3>
                                            <div class="section-icon">
                                                <i class="fa fa-dot-circle-o" aria-hidden="true"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        <div class="row text-center">
                            <div id="brand-logo" class="re-owl-carousel21 owl-carousel product-slider owl-theme">
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/1.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/2.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/3.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/4.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/5.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/6.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/1.png')}}" alt="" /></a>
                                    </div>
                                </div>
                                <div class="col-xs-12">
                                    <div class="single-brand">
                                        <a href="#"><img src="{{asset('frontend/img/brand/3.png')}}" alt="" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- brand section end -->

@endsection
