<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Room extends Model
{
    public function getBookings()
    {
        return $this->hasMany('App\Booking');
    }
}
