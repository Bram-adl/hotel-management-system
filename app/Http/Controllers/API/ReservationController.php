<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = DB::table('reservations')
                            ->join('customers', 'customers.id', 'reservations.customer_id')
                            ->join('rooms', 'rooms.id', 'reservations.room_id')
                            ->select(
                                'reservations.id', 'reservations.customer_id', 'customers.first_name AS first_name', 'customers.last_name AS last_name',
                                'rooms.name AS room_name', 'reservations.room_id',
                                'reservations.check_in', 'reservations.check_out','reservations.guests', 'reservations.rooms',
                            )
                            ->paginate(5);

        return $reservations;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'customer_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'guests' => 'required|numeric',
            'rooms' => 'required|numeric',
        ]);

        $reservation = DB::table('reservations')
            ->insert([
                'customer_id' => $request->customer_id,
                'room_id' => $request->room_id,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'guests' => $request->guests,
                'rooms' => $request->rooms,
            ]);

        return $reservation;
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
            'customer_id' => 'required|numeric',
            'room_id' => 'required|numeric',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'guests' => 'required|numeric',
            'rooms' => 'required|numeric',
        ]);

        $reservation = DB::table('reservations')
                            ->where('id', $id)
                            ->update([
                                'customer_id' => $request->customer_id,
                                'room_id' => $request->room_id,
                                'check_in' => $request->check_in,
                                'check_out' => $request->check_out,
                                'guests' => $request->guests,
                                'rooms' => $request->rooms,
                            ]);

        return $reservation;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = DB::table('reservations')
                            ->where('id', $id)
                            ->delete();

        return $reservation;
    }
}
