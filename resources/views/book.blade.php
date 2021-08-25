@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Book') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ url('book') }}">
                        @csrf
						
                        <div class="form-group row">
                            <label for="from" class="col-md-4 col-form-label text-md-right">{{ __('Address: From ') }}</label>

                            <div class="col-md-6">
                                <input id="from" type="text" class="form-control @error('from') is-invalid @enderror" name="from" value="{{ old('from') }}" required autocomplete="from" autofocus>
                                @error('from')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

						 <div class="form-group row">
                            <label for="to" class="col-md-4 col-form-label text-md-right">{{ __('Address: To') }}</label>
                            <div class="col-md-6">
                                <input id="to" type="text" class="form-control @error('to') is-invalid @enderror" name="to" value="{{ old('to') }}" required autocomplete="to" autofocus>

                                @error('to')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        	<label for="goods" class="col-md-4 col-form-label text-md-right">{{ __('Goods') }}</label> 
							<div class="col-md-6">    
							    <div class="input-group "> 
							        <div class="form-radio col-md-6">
							                <select name="goods" size="1" autofocus class="form-control @error('gender') is-invalid @enderror">
												<option></option>
												<option>Blue</option>
												<option>Green</option>
												<option>Yellow</option>
												<option>Pink</option>
												<option>Brown</option>
												<option>Black</option>
												<option>Teal</option>
												<option>Beige</option>
											</select>
							        @error('goods') 
							            <span class="invalid-feedback" role="alert"> 
							                <strong>{{ $message }}</strong> 
							            </span> 
							        @enderror 
							  </div>
						 </div>
					</div>
					 
					<div class="form-group row"> 
					    <div class="input-group"> 
					        <input id="datepicker" type="date" 
					            class="date form-control @error('dob') is-invalid @enderror" name="dob" 
					            value="{{ old('dob') }}" required autofocus 
					            placeholder="Date of Birth"> 
					        <div class="input-group-append"> 
					            <span class="input-group-text"> 
					                <i class="mdi mdi-check-circle-outline"></i> 
					            </span> 
					        </div> 
					        @error('dob') 
					            <span class="invalid-feedback" role="alert"> 
					                <strong>{{ $message }}</strong> 
					            </span> 
					        @enderror 
					    </div> 
					</div>
					 
					<div class="form-group row"> 
					    <div class="input-group"> 
					        <input id="phone" type="text" 
					            class="form-control @error('phone') is-invalid @enderror" name="phone" 
					            value="{{ old('phone') }}" required autocomplete="phone" autofocus 
					            placeholder="Phone Number"> 
					        <div class="input-group-append"> 
					            <span class="input-group-text"> 
					                <i class="mdi mdi-check-circle-outline"></i> 
					            </span> 
					        </div> 
					        @error('phone') 
					            <span class="invalid-feedback" role="alert"> 
					                <strong>{{ $message }}</strong> 
					            </span> 
					        @enderror 
					    </div> 
					</div>

						
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                        <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Join as') }}</label>
					    <div class="input-group"> 
					        <div class="form-radio col-sm"> 
					            <label class="form-check-label"> 
					                <input type="radio" autofocus class="form-control @error('role') is-invalid @enderror" name="role" value="agent"> Agent 
					            </label> 
					        </div> 
					        <div class="form-radio col-sm"> 
					            <label class="form-check-label"> 
					                <input type="radio" autofocus class="form-control @error('role') is-invalid @enderror" name="role" value="driver"> Driver
					            </label> 
					        </div> 
					        @error('role') 
					            <span class="invalid-feedback" role="alert"> 
					                <strong>{{ $message }}</strong> 
					            </span> 
					        @enderror 
					    </div> 
					</div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection