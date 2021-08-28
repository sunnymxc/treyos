@extends('layouts.app')

@section('title', 'Bookings')

@section('content')

<section class="book" id="hero">
  <div class="container">
    <div class="row my-5">
      <div class="col-md-8">
        <div class="card card-body bg-bluish shadow-sm border-0 p-5">
          <form>
            <h2 class="mb-3">Personal Details</h2>
            <div class="form-row">
              <div class="form-group col-md-12">
                <label for="name" class="text-white">Full Name</label>
                <input type="text" class="form-control" id="" name="name">
              </div>
              <div class="form-group col-md-6">
                <label for="email" class="text-white">Email</label>
                <input type="email" class="form-control" id="" name="email">
              </div>
              <div class="form-group col-md-6 mb-1">
                <label for="phone" class="text-white">Phone Number</label>
                <input type="text" class="form-control" id="">
              </div>
            </div>
          
            <h2 class="mt-3 mb-3">Movement</h2>

            <h5 class="text-white">From</h5>
            <div class="form-row">
            <div class="form-group col-md-9">
              <label for="inputAddress" class="text-white">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-3">
              <label for="inputAddress2" class="text-white">State</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            </div>
            <h5 class="text-white">To</h5>
            <div class="form-row">
            <div class="form-group col-md-9">
              <label for="inputAddress" class="text-white">Address</label>
              <input type="text" class="form-control" id="inputAddress" placeholder="">
            </div>
            <div class="form-group col-md-3">
              <label for="inputAddress2" class="text-white">State</label>
              <input type="text" class="form-control" id="inputAddress2" placeholder="">
            </div>
            </div>
            <div class="form-row">
              <div class="form-group col-md-9">
              <label for="inputAddress2" class="text-white">Vehicle Type</label>
                <select id="inputState" class="form-control">
                  <option selected>Choose Vehicle</option>
                  <option>Truck</option>
                  <option>Van</option>
                  <option>Bus</option>
                  <option>Car</option>
                </select>
              </div>
            </div>
            
            </div>
          </form>
        </div>
        <div class="col-md-4 mt-3 mt-md-0">
          <div class="card bg-bluish shadow-sm border-0">
            <div class="card-header">
              <h5 class="text-white mb-0">Booking Summary</h5>
            </div>
            <div class="card-body">
              <div class="form-group">
                <label for="inputEmail4" class="text-white">Total</label>
                  <h1>N100,000</h1>
              </div>
              <button type="submit" class="btn btn-get-started w-100">Checkout</button>
            </div>
            </div>
            
        </div>
      </div>
    </div>
  </div>
  
</section>  
@endsection
