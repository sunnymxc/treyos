<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateBookingRequest;
use App\Models\Booking;

class BookingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('booking');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Show Booking form for Haulage
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showGoodsForm()
    {
        return view('booking', ['url' => 'haulage']);
    }
    
    /**
     * Show Booking form for Home Relocation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showHomeForm()
    {
        return view('booking', ['url' => 'home']);
    }

    /**
     * Show Booking form for Office Relocation
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function showOfficeForm()
    {
        return view('booking', ['url' => 'office']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $booking = new booking();
        $booking->type = $request->input('type');
      	$booking->name = $request->input('name');
      	$booking->email = $request->input('email');
      	$booking->phone = $request->input('phone');
      	$booking->state_to = $request->input('state_to');
      	$booking->address_to = $request->input('address_to');
      	$booking->state_from = $request->input('state_from');
      	$booking->address_from = $request->input('address_from');
       	$booking->vehicle = $request->input('vehicle');
        $booking->date = $request->input('date');
        $booking->time = $request->input('time');
        $booking->apartment = $request->input('apartment');
       	$booking->description = $request->input('description');
        $booking->weight = $request->input('weight');
       	
       	$booking->save();
       	
       	return back()->with('success', 'Booking placed successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(booking $booking)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
