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
                    <div class="col-md-5 col-8 align-self-center">
                        <h3 class="text-themecolor m-b-0 m-t-0">Welcome To Monteral Gentleman CMS</h3>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                
                <div class="row price">
                    <div class="col-12">
                        <h3 class="m-b-0">Packages </h3>
                        <p class="text-muted m-t-0 font-12">
                            Edit mod
                        </p>
                    </div>
                    <!--One Hour Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">One Hour Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="onehour">Add Price</label>
                                            <input type="text" id="onehour" name="onehour" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--One Hour Ends-->


                    <!--For Hour Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Four Hours Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="fourhour">Add Price</label>
                                            <input type="text" id="fourhour" name="fourhour" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Four Hour Ends-->

                    <!--For Eight Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Eight Hours Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="fourhour">Add Price</label>
                                            <input type="text" id="eighthour" name="eighthour" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Four Eight Ends-->

                    <!--For twentyfour Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">24 Hours Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="twentyfourhour">Add Price</label>
                                            <input type="text" id="twentyfourhour" name="twentyfourhour" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Four Eight Ends-->

                    <!--For Weekend Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Weekend Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="weekend">Add Price</label>
                                            <input type="text" id="weekend" name="weekend" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Four Weekend Ends-->

                    <!--For Week Start-->
                    <div class="col-md-4 package">
                        <div class="card card-outline-inverse">
                            <div class="card-header">
                                <h4 class="m-b-0 text-white">Week Rate</h4></div>
                            <div class="card-body">
                                <form action="{{route('homeinfo.update', ['homeinfo' => 1])}}" method="POST" class="form-horizontal form-material row">
                                    {{csrf_field()}}
                                    {{ method_field('PUT')}}
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <label for="week">Add Price</label>
                                            <input type="text" id="week" name="week" value="" class="form-control form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-12">
                                            <button class="btn btn-inverse">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!--Four Week Ends-->
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