@php
 $routename = Route::currentRouteName();
@endphp

@extends('layouts.frontend.master')

@section('css')
<style>


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
<div class="container">
    <div class="row models">
        @if(count($users))
                @foreach($users as $users => $user)
		<div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
            
                    <div class="single-product">
                        <div class="product-img">
                            <a href="/public/model/{{$user->id}}">
                                <img src="/public/uploads/featuredimages/{{$user->featuredimage}}" alt="Product Title" />
                            </a>
                        </div>
                        <div class="product-dsc">
                            <h3><a href="#">{{$user->name}}</a></h3>
                            <div class="star-price">
                                <span class="price-left">View Profile</span>
                            </div>
                        </div>
                    </div>
                

        </div>
        @endforeach
                @else
                        <em>No Models</em> 
            @endif
	</div>
</div>
@endsection
