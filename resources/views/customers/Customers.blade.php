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
                <h3 class="block-title">List of Customer<small>(s)</small></h3> <span><i class="fa fa-plus" aria-hidden="true"></i> <a href="{{url('customers/add-customers')}}" class="align-middle link-effect text-primary-dark font-w600" title="Add New Customer">Add New Customer</a></span>
            </div>
			@include('flash-message')
            <div class="block-content block-content-full">
                <!-- DataTables init on table by adding .js-dataTable-full class, functionality is initialized in js/pages/tables_datatables.js -->
                <table class="table table-bordered table-striped table-vcenter js-dataTable-full">
                    <thead>
                        <tr>
                            <th class="text-center" style="width: 80px;">#</th>
                            <th>Full Name</th>
                            <th class="d-none d-sm-table-cell" style="width: 15%;">Email</th>
							<th class="d-none d-sm-table-cell" style="width: 15%;">Contact #</th>
                            <th style="width: 15%;">Action<small>s</small></th>
                        </tr>
                    </thead>
                    <tbody> 
                       @foreach($customers ?? '' as $indexKey =>$customer)
                        <tr>
                            <td class="text-center">{{ $indexKey }} </td>
							<td class="font-w600">
                                <a href="javascript:void(0)" class="align-middle link-effect text-primary-dark font-w600">{{ $customer->fullname }}</a>
                            </td>
                            <td class="d-none d-sm-table-cell">
                                
								
								@if($customer->email)  {{  $customer->email }}   @else {{ 'N/A' }} @endif

                            </td>
							<td class="d-none d-sm-table-cell">
                                @if($customer->phone)  {{  $customer->phone }}   @else {{ 'N/A' }} @endif
                            </td>
							<td class="text-center">
                                                <div class="btn-group">
													<a href="{{ url('customers/view-customers',$customer->id) }}"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="View">
                                                        <i class="si si-book-open fa-1x"></i>
                                                    </button></a>
                                                    <a href="{{ url('customers/edit-customers',$customer->id) }}"><button type="button" class="btn btn-sm btn-secondary" data-toggle="tooltip" title="Edit">
                                                        <i class="fa fa-pencil"></i>
                                                    </button></a>
													
													<form action="{{ url('customers/delete-customers', $customer->id)}}" method="post">
                  @csrf
                  @method('GET')
                  <button class="btn btn-sm btn-secondary" type="submit" data-toggle="tooltip" title="Delete"><i class="fa fa-times"></i></button>
                </form>
				
                                                </div>
                                            </td>
                        </tr>
                         @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <!-- END Dynamic Table Full -->
    </div>
    <!-- END Page Content -->
@endsection
