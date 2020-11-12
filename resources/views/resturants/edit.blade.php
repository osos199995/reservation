@extends('layouts.admin2')
@section('styles')
@stop
@section('content')


    <div class="page-wrapper" style="min-height: 170px;">

        <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">create resturant</h3>
                </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item">Forms</li>
                        <li class="breadcrumb-item active">Form Basic</li>
                    </ol>
                </div>
                <div class="">
                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>
                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->

            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="card card-body">

                        <h6 class="card-subtitle"> Crate Resturant </h6>
                        {!! Form::model($resturant,['method'=>'PATCH','action'=>['ResturantsController@update',$resturant->id],'files'=>true]) !!}
                        @csrf_field
                        {{ method_field('patch') }}
                        <div class="form-group">
                            <label>Name <span class="help"> e.g. "KFC"</span></label>
                            <input type="text"  value="{{$resturant->name}}" name="name" class="form-control" placeholder="write name of resturant">
                        </div>
                        <div class="form-group">
                            <label for="example-email">Email <span class="help"> e.g. "example@gmail.com"</span></label>
                            <input type="email" value="{{$resturant->email}}"  name="email" class="form-control" placeholder="write your Email">
                        </div>
{{--                        <div class="form-group">--}}
{{--                            <label>Password</label>--}}
{{--                            <input type="password" name="password" class="form-control" placeholder="*********">--}}
{{--                        </div>--}}
                        <div class="form-group">
                            <label>phone</label>
                            <input type="text" value="{{$resturant->phone}}" name="phone" class="form-control" placeholder="write the phone number of resturant">
                        </div>
                        <div class="form-group row p-t-20">

                            <div class="col-sm-4">
                                @foreach($resturanttypes as $resturanttype)
                                    <div class="form-check">
                                        <label class="custom-control custom-radio">
                                            @if ($resturant->resturanttype_id ==$resturanttype->id)
                                                <input id="radio1" value="{{$resturanttype->id}}" checked name="type" type="radio" class="custom-control-input">
@else
                                                <input id="radio1" value="{{$resturanttype->id}}"  name="type" type="radio" class="custom-control-input">

                                            @endif
                                            <span class="custom-control-indicator"></span>
                                            <span class="custom-control-description">{{$resturanttype->name}}</span>
                                        </label>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="form-group">
                            <label>Resturant Categories</label>
                            <select name="category[]"  multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturantcategories as $resturantcategory)
                                    <option  value="{{$resturantcategory->id}}">{{$resturantcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Resturant options</label>
                            <select  name="option[]" multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturantoptions as $resturantoption)
                                    <option value="{{$resturantoption->id}}">{{$resturantoption->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <img style="width: 200px; height: 200px" src="{{asset('uploads/logos/'.$resturant->logo)}}">
                        </div>
                        <fieldset class="form-group">
                            <label>Resturant Logo</label>
                            <label class="custom-file d-block">
                                <input type="file" name="image" id="file" class="custom-file-input">
                                <span class="custom-file-control"></span>
                            </label>
                        </fieldset>

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">create</button>

                        {!! form::close() !!}
                    </div>
                </div>
            </div>
            <!-- /.row -->

            <!-- ============================================================== -->
            <!-- End Page Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar ps ps--theme_default" data-ps-id="4ae11a49-6f8e-8c38-721b-87038f63d6a4">
                <div class="slimscrollright">
                    <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                    <div class="r-panel-body">
                        <ul id="themecolors" class="m-t-20">
                            <li><b>With Light sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default" class="default-theme">1</a></li>
                            <li><a href="javascript:void(0)" data-theme="green" class="green-theme">2</a></li>
                            <li><a href="javascript:void(0)" data-theme="red" class="red-theme">3</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue" class="blue-theme">4</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple" class="purple-theme">5</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna" class="megna-theme">6</a></li>
                            <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme working">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme ">12</a></li>
                        </ul>
                        <ul class="m-t-20 chatonline">
                            <li><b>Chat option</b></li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><img src="../assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ps__scrollbar-x-rail" style="left: 0px; bottom: 0px;"><div class="ps__scrollbar-x" tabindex="0" style="left: 0px; width: 0px;"></div></div><div class="ps__scrollbar-y-rail" style="top: 0px; right: 0px;"><div class="ps__scrollbar-y" tabindex="0" style="top: 0px; height: 0px;"></div></div></div>
            <!-- ============================================================== -->
            <!-- End Right sidebar -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Container fluid  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <footer class="footer">
            © 2017 Admin Pro by wrappixel.com
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>


@endsection

@section('scripts')

@stop
