@extends('layouts.admin2')
@section('styles')
@stop
@section('content')


    <div class="page-wrapper" style="min-height: 170px;">
        @if (\Illuminate\Support\Facades\Session::has('success'))
            <div class="alert alert-success alert-rounded">
                {{ Session::get('success') }}
            </div>
        @elseif(Session::has('danger'))
            <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif
    <!-- ============================================================== -->
        <!-- Container fluid  -->
        <!-- ============================================================== -->
        <div class="container-fluid">
            <!-- ============================================================== -->
            <!-- Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-themecolor">{{__('messages.edit').' '}} {{__('messages.Resturant_types')}}</h3>
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

                        {!! Form::model($resturanttype,['method'=>'PATCH','action'=>['ResturantTypes@update',$resturanttype->id],'files'=>true]) !!}
                        @if (\Illuminate\Support\Facades\Session::get('locale')=='en')
                            <div class="form-group">
                                <label>{{__('messages.Name')}}</label>
                                <input type="text" class="form-control"
                                       value="{{$resturanttype->name}}"
                                       name="name"  required>


                            </div>
                        @elseif (\Illuminate\Support\Facades\Session::get('locale')=='ar')
                            <div class="form-group">
                                <label>{{__('messages.Name_ar')}}</label>
                                <input type="text" class="form-control" name="name_ar" value="{{$resturanttype->name_ar}}"   required>
                            </div>


                            {{--                            <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>--}}
                        @endif
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
