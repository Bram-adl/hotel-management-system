<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Get the home page.
     * 
     * @return view
     */
    public function index()
    {   
        // query builder
        $rooms = DB::table('rooms')
                    ->join('room_types', 'room_types.id', 'rooms.room_type_id')
                    ->select(
                        'rooms.id', 'rooms.name', 'rooms.photo',
                        'room_types.name AS type', 'room_types.price', 'room_types.size',
                        'room_types.capacity', 'room_types.bed_type'
                    )
                    ->take(4)
                    ->get();
        
        return view('user.home', ['rooms' => $rooms]);
    }

    /**
     * Get the rooms page.
     * 
     * @return view
     */
    public function rooms()
    {
        $rooms = DB::table('rooms')
                    ->join('room_types', 'room_types.id', 'rooms.room_type_id')
                    ->select(
                        'rooms.id', 'rooms.name', 'rooms.photo',
                        'room_types.name AS type', 'room_types.price', 'room_types.size',
                        'room_types.capacity', 'room_types.bed_type'
                    )
                    ->paginate(8);
        
        return view('user.pages.rooms', ['rooms' => $rooms]);
    }

    /**
     * Get the room specified by the user.
     * 
     * @return view
     */
    public function room($id)
    {
        $room = DB::table('rooms')
                    ->join('room_types', 'room_types.id', 'rooms.room_type_id')
                    ->select(
                        'rooms.id', 'rooms.name', 'rooms.photo',
                        'room_types.name AS type', 'room_types.price', 'room_types.size',
                        'room_types.capacity', 'room_types.bed_type'
                    )
                    ->where('rooms.id', $id)
                    ->get();

        return view('user.pages.room', ['room' => $room]);
    }

    /**
     * Store the reservation to database.
     * 
     * @param Request $request
     * @param int $id
     * @return redirect
     */
    public function bookRoom(Request $request, $id)
    {
        $request->validate([
            'first_name' => 'nullable|string',
            'last_name' => 'required|string',
            'email_address' => 'required|email|unique:customers,email_address',
            'phone_number' => 'required|numeric',
            'street_address' => 'required|string',
            'check_in' => 'required|date',
            'check_out' => 'required|date',
            'guests' => 'required|numeric|min:0',
            'rooms' => 'required|numeric|min:0',
        ]);

        // Store the customer
        $saveCustomer = DB::table('customers')
            ->insert([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'email_address' => $request->email_address,
                'phone_number' => $request->phone_number,
                'street_address' => $request->street_address,
            ]);
        
        if (!$saveCustomer) {
            return redirect()->back();
        }
        
        // Get the customer
        $customer = DB::table('customers')
            ->where([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
            ])
            ->get();

        // Save the reservation details
        $reservation = DB::table('reservations')
            ->insert([
                'customer_id' => $customer[0]->id,
                'room_id' => $id,
                'check_in' => $request->check_in,
                'check_out' => $request->check_out,
                'guests' => $request->guests,
                'rooms' => $request->rooms,
            ]);

        // Redirect the user!
        if ( $customer && $reservation ) {
            return redirect()->route('user.room', ['id' => $id])->with('success', 'Room reserved successfully!');
        } else {
            return "hoh";
        }
    }

    /**
     * Get the about us page.
     * 
     * @return view
     */
    public function aboutUs()
    {
        return view('user.pages.about');
    }

    /**
     * Get the contact us page.
     * 
     * @return view
     */
    public function contactUs()
    {
        return view('user.pages.contact');
    }
}
