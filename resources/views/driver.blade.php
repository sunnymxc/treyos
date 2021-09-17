@extends('layouts.app')

@section('title', 'Drivers')

@section('content')

<x-jet-validation-errors class="mb-4" />

<section class="book" id="hero">
	<div class="container">
    @include('flash-message')
		<form method="post" action="{{ route('driver.store') }}" enctype="multipart/form-data">
			@csrf
    	<div class="row my-5">
      		<div class="col-md-8 mx-auto">
        		<div class="card card-body bg-bluish shadow-sm border-0 px-md-5 pt-3">
          				
            			<h3 class="mb-3 text-black">Become a Driver</h3>
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
                  <div class="form-group">
                    <label for="address" class="text-black">Address</label>
                    <input type="text" class="form-control" id="" name="address" required>
                  </div>
                  <div class="form-group">
                     <label for="selfie_path" class="text-black">Upload selfie </label>
                  <input type="file" class="form-control-file " id="selfie_path" name="selfie_path" required >
                  </div>
               
                <div class="form-group">
                  <label for="id_path" class="text-black">Upload valid ID</label>
                  <input type="file" class="form-control-file " id="id_path" name="id_path" required >
                </div>
             
              <div class="form-group">
                <label for="selfie_id" class="text-black">Upload selfie with valid ID</label>
               <input type="file" class="form-control-file" id="selfie_id" name="selfie_id" required >
             </div>
            	<div class="form-row">
                <div class="form-group col-md-6">
                <label for="vehicle" class="text-black">Vehicle Type</label>
			                	<select name="vehicle" id="inputState" class="form-control">
			                  		<option selected>Choose Vehicle</option>
					                  <option>Truck</option>
					                  <option>Van</option>
					                  <option>Bus</option>
					                  <option>Car</option>
			                	</select>
                </div>              
                <div class="form-group col-md-6 mb-1">
                    <label for="vehicle_front" class="text-black">Upload front view of vehicle</label>
                    <input type="file" class="form-control-file " id="vehicle_front" name="vehicle_front" required >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6 mb-1">
                  <label for="vehicle_back" class="text-black">Upload back view of vehicle</label>
                  <input type="file" class="form-control-file" id="vehicle_back" name="vehicle_back" required>
              </div>              
                <div class="form-group col-md-6 mb-1">
                    <label for="vehicle_side" class="text-black">Upload side view of vehicle</label>
                    <input type="file" class="form-control-file " id="vehicle_side" name="vehicle_side" required>
                </div>
                <div class="form-group">
									<input type="submit" class="btn btn-primary" value="Register">
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
