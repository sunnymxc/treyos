@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<section class="book" id="hero">
	<div class="container col-md-8 mx-auto">
		<div class="card">
            <div class="card-header" style="text-align:center"> {{ isset($url) ? ucwords($url) : ""}} {{ __('Relocation Booking') }}</div>
				<div class="card-body">

                    @isset($url)
                    <form method="POST" action='{{ url("booking/$url") }}' aria-label="{{ __('Booking') }}">
                    @else
                    <form method="POST" action="{{ url('booking') }}" aria-label="{{ __('Booking') }}">
                    @endisset
                        @csrf
						@include('flash-message') 
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
               
						<div class="tab-content" id="main_form">
							<div class="tab-pane active" role="tabpanel" id="step1">
								<h4 class="text-center mb-4">Personal Details</h4>
								<div class="form-row">
									@if ($url === 'home')
										<input name="type" type="hidden" value="Home Relocation">
									@elseif ($url === 'office')
										<input name="type" type="hidden" value="Office Relocation">	
									@elseif ($url === 'haulage')
										<input name="type" type="hidden" value="Haulage">
									@endif

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
										<input type="text" class="form-control" id="phone" name="phone" required autofocus autocomplete="phone">
									</div>
								</div>
          
								<ul class="list-inline pull-right">
									<li><button type="button" class="default-btn next-step btn-success">Continue to next step</button></li>
								</ul>
							</div>
							<div class="tab-pane" role="tabpanel" id="step2">
								<h4 class="text-center mb-4">Movement</h4>
								<h5 class="text-info">From</h5>
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
							<h5 class="text-info mt-3">To</h5>
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
																
							<ul class="list-inline pull-right">
								<li><button type="button" class="default-btn prev-step btn-secondary">Back</button></li>
								<li><button type="button" class="default-btn next-step skip-btn">Skip</button></li>
								<li><button type="button" class="default-btn next-step btn-success">Continue</button></li>
							</ul>
						</div>
						<div class="tab-pane" role="tabpanel" id="step3">
							<h4 class="text-center mb-4">Others</h4>
							<div class="form-row">
								@if ($url === 'office' OR $url === 'home')
								<div class="form-group col-md-12">
									<label for="apartment" class="text-black">Apartment Size</label>
									<select name="apartment" id="inputSize" class="form-control" required autofocus>
										<option selected>select size</option>
										<option>1 room</option>
										<option>2 rooms</option>
										<option>3 rooms</option>
										<option>4 rooms</option>
									</select>
								</div>
								@endif              			
								<div class="form-group col-md-6">
									<label for="date" class="text-black">Date</label>
									<input type="date" class="form-control" id="date" name="date" required autofocus autocomplete="date">
								</div>              
								<div class="form-group col-md-6 mb-1">
									<label for="time" class="text-black">Time</label>
									<input type="time" class="form-control" id="time" name="time" min="09:00" max="17:00" value="09:30:00" required autofocus autocomplete="time">
								</div>
							</div>
							@if($url === 'haulage')
							<div class="form-row">
								<div class="form-group col-md-6">
									<label for="description" class="text-black">What are you moving</label>
									<input type="text" class="form-control" id="description" name="description" required autofocus autocomplete="email">
								</div>
								<div class="form-group col-md-6">
									<label for="weight" class="text-black">Item Size</label>
									<select name="weight" id="weight" class="form-control">
										<option selected>select size</option>
										<option>5-10 tons</option>
										<option>10-20 tons</option>
										<option>20-30 tons</option>
										<option>40-50 tons</option>
										<option>50-60 tons</option>
										<option>60-70 tons</option>
										<option>70-80 tons</option>
										<option>80-90 tons</option>
										<option>90-100 tons</option>
									</select>
								</div>              			
							@endif
							</div>
							<ul class="list-inline pull-right">
								<li><button type="button" class="default-btn prev-step btn-secondary">Back</button></li>
								<li><button type="submit" class="default-btn next-step btn-success">Finish</button></li>
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