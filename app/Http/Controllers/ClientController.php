<?php

namespace App\Http\Controllers;

use App\Models\Client;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {

        return view("valmaster.front-desk.table-content", ['clients' => Client::all()]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('valmaster.front-desk.create-record', ['users' => User::all()]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

       /* $client = Client::create($request->all());
        $client->users()->attachUser($request->user_id);*/



       /* $request->session()->flash('Success', "you Have Added a New Client");*/

//        dd($request->all());

        $request->validate([
            'job_no' => ['required', 'integer'],
            'client_name' => ['required', 'string'],
            'property_address' => ['required', 'string'],
            'contact_person' => ['required',],
            'contact_number' => ['required', 'integer'],
            'client_email' => ['required', 'string'],
            'date_of_receipt_of_instruction' => ['required',],
            'inspection_due' => ['required',],
            'days_taken_to_complete' => ['required',],
            'report_due_date' => ['required',],
            'fee' => ['required',],
            'fee_due_date' => ['required',],
            'date_of_delivery' => ['required',],
            'type_of_property' => ['required',],
            'status_for_accounts' => ['required',],
            'market_value' => ['required',],
            'property_description' => ['required',],
        ]);

        $client = new Client();
        $client->fill($request->all());
        $client->save();





        return redirect(route('valmaster.front-desk.create'));



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function show(Client $client)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function edit(Client $client)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Client $client)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Client  $client
     * @return \Illuminate\Http\Response
     */
    public function destroy(Client $client)
    {
        //
    }
}
