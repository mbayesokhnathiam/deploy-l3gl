<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function getEventToday(){

        $events = Evenement::query()->where('date_debut',Carbon::today())->get();

        return response()->json([
            'status' => 'success',
            'data' => $events
        ],200);
    }

    public function search(Request $request){
        $nom = $request->input('nom');
        $date_debut = $request->input('date1');
        $date_fin = $request->input('date2');

        if($nom){

        }

        if($date_debut){

        }

        if($date_fin){
            
        }
    }
}
