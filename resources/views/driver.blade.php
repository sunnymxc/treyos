@extends('layouts.app')

@section('title', 'Drivers')

@section('content')

<x-jet-validation-errors class="mb-4" />

<section class="book" id="hero">
	<div class="container">
		<form method="post" action="{{ route('booking.store') }}">
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
                    <label for="name" class="text-black">Address</label>
                    <input type="text" class="form-control" id="" name="" required>
                  </div>
                  <div class="form-group">
                     <label for="selfie" class="text-black">Upload selfie </label>
                  <input type="file" class="form-control-file " id="" name="" required >
                  </div>
               
                <div class="form-group">
                  <label for="selfie" class="text-black">Upload valid ID </label>
                  <input type="file" class="form-control-file " id="" name="" required >
                </div>
             
              <div class="form-group">
                <label for="selfie" class="text-black">Upload selfie with valid ID </label>
               <input type="file" class="form-control-file " id="" name="" required >
             </div>
            	<div class="form-row">
                <div class="form-group col-md-6">
                  <label for="vehicle type" class="text-black">Enter vehicle type</label>
                  <input type="text" class="form-control" >
                </div>              
                <div class="form-group col-md-6 mb-1">
                    <label for="vehicle image" class="text-black">Upload front view of vehicle</label>
                    <input type="file" class="form-control-file " id="" name="" required >
                </div>
              </div>
              <div class="form-row">
                <div class="form-group col-md-6 mb-1">
                  <label for="vehicle image" class="text-black">Upload back view of vehicle</label>
                  <input type="file" class="form-control-file " id="" name="" required >
              </div>              
                <div class="form-group col-md-6 mb-1">
                    <label for="vehicle image" class="text-black">Upload side view of vehicle</label>
                    <input type="file" class="form-control-file " id="" name="" required >
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
