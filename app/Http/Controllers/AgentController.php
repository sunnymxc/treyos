<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAgentRequest;
use App\Models\Agent;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('agent');

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $agent = new agent();
      	$agent->name = $request->input('name');
      	$agent->email = $request->input('email');
      	$agent->phone = $request->input('phone');
      	$agent->state_to = $request->input('state_to');
      	$agent->address_to = $request->input('address_to');
      	$agent->state_from = $request->input('state_from');
      	$agent->address_from = $request->input('address_from');
       	$agent->vehicle = $request->input('vehicle');

        #Store Unique Order/agent Number
        $unique_no = Agent::orderBy('id', 'DESC')->pluck('id')->first();
        if($unique_no == null or $unique_no == ""){
            #If Table is Empty
            $unique_no = 100000;
        } else {
            #If Table has Already some Data
            $unique_no = $unique_no + 1;
        }

        $agent->agent_no = 'TS'.$unique_no;
       	
       	$agent->save();
       	
       	return back()->with('success','agent number placed successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
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
