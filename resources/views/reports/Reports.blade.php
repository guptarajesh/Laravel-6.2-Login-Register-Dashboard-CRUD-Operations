@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
       
	   
@section('css_before')
    <!-- Page JS Plugins CSS -->
    <link rel="stylesheet" href="{{ asset('public/assets/js/plugins/datatables/dataTables.bootstrap4.css') }}">
@endsection

@section('js_after')
    <!-- Page JS Plugins -->
    <script src="{{ asset('public/assets/js/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('public/assets/js/plugins/datatables/dataTables.bootstrap4.min.js') }}"></script>

    <!-- Page JS Code -->
    <script src="{{ asset('public/assets/js/pages/tables_datatables.js') }}"></script>
@endsection

 <!-- Dynamic Table Full -->
        <div class="block">
            <div class="block-header block-header-default">
                <h3 class="block-title">List of Report<small>(s)</small></h3>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Full Name</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Vehicle #</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Renewal Date</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Contact #</th>
                            <th style="width: 15%;">Action<small>s</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < 31; $i++)
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
							<td class="font-w600">
                                <a href="javascript:void(0)">John Doe {{ $i }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                UP16 JT {{ $i }}670
                            </td>
							<td class="d-none d-sm-table-cell">
                                24-{{ $i }}-2021
                            </td>
							<td class="d-none d-sm-table-cell">
                                987645878{{ $i }}
                            </td>
							<td class="text-center">
                                                <div class="btn-group">
													<a href="#"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View">
                                                        <i class="si si-book-open fa-1x"></i>
                                                    </button></a>
                                                    <a href="#"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button></a>
                                                    <a href="#"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Delete">
                                                        <i class="fa fa-times"></i>
                                                    </button></a>
                                                </div>
                                            </td>
                        </tr>
                        @endfor
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
