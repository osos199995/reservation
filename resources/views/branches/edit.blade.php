@extends('layouts.vendor')
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
                    <h3 class="text-themecolor">{{__('messages.edit')}} {{__('messages.resturants')}}</h3>
                </div>

                {{--                <div class="">--}}
                {{--                    <button class="right-side-toggle waves-effect waves-light btn-inverse btn btn-circle btn-sm pull-right m-l-10"><i class="ti-settings text-white"></i></button>--}}
                {{--                </div>--}}
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

                        <h6 class="card-subtitle"> {{__('messages.edit')}} {{__('messages.resturants')}} </h6>
                        {!! Form::model($branch,['method'=>'PATCH','action'=>['BranchesController@update',$branch->id],'files'=>true]) !!}

                        {{ method_field('patch') }}
                        @if (\Illuminate\Support\Facades\Session::get('locale') == 'en')
                     <div class="form-group">
                            <label>{{__('messages.Name')}} </label>
        <input type="text"  value="{{$branch->name_en}}"name="name_en" class="form-control" placeholder="write name of resturant">


                        </div>
           @else
                    <div class="form-group">
                                <label>{{__('messages.Name')}} </label>
    <input type="text"  value="{{$branch->name_ar}}" name="name_ar" class="form-control" placeholder="write name of resturant">


                            </div>
                        @endif

                        @if (\Illuminate\Support\Facades\Session::get('locale') == 'en')
                            <div class="form-group">
                                <label>{{__('messages.piece')}} </label>
                                <input type="text"  value="{{$branch->piece_en}}"name="piece_en" class="form-control" placeholder="write name of resturant">


                            </div>
                        @else
                            <div class="form-group">
                                <label>{{__('messages.piece')}} </label>
                                <input type="text"  value="{{$branch->piece_ar}}" name="piece_ar" class="form-control" placeholder="write name of resturant">


                            </div>
                        @endif

                        <div class="form-group">
                            <label>{{__('messages.longittude')}} </label>
                            <input type="text"  value="{{$branch->longitude}}" name="long" class="form-control" placeholder="write name of resturant">


                        </div>

                        <div class="form-group">
                            <label>{{__('messages.lattiude')}} </label>
                            <input type="text"  value="{{$branch->lattiude}}" name="latt" class="form-control" placeholder="write name of resturant">


                        </div>
                        <div class="form-group">
                            <label for="example-email">{{__('messages.Email')}} </label>
                            <input type="email" value="{{$branch->email}}"  name="email" class="form-control" placeholder="write your Email">
                        </div>
                        {{--                        <div class="form-group">--}}
                        {{--                            <label>Password</label>--}}
                        {{--                            <input type="password" name="password" class="form-control" placeholder="*********">--}}
                        {{--                        </div>--}}
                        <div class="form-group">
                            <label>{{__('messages.phone')}}</label>
                            <input type="text" value="{{$branch->phone}}" name="phone" class="form-control" placeholder="write the phone number of resturant">
                        </div>

                        <div class="form-group">
                            <label>{{__('messages.Resturant_Categories')}}</label>
                            <select name="category[]"  multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturant->Categories as $resturantcategory)
                                    <option  value="{{$resturantcategory->id}}">{{$resturantcategory->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>{{__('messages.Resturant_options')}}</label>
                            <select  name="option[]" multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturant->Options as $resturantoption)
                                    <option value="{{$resturantoption->id}}">{{$resturantoption->name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>{{__('messages.cities')}}</label>
                            <select  name="city"  class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->Name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div class="form-group">
                            <label>{{__('messages.cities')}}</label>
                            <select  name="area"  class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->Name}}</option>
                                @endforeach
                            </select>
                        </div>


                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{__('messages.edit')}}</button>

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
