@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<x-jet-validation-errors class="mb-4" />

<section class="book" id="hero">
	<div class="container">
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
</section>  
@endsection
