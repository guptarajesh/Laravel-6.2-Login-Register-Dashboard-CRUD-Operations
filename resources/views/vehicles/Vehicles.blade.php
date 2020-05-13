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
                <h3 class="block-title">List of Vehicle<small>(s)</small></h3><span><i class="fa fa-plus" aria-hidden="true"></i> <a href="{{url('vehicles/add-vehicles')}}" class="align-middle link-effect text-primary-dark font-w600" title="Add New Vehicle">Add New Vehicle</a></span>
            </div>
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Owner Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Renewal Date</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Vehicle Number</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">ERP User Name</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Kit Install Date</th>
                            <th style="width: 15%;">Action<small>s</small></th>
                        </tr>
                    </thead>
                    <tbody>
                        @for ($i = 1; $i < 31; $i++)
                        <tr>
                            <td class="text-center"><?php echo $i; ?></td>
							<td class="font-w600">
                                <a href="javascript:void(0)" class="align-middle link-effect text-primary-dark font-w600">John Doe {{ $i }}</a>
                            </td>
                            <td class="font-w600"> 23-0{{ $i }}-2022 </td>
							<td class="font-w600"> UP80 GT 9690 </td>
							<td class="font-w600"> wtft802020 </td>
							<td class="font-w600"> 12-{{ $i }}-2019 </td>
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
