@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
  				  
            <h2 class="content-heading">Edit Customer Detail<small>(s)</small></h2>
			@include('flash-message')
            <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Update Customer Information(s)</h3><span><a href="{{url('customers')}}"><strong>Back</strong></a></span>
                            <div class="block-options">
                                <!--<button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>-->
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
										@if ($errors->any())
											  <div class="alert alert-danger">
												<ul>
													@foreach ($errors->all() as $error)
													  <li>{{ $error }}</li>
													@endforeach
												</ul>
											  </div><br />
    										@endif

                                     <div>
                                    <form method="post" action="{{ url('customer-update', $customer->id) }}">
									 	@csrf
              							@method('PUT')
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputName">Full Name <span class="text-danger">*</span></label>
											
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputName" name="fullname" value="{{  $customer->fullname }}" placeholder="Enter fullname..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputEmail">Email <span class="text-danger">*</span></label>
											<div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputEmail" name="email" value="{{  $customer->email }}" placeholder="Enter valid email..">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputPhone">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="phone" class="form-control" id="inputPhone" name="phone" value="{{  $customer->phone }}" placeholder="Enter phone..">
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputUsername">Username <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputUsername" name="username" value="{{  $customer->username }}" placeholder="Enter username">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputServername">Server Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputServername" name="servername" value="{{  $customer->servername }}" placeholder="Enter Server Name">
                                            </div>
											</div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputVehicles">Associated Vehicle(s) <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputVehicles" name="vehicles" rows="5" placeholder="Enter Asociated Vehicle(s)">@if($customer->vehicles)  {{  $customer->vehicles }}   @else {{ 'N/A' }} @endif</textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputCommunication">Communication(s) </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputCommunication" name="communication" rows="5" placeholder="Enter Communication(s)">@if($customer->communication)  {{  $customer->communication }}   @else {{ 'N/A' }} @endif</textarea>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputAddress">Address </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputAddress" name="address" rows="5" placeholder="Enter Address">@if($customer->address)  {{  $customer->address }}   @else {{ 'N/A' }} @endif</textarea>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>
    </div>
    <!-- END Page Content -->
	<script src="{{asset('public/assets/js/jquery.min.js')}}"></script>
@endsection

