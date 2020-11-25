@extends('layouts.vendor')
@section('styles')
@stop
@section('content')


    <div class="page-wrapper" style="min-height: 170px;">

        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{$branch->Name}}</h3>
                </div>

            </div>
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Start Page Content -->
            <!-- ============================================================== -->
            <!-- Row -->
            <div class="row">
                <!-- Column -->
                <div class="col-lg-4 col-xlg-3 col-md-5">

                    <div class="card">
                        <div class="card-body"> <small class="text-muted">{{$branch->Name}} </small>
                            <small class="text-muted p-t-30 db">{{__('messages.Email')}}</small>    <h6>{{$branch->email}}</h6>
                            <small class="text-muted p-t-30 db">{{__('messages.phone')}}</small>  <h6>{{$branch->phone}}</h6>
                            {{--                            <h6>71 Pilgrim Avenue Chevy Chase, MD 20815</h6>--}}
                            {{--                            <div class="map-box">--}}
                            {{--                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>--}}
                            {{--                            </div> <small class="text-muted p-t-30 db">Social Profile</small>--}}
                            {{--                            <br>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>--}}
                        </div>
                    </div>
                </div>
                <!-- Column -->
                <!-- Column -->
                <div class="col-lg-8 col-xlg-9 col-md-7">
                    <div class="card">
                        <h2>{{__('messages.resturants')}} :</h2>
                        <div class="card-body"> <small class="text-muted">{{$branch->Name}} </small>
                            <small class="text-muted p-t-30 db">{{__('messages.Email')}}</small>    <h6>{{$branch->email}}</h6>
                            <small class="text-muted p-t-30 db">{{__('messages.phone')}}</small>  <h6>{{$branch->phone}}</h6>
                            <small class="text-muted p-t-30 db">{{__('messages.type')}}</small>  <h6>{{$branch->Type->name}}</h6>
                            <small class="text-muted p-t-30 db">{{__('messages.categories')}} :</small>
                            @foreach($branch->Categories as $category)

                                <h6>{{$category->name}}</h6>

                            @endforeach
                            <small class="text-muted p-t-30 db">Options :</small>
                            @foreach($branch->Options as $option)

                                <h6>{{$option->name}}</h6>

                            @endforeach
                            {{--                            <div class="map-box">--}}
                            {{--                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>--}}
                            {{--                            </div> <small class="text-muted p-t-30 db">Social Profile</small>--}}
                            {{--                            <br>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-facebook"></i></button>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-twitter"></i></button>--}}
                            {{--                            <button class="btn btn-circle btn-secondary"><i class="fa fa-youtube"></i></button>--}}
                        </div>
                    </div>
                </div>
                <!-- Column -->
            </div>
            <!-- Row -->
            <!-- ============================================================== -->
            <!-- End PAge Content -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Right sidebar -->
            <!-- ============================================================== -->
            <!-- .right-sidebar -->
            <div class="right-sidebar ps ps--theme_default" data-ps-id="3e03500c-b832-a535-07f7-0d3abbf0c23f">
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
                            <li><a href="javascript:void(0)" data-theme="default-dark" class="default-dark-theme">7</a></li>
                            <li><a href="javascript:void(0)" data-theme="green-dark" class="green-dark-theme">8</a></li>
                            <li><a href="javascript:void(0)" data-theme="red-dark" class="red-dark-theme">9</a></li>
                            <li><a href="javascript:void(0)" data-theme="blue-dark" class="blue-dark-theme">10</a></li>
                            <li><a href="javascript:void(0)" data-theme="purple-dark" class="purple-dark-theme">11</a></li>
                            <li><a href="javascript:void(0)" data-theme="megna-dark" class="megna-dark-theme working">12</a></li>
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
