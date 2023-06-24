<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\AdvtRecource;
use App\Models\Advt;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $advts = Advt::with('user')->with('passengers')->with('comments')->with('car')->orderBy('id', 'desc')->get();
        foreach ($advts as $key => $value) {
            $users = [];
            foreach ($value->passengers as $key => $passenger) {
                $oneuser = User::where('id', $passenger->user_id)->get();
                array_push($users, $oneuser);
            }
            $value->usersPass = $users;
        }
        return $advts;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $errors = Validator::make(
            $request->all(),
            [
                'header' => 'required|string|min:2|max:255',
                'description' => 'required|string|max:255',
                'place' => 'required|string|min:2|max:255',
                'point_meeting' => 'required|string|min:2|max:255'
            ],
            [
                'header.required' => 'Заголовок объявления обязателен',
                'header.string' => 'Заголовок объявления должен быть строкой',
                'header.min' => 'Заголовок объявления не может быть короче 2 символов',
                'header.max' => 'Заголовок объявления не может превышать 255 символов',

                'description.required' => 'Описание объявления обязательно',
                'description.string' => 'Описание объявления должно быть строкой',
                'description.max' => 'Описание объявления не может превышать 255 символов',

                'place.required' => 'Место рыбалки обязательно',
                'place.string' => 'Место рыбалки должно быть строкой',
                'place.min' => 'Место рыбалки не может быть короче 2 символов',
                'place.max' => 'Место рыбалки не может превышать 255 символов',

                'point_meeting.required' => 'Место сбора обязательно',
                'point_meeting.string' => 'Место сбора должно быть строкой',
                'point_meeting.min' => 'Место сбора не может быть короче 2 символов',
                'point_meeting.max' => 'Место сбора не может превышать 255 символов',
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        $userId = User::where('token', $request->token)->get('id');

        $advts = Advt::make($request->all());
        $advts->user_id = $userId[0]->id;
        $advts->save();
        return response('Объявление опубликовано');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
