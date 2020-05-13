@extends('layouts.backend')

@section('content')
    <!-- Page Content -->
    <div class="content">
  				  
            <h2 class="content-heading">Add Customer Detail<small>(s)</small></h2>
			@include('flash-message')
            <div class="block">
                        <div class="block-header block-header-default">
                            <h3 class="block-title">Fill Customer Information(s)</h3><span><a href="{{url('customers')}}"><strong>Back</strong></a></span>
                            <div class="block-options">
                                <!--<button type="button" class="btn-block-option">
                                    <i class="si si-wrench"></i>
                                </button>-->
                            </div>
                        </div>
                        <div class="block-content">
                            <div class="row justify-content-center py-20">
                                <div class="col-xl-6">
                                     <div>
                                    <form class="js-validation-bootstrap" action="{{url('post-customer')}}" method="post" id="custForm">
									{{ csrf_field() }}
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputName">Full Name <span class="text-danger">*</span></label>
											
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter fullname..">
											@if ($errors->has('name'))
											  	<span class="error">{{ $errors->first('name') }}</span>
											@endif  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputEmail">Email <span class="text-danger">*</span></label>
											<div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Enter valid email..">
												@if ($errors->has('email'))
										  		<span class="error">{{ $errors->first('email') }}</span>
										   		@endif  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputPhone">Phone <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="phone" class="form-control" id="inputPhone" name="phone" placeholder="Enter phone..">
												@if ($errors->has('phone'))
											  	<span class="error">{{ $errors->first('phone') }}</span>
											    @endif 
                                            </div>
                                        </div>
                                        
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputUsername">Username <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputUsername" name="username" placeholder="Enter username">
												@if ($errors->has('username'))
											  	<span class="error">{{ $errors->first('username') }}</span>
											    @endif  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputServername">Server Name <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <input type="text" class="form-control" id="inputServername" name="servername" placeholder="Enter Server Name">
												@if ($errors->has('servername'))
											  	<span class="error">{{ $errors->first('servername') }}</span>
											    @endif  
                                            </div>
											</div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputVehicles">Associated Vehicle(s) <span class="text-danger">*</span></label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputVehicles" name="vehicles" rows="5" placeholder="Enter Asociated Vehicle(s)"></textarea>
												@if ($errors->has('vehicles'))
											  	<span class="error">{{ $errors->first('vehicles') }}</span>
											    @endif  
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputCommunication">Communication(s) </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputCommunication" name="communication" rows="5" placeholder="Enter Communication(s)"></textarea>
                                            </div>
                                        </div>
										<div class="form-group row">
                                            <label class="col-lg-4 col-form-label" for="inputAddress">Address </label>
                                            <div class="col-lg-8">
                                                <textarea class="form-control" id="inputAddress" name="address" rows="5" placeholder="Enter Address"></textarea>
                                            </div>
                                        </div>
                                            <div class="form-group row">
                                            <div class="col-lg-8 ml-auto">
                                                <button type="submit" class="btn btn-alt-primary">Submit</button>
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

