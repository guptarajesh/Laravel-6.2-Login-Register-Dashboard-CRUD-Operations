@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
        <div class="block">
                                <div class="block-header block-header-default">
                                    <h3 class="block-title">Show Customer Detail(s)</h3><span><a href="{{url('customers')}}"><strong>Back</strong></a></span>
                                </div>
                                <div class="block-content block-content-full">
									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label class="title" for="fullname">Full Name:</label>
									</div>
										<div class="col-md-4">{{ $customer->fullname }}</div>
											<div class="col-md-2">&nbsp;</div>
									</div>
									
																		<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="email">Email:</label>
									</div>
										<div class="col-md-4">@if($customer->email)  {{  $customer->email }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="phone">Phone:</label>
									</div>
										<div class="col-md-4">@if($customer->phone)  {{  $customer->phone }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="username">User Name:</label>
									</div>
										<div class="col-md-4">@if($customer->username)  {{  $customer->username }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="servername">Server Name:</label>
									</div>
										<div class="col-md-4">@if($customer->servername)  {{  $customer->servername }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="vehicles">Associate Vehicle(s):</label>
									</div>
										<div class="col-md-4">@if($customer->vehicles)  {{  $customer->vehicles }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

									<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="communication">Communication:</label>
									</div>
										<div class="col-md-4">@if($customer->communication)  {{  $customer->communication }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>
																		<div class="row">
										<div class="col-md-1">&nbsp;</div>
									<div class="col-md-4">
										<label for="address">Address:</label>
									</div>
										<div class="col-md-4">@if($customer->address)  {{  $customer->address }}   @else {{ 'N/A' }} @endif</div>
											<div class="col-md-2">&nbsp;</div>
									</div>

                                </div>
                            </div>
    </div>
    <!-- END Page Content -->
@endsection
