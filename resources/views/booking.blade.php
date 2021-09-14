@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<x-jet-validation-errors class="mb-4" />

<section class="book" id="herro">
	<div class="container">
		@include('flash-message')
		<form method="post" action="{{ route('booking.store') }}">
			@csrf
    	<div class="row my-5">
      		<div class="col-md-8">
        		<div class="card card-body bg-bluish shadow-sm border-0 px-md-5 pt-3">
          				
            			<h3 class="mb-3 text-black">Personal Details</h3>
            			<div class="form-row">
              				<div class="form-group col-md-12">
                				<label for="name" class="text-black">Full Name</label>
                				<input type="text" class="form-control" id="name" name="name" required autofocus autocomplete="name">
              				</div>              			
	              			<div class="form-group col-md-6">
	                			<label for="email" class="text-black">Email</label>
	                			<input type="email" class="form-control" id="email" name="email" required autofocus autocomplete="email">
	              			</div>              
	              			<div class="form-group col-md-6 mb-1">
	              	  			<label for="phone" class="text-black">Phone Number</label>
	                			<input type="text" class="form-control" id="phone" name="phone" required autofocus autocomplete="email">
	              			</div>
            			</div>
          
            			<h3 class="mt-3 mb-3">Movement</h3>
            			<h5 class="text-black">From</h5>
            			<div class="form-row">
				            <div class="form-group col-md-9">
				            	<label for="address_from" class="text-black">Address</label>
				              	<input type="text" class="form-control" id="address_from" placeholder="" name="address_from" required autofocus autocomplete="address_from">
				            </div>
				            <div class="form-group col-md-3">
				              	<label for="state_from" class="text-black">State</label>
				              	<input type="text" class="form-control" id="state_from" placeholder="" name="state_from" required autofocus autocomplete="state_from">
				            </div>
            			</div>
            			
			            <h5 class="text-black">To</h5>
			            <div class="form-row">
				            <div class="form-group col-md-9">
				              	<label for="address_to" class="text-black">Address</label>
				              	<input type="text" class="form-control" id="address_to" placeholder="" name="address_to">
				            </div>
				            <div class="form-group col-md-3">
				              	<label for="state_to" class="text-black">State</label>
				              	<input type="text" class="form-control" id="state_to" placeholder="" name="state_to">
				            </div>
            			</div>
			            <div class="form-row">
			            	<div class="form-group col-md-9">
			              		<label for="vehicle" class="text-black">Vehicle Type</label>
			                	<select name="vehicle" id="inputState" class="form-control">
			                  		<option selected>Choose Vehicle</option>
					                  <option>Truck</option>
					                  <option>Van</option>
					                  <option>Bus</option>
					                  <option>Car</option>
			                	</select>
			              	</div>
			           </div>
						</div>
					</div>
            		            		          			
					   <div class="col-md-4 mt-3 mt-md-0">
					   		<div class="card bg-bluish shadow-sm border-0">
					            <div class="card-header">
					              	<h5 class="text-black mb-0">Booking Summary</h5>
					            </div>
					            <div class="card-body">
					              	<div class="form-group">
					                	<label for="inputEmail4" class="text-black">Total</label>
					                		<h1 class="text-black">N100,000</h1>
					              	</div>
					              	<button type="submit" class="btn btn-get-started w-100">Checkout</button>
					            </div>
					        </div>					            
			           </div>
			    	</form>
				</div>
			</div>
		</div>
	</div>  

	<section class="signup-step-container">
		<div class="container col-md-8 mx-auto">
				<div class="row d-flex justify-content-center card card-body shadow p-5 border-0">
						<div class="col">
								<div class="wizard">
										<div class="wizard-inner">
												<div class="connecting-line"></div>
												<ul class="nav nav-tabs" role="tablist">
														<li role="presentation" class="active">
																<a href="#step1" data-toggle="tab" aria-controls="step1" role="tab" aria-expanded="true"><span class="round-tab">1 </span> <i>Step 1</i></a>
														</li>
														<li role="presentation" class="disabled">
																<a href="#step2" data-toggle="tab" aria-controls="step2" role="tab" aria-expanded="false"><span class="round-tab">2</span> <i>Step 2</i></a>
														</li>
														<li role="presentation" class="disabled">
																<a href="#step3" data-toggle="tab" aria-controls="step3" role="tab"><span class="round-tab">3</span> <i>Step 3</i></a>
														</li>
														
												</ul>
										</div>
		
										<form role="form" action="index.html" class="login-box">
												<div class="tab-content" id="main_form">
														<div class="tab-pane active" role="tabpanel" id="step1">
																<h4 class="text-center mb-4">Step 1</h4>
																<div class="row">
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>First and Last Name *</label> 
																						<input class="form-control" type="text" name="name" placeholder=""> 
																				</div>
																		</div>
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>Phone Number  *</label> 
																						<input class="form-control" type="text" name="name" placeholder=""> 
																				</div>
																		</div>
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>Email Address *</label> 
																						<input class="form-control" type="email" name="name" placeholder=""> 
																				</div>
																		</div>
																		
																		<div class="col-md-6">
																				<div class="form-group">
																						<label>Password *</label> 
																						<input class="form-control" type="password" name="name" placeholder=""> 
																				</div>
																		</div>
																		
																		
																</div>
																<ul class="list-inline pull-right">
																		<li><button type="button" class="default-btn next-step btn-success">Continue to next step</button></li>
																</ul>
														</div>
														<div class="tab-pane" role="tabpanel" id="step2">
																<h4 class="text-center mb-4">Step 2</h4>
																<div class="row">
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Address 1 *</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																
																<div class="col-md-6">
																		<div class="form-group">
																				<label>City / Town *</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Country *</label> 
																				<select name="country" class="form-control" id="country">
																						<option value="NG" selected="selected">Nigeria</option>
																						<option value="NU">Niue</option>
																						<option value="NF">Norfolk Island</option>
																						<option value="KP">North Korea</option>
																						<option value="MP">Northern Mariana Islands</option>
																						<option value="NO">Norway</option>
																				</select>
																		</div>
																</div>
																
																
																
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Registration No.</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
															 </div>
																
																
																<ul class="list-inline pull-right">
																		<li><button type="button" class="default-btn prev-step btn-secondary">Back</button></li>
																		<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
																		<li><button type="button" class="default-btn next-step btn-success">Continue</button></li>
																</ul>
														</div>
														<div class="tab-pane" role="tabpanel" id="step3">
																<h4 class="text-center mb-4">Step 3</h4>
																 <div class="row">
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Account Name *</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Demo</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Inout</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Information</label> 
																				<div class="custom-file">
																					<input type="file" class="custom-file-input" id="customFile">
																					<label class="custom-file-label" for="customFile">Select file</label>
																				</div>
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Number *</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																<div class="col-md-6">
																		<div class="form-group">
																				<label>Input Number</label> 
																				<input class="form-control" type="text" name="name" placeholder=""> 
																		</div>
																</div>
																	 </div>
																	 <ul class="list-inline pull-right">
																		<li><button type="button" class="default-btn prev-step btn-secondary">Back</button></li>
																		<li><button type="button" class="default-btn next-step btn-success">Finish</button></li>
																</ul>
														</div>
													
														<div class="clearfix"></div>
												</div>
												
										</form>
								</div>
						</div>
				</div>
		</div>
</section>
</section>  
@endsection
