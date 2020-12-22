<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    /**
     * Attributes that are mass assignable.
     * 
     * @var array
     */
    protected $fillable = [
        'customer_id', 'room_id', 'check_in', 'check_out', 'guests', 'rooms'
    ];
}
