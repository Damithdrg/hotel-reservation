<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ReservationResource;
use App\Models\Reservation;
use Illuminate\Http\Request;

class ReservationSearch extends Controller
{
    public function index(){
        return ReservationResource::collection(Reservation::all());
    }
}
