@extends('layouts.backend.master')

@section('content')
<div class="page-wrapper" style="min-height: 294px;">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-12 align-self-center">
                <h3 class="text-themecolor m-b-0 m-t-0">
                    @if ($user->status == 0)
                    <form action="{{route('user.status_approve', ['user'=>$user->id])}}" method="POST" style="float: left;">
                        {{ csrf_field() }}
                        {{-- {{ method_field('POST') }} --}}
                        <input type="submit" class="btn btn-primary" value="Approve"/>
                    </form>
                    @elseif ($user->status == 1)
                    <form action="{{route('user.status_disapprove', ['user'=>$user->id])}}" method="POST" style="float: left;">
                        {{ csrf_field() }}
                        {{-- {{ method_field('POST') }} --}}
                        <input type="submit" class="btn btn-success" value="Disapprove"/>
                    </form>
                    @endif
                    <a href="{{route('users.index')}}" class="btn btn-danger" style="float:right;">Go Back</a></h3>
            </div>
        </div>
        @include('frontend.msgs.messages')
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row el-element-overlay">
            
            <div class="col-lg-3">
                <div class="card">
                    <div class="el-card-item">
                        <div class="el-card-avatar el-overlay-1"> 
                            <img src="/public/uploads/avatars/{{$user->avatar}}" alt="{{$user->name}}">
                        </div>
                        <div class="el-card-content">
                            <h3 class="box-title">{{$user->name}}</h3> <small>{{$user->email}}</small>
                            <br> 
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="el-card-item" style="padding-bottom:0;">
                        <div class="el-card-content">
                          <div class="table-responsive">
                            <table class="table" style="text-align: left;">
                                <tbody>
                                    <tr>
                                        <td><strong>Status</strong></td>
                                        <td>
                                            @if ($user->status == 1)
                                                <span class="label label-primary">Approved</span>
                                            @elseif ($user->status == 0)
                                                <span class="label label-danger">Not approved</span>
                                            @endif
                                        </td>
                                    </tr>
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-9">
                    
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                          <div class="col-3 gall-thumb">
                            <h4>Featured Image</h4>
                            <img src="/public/uploads/featuredimages/{{$user->featuredimage}}" alt="{{$user->name}}" class="userfeatured img-responsive"/>
                          </div>
                          <div class="col-9">
                                <h4>Description</h4>
                                <div class="desc">
                                  @if($user->modeldetail)
                                    {!! $user->modeldetail !!}
                                  @else
                                    No description
                                  @endif
                                </div>
                          </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Gallery</h4>
                            </div> 
                            @if($user->$galleryitems)
                                @foreach($galleryitems as $galleryitem)
                                    <div class="col-md-3 gall-thumb">
                                        <img src="/public/uploads/galleries/{{$galleryitem->galleryitem}}" alt="" class="img-responsive thumb"/>
                                    </div>
                                @endforeach
                            @else
                                <div class="col-md-3 gall-thumb">
                                No gallery images
                                </div>
                            @endif
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End PAge Content -->
    <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
   

           
@endsection

           