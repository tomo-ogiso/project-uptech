<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    //
    public static $rules = array(
        'lodging-month' => 'required',
        'lodging-date' => 'required',
        'staydays' => 'required',
        'people' => 'required',
        'room' => 'required',
    );
}
