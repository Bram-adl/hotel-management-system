<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customers = DB::table('customers')
                        ->get();
        
        return $customers;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Validates the requests ...
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:customers',
            'phone_number' => 'required|string',
            'street_address' => 'required|string',
        ]);

        $customer = DB::table('customers')
                        ->insert([
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'email_address' => $request->email_address,
                            'phone_number' => $request->phone_number,
                            'street_address' => $request->street_address,
                        ]);

        return $customer;
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'nullable|string|max:255',
            'last_name' => 'required|string|max:255',
            'email_address' => 'required|email|unique:customers,email_address,'.$request->id,
            'phone_number' => 'nullable|numeric',
            'street_address' => 'nullable|string',
        ]);

        $customer = DB::table('customers')
                        ->where('id', $id)
                        ->update([
                            'first_name' => $request->first_name,
                            'last_name' => $request->last_name,
                            'email_address' => $request->email_address,
                            'phone_number' => $request->phone_number,
                            'street_address' => $request->street_address,
                        ]);

        return $customer;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = DB::table('customers')
                    ->where('id', $id)
                    ->delete();
        
        return $user;
    }
}
