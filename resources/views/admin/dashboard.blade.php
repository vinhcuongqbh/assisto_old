@extends('layouts.master')

@section('title', 'Dashboard')

@section('heading')
    {{ __('dashboard') }}
@stop

@section('content')    
    <div class="container-fluid">
        <div class="asabo-main-body">
            <div class="asabo-box">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-default">
                            <div class="card-body" style="text-align:center">
                                <p class="text-center">{{ __('slogan') }}</p>
                                <b>{{ $setting->slogan }}</b>
                            </div>
                            <!-- /.card-body -->
                        </div>
                    </div>
                    <!-- /.col-md-6 -->
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/center">{{ __('centerManagement') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/user">{{ __('userManagement') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/store">{{ __('storeManagement') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/accident">{{ __('accidentReports') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/track">{{ __('trackReports') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/setting/slogan">{{ __('slogan') }}</a>
                        </div>
                        <div class="form-group">
                            <a class="btn bg-olive text-white w-100 btn-lg" href="/admin/setting/guide">{{ __('guideManagement') }}</a>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
            <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
    </div><!-- /.container-fluid -->
@stop

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="/vendor/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="/vendor/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="/vendor/datatables-buttons/css/buttons.bootstrap4.min.css">
@stop

@section('js')
    <script src="/vendor/jquery/jquery.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="/vendor/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
    <script src="/vendor/datatables-responsive/js/dataTables.responsive.min.js"></script>
    <script src="/vendor/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
    <script src="/vendor/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="/vendor/jszip/jszip.min.js"></script>
    <script src="/vendor/pdfmake/pdfmake.min.js"></script>
    <script src="/vendor/pdfmake/vfs_fonts.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="/vendor/datatables-buttons/js/buttons.colVis.min.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            $("#user-table").DataTable({
                "responsive": true,
                "lengthChange": false,
                "pageLength": 25,
                "searching": false,
                "autoWidth": false,
                "ordering": false,
                //"buttons": ["copy", "excel", "pdf", "print"],
                // "language": {
                //     "search": "T??m ki???m:",
                //     "emptyTable": "Kh??ng c?? d??? li???u ph?? h???p",
                //     "zeroRecords": "Kh??ng t??m th???y d??? li???u ph?? h???p",
                //     "info": "Hi???n th??? _START_ - _END_ trong t???ng _TOTAL_ k???t qu???",
                //     "infoEmpty": "",
                //     "infoFiltered": "(T??m ki???m trong t???ng _MAX_ b???n ghi)",
                //     "paginate": {
                //         "first": "?????u ti??n",
                //         "last": "Cu???i c??ng",
                //         "next": "Sau",
                //         "previous": "Tr?????c"
                //     },
                // },
            }).buttons().container().appendTo('#user-table_wrapper .col-md-6:eq(0)');
        });
    </script>
@stop
