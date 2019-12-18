<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Reservation;


class ReservationController extends Controller
{
    //

    public function add(){
        return view('admin.confirm');  
    }

    public function create(Request $request){

        $this->validate($request, Reservation::$rules);

        $reservation = new Reservation;
        $form = $request->all();

        unset($form['_token']);

        $reservation->fill($form)->save();

        return redirect('/');
    }
}
