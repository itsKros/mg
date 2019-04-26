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
                            <h2 class="page-title">My Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- pages-title-end -->
@endsection
@section('content')
<div id="profile" class="container">
    <div class="row profile">
		<div class="col-md-3">
			<div class="profile-sidebar">
				<!-- SIDEBAR USERPIC -->
				<div class="profile-userpic">
					<img src="/public/uploads/avatars/{{$user->avatar}}" alt="{{$user->name}}" class="img-responsive" />
				</div>
				<!-- END SIDEBAR USERPIC -->
				<!-- SIDEBAR USER TITLE -->
				<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						{{$user->name}}
					</div>
				</div>
				<!-- END SIDEBAR USER TITLE -->
				
				<!-- SIDEBAR MENU -->
				<div class="profile-usermenu">
					<ul class="nav">
						<li class="{{ $routename == 'my-account' ? 'active' : '' }}">
							<a href="{{route('my-account')}}">
							<i class="glyphicon glyphicon-pencil"></i>
							Account Settings </a>
						</li>

						<li class="{{ $routename == 'my-profile' ? 'active' : '' }}">
							<a href="{{route('my-profile')}}">
							<i class="glyphicon glyphicon-user"></i>
							Profile Detail</a>
						</li>
                        <li class="{{ $routename == 'my-gallery' ? 'active' : '' }}">
							<a href="{{route('my-gallery')}}">
							<i class="glyphicon glyphicon-picture"></i>
							Gallery</a>
						</li>						
						
					</ul>
				</div>
				<!-- END MENU -->
			</div>
		</div>
		<div class="col-md-9 profile-content">
			@include('frontend.msgs.messages')
			<p class="pro-welcome">Hello <strong>{{$user->name}}</strong> (not <strong>{{$user->name}}</strong>? <a href="{{ route('logout') }}" class="link" data-toggle="tooltip" title="Logout" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a>) 
				<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
				</form>From your account dashboard you can edit your account and profile details.
			</p>
			<form class="form-horizontal" action="{{route('profiledetailchange')}}" method="POST">
					@csrf
				<div class="col-md-6">
					<div class="form-group">
						<label for="height" class="control-label">Height</label>
						<input type="text" class="form-control" id="height" name="height" placeholder="Enter height" value="{{$user->height}}">
					</div>
					<div class="form-group">
						<label for="weight" class="control-label">Weight</label>
						<input type="text" class="form-control" id="weight" name="weight" placeholder="Enter weight" value="{{$user->weight}}">
					</div>
					<div class="form-group">
						<label for="age" class="control-label">Age</label>
						<input type="text" class="form-control" id="age" name="age" placeholder="Enter Age" value="{{$user->age}}">
					</div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="haircolor" class="control-label">Hair Color</label>
						<input type="text" class="form-control" id="haircolor" name="haircolor" placeholder="Enter Hair Color" value="{{$user->hair_color}}">
					</div>
					<div class="form-group">
						<label for="eyecolor" class="control-label">Eyes Color</label>
						<input type="text" class="form-control" id="eyecolor" name="eyecolor" placeholder="Enter Hair Color" value="{{$user->eye_color}}">
					</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
						<label for="modeldetail" class="control-label">Model Detail</label>
						<textarea class="form-control form-control-line" name="modeldetail" id="modeldetail">{{$user->modeldetail}}</textarea>
					</div>
				</div>
				<hr>
				<div class="col-md-12">
					<div class="form-group">
						<input type="submit" class="btn btn-primary kbtn" value="Udpate">
					</div>
				</div>
			</form>
			
		</div>
	</div>
</div>
@endsection
@section('js')
<script src="https://cdn.ckeditor.com/4.11.4/basic/ckeditor.js"></script>
<script>
CKEDITOR.replace( 'modeldetail' );

</script>

@endsection
