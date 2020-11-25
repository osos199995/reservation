@extends('layouts.vendor')
@section('styles')
@stop
@section('content')
    @if (Session::has('success'))
        <div class="alert alert-success">{{ Session::get('success') }}</div>
    @elseif(Session::has('danger'))
        <div class="alert alert-danger">{{ Session::get('danger') }}</div>
    @endif
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
                    <h3 class="text-themecolor">{{__('messages.branches')}}</h3>
                </div>
                {{--                <div class="col-md-7 align-self-center">--}}
                {{--                    <ol class="breadcrumb">--}}
                {{--                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>--}}
                {{--                        <li class="breadcrumb-item">pages</li>--}}
                {{--                        <li class="breadcrumb-item active">Table basic</li>--}}
                {{--                    </ol>--}}
                {{--                </div>--}}
                {{--                <div>--}}
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
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            {{--                            <h4 class="card-title">Data Export</h4>--}}
                            {{--                            <h6 class="card-subtitle">Export data to Copy, CSV, Excel, PDF &amp; Print</h6>--}}
                            <div class="table-responsive m-t-40">
                                {{--                                <div id="example23_wrapper" class="dataTables_wrapper">--}}
                                <div class="dt-buttons">
                                    {{--                                        <a class="dt-button buttons-copy buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Copy</span></a>--}}
                                    {{--                                        <a class="dt-button buttons-csv buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>CSV</span></a>--}}
                                    {{--                                        <a class="dt-button buttons-excel buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>Excel</span></a>--}}
                                    {{--                                        <a class="dt-button buttons-pdf buttons-html5" tabindex="0" aria-controls="example23" href="#"><span>PDF</span></a>--}}
                                    {{--                                        <a class="dt-button buttons-print" tabindex="0" aria-controls="example23" href="#"><span>Print</span></a>--}}
                                </div>

                                <table id="example23" class="display nowrap table table-hover table-striped table-bordered dataTable" cellspacing="0" width="100%" role="grid" aria-describedby="example23_info" style="width: 100%;">
                                    <thead>
                                    <th rowspan="1" colspan="1">{{__('messages.Name')}}</th>
                                    <th rowspan="1" colspan="1">{{__('messages.Email')}}</th>
                                    <th rowspan="1" colspan="1">{{__('messages.phone')}}</th>

                                    <th rowspan="1" colspan="1">{{__('messages.Status')}}</th>
                                    <th rowspan="1" colspan="1">{{__('messages.Actions')}}</th>
                                    </thead>





                                    <tbody>
                                    @foreach($branches as $branch)
                                        <tr role="row" class="odd">
                                            <td>{{$branch->Name}}</td>
                                            <td>{{$branch->email}}</td>
                                            <td>{{$branch->phone}}</td>

                                            <td>{{$branch->is_ative==0?'Active':'Deactive'}}</td>
                                            <td>
                                                <a class="btn btn-info" href="{{route('branches-show',$branch->id)}}" >{{__('messages.show')}}</a>
                                                <a class="btn btn-warning" href="{{route('branches-edit',$branch->id)}}" >{{__('messages.edit')}}</a>
                                            </td>
                                        </tr>
                                    @endforeach




                                    </tbody>
                                </table>
                                {{--                                    <div class="dataTables_info" id="example23_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div>--}}
                                {{--                                    <div class="dataTables_paginate paging_simple_numbers" id="example23_paginate">--}}
                                {{--                                        <a class="paginate_button previous disabled" aria-controls="example23" data-dt-idx="0" tabindex="0" id="example23_previous">Previous</a>--}}
                                {{--                                        <span><a class="paginate_button current" aria-controls="example23" data-dt-idx="1" tabindex="0">1</a><a class="paginate_button " aria-controls="example23" data-dt-idx="2" tabindex="0">2</a>--}}
                                {{--                                            <a class="paginate_button " aria-controls="example23" data-dt-idx="3" tabindex="0">3</a><a class="paginate_button " aria-controls="example23" data-dt-idx="4" tabindex="0">4</a>--}}
                                {{--                                            <a class="paginate_button " aria-controls="example23" data-dt-idx="5" tabindex="0">5</a><a class="paginate_button " aria-controls="example23" data-dt-idx="6" tabindex="0">6</a></span>--}}
                                {{--                                        <a class="paginate_button next" aria-controls="example23" data-dt-idx="7" tabindex="0" id="example23_next">Next</a></div>--}}
                                {{--                                </div>--}}
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- ============================================================== -->
            <!-- End PAge Content -->
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
        <footer class="footer"> © 2017 Admin Pro by wrappixel.com </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>

@endsection

@section('scripts')
    <script src="{{asset('/assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
    <!-- start - This is for export functionality only -->
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.flash.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js"></script>
    <script src="https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js"></script>
    <script src="https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#myTable').DataTable();
            $(document).ready(function() {
                var table = $('#example').DataTable({
                    "columnDefs": [{
                        "visible": false,
                        "targets": 2
                    }],
                    "order": [
                        [2, 'asc']
                    ],
                    "displayLength": 25,
                    "drawCallback": function(settings) {
                        var api = this.api();
                        var rows = api.rows({
                            page: 'current'
                        }).nodes();
                        var last = null;
                        api.column(2, {
                            page: 'current'
                        }).data().each(function(group, i) {
                            if (last !== group) {
                                $(rows).eq(i).before('<tr class="group"><td colspan="5">' + group + '</td></tr>');
                                last = group;
                            }
                        });
                    }
                });
                // Order by the grouping
                $('#example tbody').on('click', 'tr.group', function() {
                    var currentOrder = table.order()[0];
                    if (currentOrder[0] === 2 && currentOrder[1] === 'asc') {
                        table.order([2, 'desc']).draw();
                    } else {
                        table.order([2, 'asc']).draw();
                    }
                });
            });
        });
        $('#example23').DataTable({
            dom: 'Bfrtip',
            buttons: [
                'copy', 'csv', 'excel', 'pdf', 'print'
            ]
        });
    </script>
@stop
