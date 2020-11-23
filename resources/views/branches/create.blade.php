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
                    <h3 class="text-themecolor">{{__('messages.create_resturant')}}</h3>


                </div>
                {{--                <div class="col-md-7 align-self-center">--}}
                {{--                    <ol class="breadcrumb">--}}
                {{--                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>--}}
                {{--                        <li class="breadcrumb-item">Forms</li>--}}
                {{--                        <li class="breadcrumb-item active">Form Basic</li>--}}
                {{--                    </ol>--}}
                {{--                </div>--}}
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
                <div class="col-md-12">
                    <div class="card card-body">

                        <h6 class="card-subtitle"> {{__('messages.create_branch')}} </h6>
                        {!! Form::open(['method'=>'post','route'=>['branches-store'],'files'=>true]) !!}
                        <div  @if (\Illuminate\Support\Facades\App::getLocale() == 'ar')

                              style="float: left" @endif
                              @if (\Illuminate\Support\Facades\App::getLocale() == 'en')

                              style="float: right" @endif
                              class="form-group col-md-6">
                            <label>{{__('messages.Name')}}  <span class="help"> {{__('messages.e.g. "KFC"')}}</span></label>
                            <input type="text"  name="name_en" class="form-control" placeholder="">
                            @if ($errors->has('name_en'))
                                <div class="alert alert-danger">{{ $errors->first('name') }}</div>
                            @endif
                        </div>
                        <div   class="form-group col-md-6">
                            <label>{{__('messages.Name_ar')}}  <span class="help"> {{__('messages.e.g. "KFC"')}}</span></label>
                            <input type="text"  name="name_ar" class="form-control" placeholder="">
                            @if ($errors->has('name_ar'))
                                <div class="alert alert-danger">{{ $errors->first('name_ar') }}</div>
                            @endif
                        </div>
                        <div   class="form-group col-md-6">
                            <label>{{__('messages.long')}}  <span class="help"> </span></label>
                            <input type="text"  name="long" class="form-control" placeholder="">
                            @if ($errors->has('long'))
                                <div class="alert alert-danger">{{ $errors->first('long') }}</div>
                            @endif
                        </div>
                        <div   class="form-group col-md-6">
                            <label>{{__('messages.latt')}}  <span class="help"> </span></label>
                            <input type="text"  name="latt" class="form-control" placeholder="">
                            @if ($errors->has('latt'))
                                <div class="alert alert-danger">{{ $errors->first('latt') }}</div>
                            @endif
                        </div>
                        <div   class="form-group col-md-6">
                            <label>{{__('messages.piece_en')}}  <span class="help"> </span></label>
                            <input type="text"  name="piece_en" class="form-control" placeholder="">
                            @if ($errors->has('piece_en'))
                                <div class="alert alert-danger">{{ $errors->first('piece_en') }}</div>
                            @endif
                        </div>
                        <div   class="form-group col-md-6">
                            <label>{{__('messages.piece_ar')}}  <span class="help"> </span></label>
                            <input type="text"  name="piece_en" class="form-control" placeholder="">
                            @if ($errors->has('piece_ar'))
                                <div class="alert alert-danger">{{ $errors->first('piece_ar') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="example-email">{{__('messages.Email')}}</label>
                            <input type="email"  name="email" class="form-control" placeholder="">
                            @if ($errors->has('email'))
                                <div class="alert alert-danger">{{ $errors->first('email') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{__('messages.Password')}}</label>
                            <input type="password" name="password" class="form-control" placeholder="*********">
                            @if ($errors->has('password'))
                                <div class="alert alert-danger">{{ $errors->first('password') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{__('messages.phone')}}</label>
                            <input type="text" name="phone" class="form-control" placeholder="{{__('messages.write the phone number of resturant')}}">
                            @if ($errors->has('phone'))
                                <div class="alert alert-danger">{{ $errors->first('phone') }}</div>
                            @endif
                        </div>




                        <div class="form-group row p-t-20">

{{--                            <div class="col-sm-4">--}}
{{--                                @foreach($resturanttypes as $resturanttype)--}}
{{--                                    <div class="form-check">--}}
{{--                                        <label class="custom-control custom-radio">--}}
{{--                                            <input id="radio1" value="{{$resturanttype->id}}" name="type" type="radio" class="custom-control-input">--}}
{{--                                            <span class="custom-control-indicator"></span>--}}
{{--                                            <span class="custom-control-description">{{$resturanttype->name}}</span>--}}
{{--                                            @if ($errors->has('type'))--}}
{{--                                                <div class="alert alert-danger">{{ $errors->first('type') }}</div>--}}
{{--                                            @endif--}}
{{--                                        </label>--}}
{{--                                    </div>--}}
{{--                                @endforeach--}}
{{--                            </div>--}}
                        </div>
                        <div class="form-group">
                            <label>{{__('messages.Resturant_Categories')}}</label>
                            <select name="category[]"  multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturantCategories as $resturantcategory)
                                    <option  value="{{$resturantcategory->id}}">{{$resturantcategory->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('category'))
                                <div class="alert alert-danger">{{ $errors->first('category') }}</div>
                            @endif
                        </div>

                        <div class="form-group">
                            <label>{{__('messages.Resturant_options')}}</label>
                            <select  name="option[]" multiple="multiple" class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($resturantOptions as $resturantoption)
                                    <option value="{{$resturantoption->id}}">{{$resturantoption->name}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('option'))
                                <div class="alert alert-danger">{{ $errors->first('option') }}</div>
                            @endif
                        </div>


                        <div class="form-group">
                            <label>{{__('messages.cities')}}</label>
                            <select  name="city"  class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($cities as $city)
                                    <option value="{{$city->id}}">{{$city->name_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('city'))
                                <div class="alert alert-danger">{{ $errors->first('city') }}</div>
                            @endif
                        </div>
                        <div class="form-group">
                            <label>{{__('messages.areas')}}</label>
                            <select  name="area"  class="custom-select col-12" id="inlineFormCustomSelect">
                                @foreach($areas as $area)
                                    <option value="{{$area->id}}">{{$area->name_en}}</option>
                                @endforeach
                            </select>
                            @if ($errors->has('area'))
                                <div class="alert alert-danger">{{ $errors->first('area') }}</div>
                            @endif
                        </div>

{{--                        <fieldset class="form-group">--}}

{{--                            <label>{{__('messages.Resturant_Logo')}}</label>--}}
{{--                            <label class="custom-file d-block">--}}
{{--                                <input type="file" name="image" id="file" class="custom-file-input">--}}
{{--                                @if ($errors->has('image'))--}}
{{--                                    <div class="alert alert-danger">{{ $errors->first('image') }}</div>--}}
{{--                                @endif--}}
{{--                                <span class="custom-file-control"></span>--}}
{{--                            </label>--}}
{{--                        </fieldset>--}}

                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">{{__('messages.create')}}</button>

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
