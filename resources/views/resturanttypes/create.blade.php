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
                    <h3 class="text-themecolor">create resturant type</h3>
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

                        {!! Form::open(['method'=>'post','route'=>['resturants-types-store'],'files'=>true]) !!}
                        <div class="form-group">
                            <label>Name<span class="help"> e.g. "pack up"</span></label>
                            <input type="text" class="form-control" name="name"  placeholder="pack up" required>
                        </div>
                        <button type="submit" class="btn btn-success waves-effect waves-light m-r-10">create</button>
                        <button type="submit" class="btn btn-inverse waves-effect waves-light">Cancel</button>
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
