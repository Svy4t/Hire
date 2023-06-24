<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Advt;
use App\Models\Car;
use App\Models\Passenger;
use App\Models\User;
use Illuminate\Http\Request;

class PassengerController extends Controller
{
    public function store(Request $request) {
        $user = User::where('token', $request->token)->get();
        $newPassenger = new Passenger();
        $newPassenger->advt_id = $request->advt_id;
        $newPassenger->user_id = $user[0]->id;
        $newPassenger->save();
        return response('Вы сели в машину', 200);
    }

    public function delete(Request $request) {
        Passenger::where('advt_id', $request->advt_id)->where('user_id', $request->user_id)->delete();

        return response('Вы больше не являетесь пассажиром данной машины!',200);
    }

    public function outputPassengers(Request $request) {
        $passengers = Passenger::where('advt_id', $request->advt_id)->get('user_id');
        $users = [];
        foreach ($passengers as $key => $value) {
            $oneuser = User::where('id', $value['user_id'])->get();
            array_push($users, $oneuser);
        }
        return $users;
    }
}
