<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Advt;
use App\Models\Car;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CarController extends Controller
{
    public function store(Request $request) {
        $errors = Validator::make(
            $request->all(),
            [
                'name_car' => 'string|min:3|max:255',
                'max_places' => 'numeric|min:1|max:10'
            ],
            [
                'name_car.string' => 'Название машины должен быть строкой',
                'name_car.min' => 'Название машины не может быть короче 2 символов',
                'name_car.max' => 'Название машины не может превышать 255 символов',

                'max_places.numeric' => 'Максимум места в машине должно быть числом',
                'max_places.max' => 'Максимум места в машине не может превышать 10',
                'max_places.min' => 'В машине должно быть хотя бы одно место',
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        $advtId = Advt::where('header', $request->header)->
        where('description', $request->description)->
        where('point_meeting', $request->point_meeting)->
        where('place', $request->place)->
        get('id');

        $query = Car::make($request->all());
        // $query->advt_id = $request->advt_id;
        $query->save();
        return response('Машина создана');
    }
}
