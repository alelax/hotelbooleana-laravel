<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    public function getRoom()
    {
        return $this->belongsTo('App\Room');
    }
}
