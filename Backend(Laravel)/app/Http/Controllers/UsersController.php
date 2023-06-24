<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    function auth(Request $request)
    {
        $errors = Validator::make(
            $request->all(),
            [
                'tel' => 'exists:users|string|required',
                'password' => 'required|string'
            ],
            [
                'tel.required' => 'Телефон обязателен',
                'tel.string' => 'Поле "Телефон" должно быть строкой',
                'tel.exists' => 'Данного пользователя не существует',
                'password.required' => 'Пароль обязателен',
                'password.string' => 'Пароль должен быть строкой'
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        $user = User::where('tel', $request->tel)->where('password', md5($request->password . 'salt'))->get();
        if (count($user)) {
            $token = Str::random(15);
            $newUser = $user[0];
            $newUser->token = $token;
            $newUser->save();
            return response()->json([
                'token' => $token,
                'id' => $newUser->id
            ]);
        }
        return response($request, 404);
    }

    function register(Request $request)
    {
        $errors = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:2|max:255',
                'surname' => 'required|string|min:2|max:255',
                'middle_name' => 'string|min:2|max:255',
                'email' => 'unique:users|email|string|required|min:8|max:255',
                'tel' => 'required|string',
                'password' => 'required|string|min:8|max:255|same:password_confirmation',
                'password_confirmation' => 'required|string|min:8|max:255',
            ],
            [
                'name.required' => 'Имя пользователя обязательно',
                'name.string' => 'Имя пользователя должно быть строкой',
                'name.min' => 'Имя пользователя не может быть короче 2 символов',
                'name.max' => 'Имя пользователя не может превышать 255 символов',

                'surname.required' => 'Фамилия пользователя обязательно',
                'surname.string' => 'Фамилия пользователя должно быть строкой',
                'surname.min' => 'Фамилия пользователя не может быть короче 2 символов',
                'surname.max' => 'Фамилия пользователя не может превышать 255 символов',

                'middle_name.string' => 'Отчество пользователя должно быть строкой',
                'middle_name.min' => 'Отчество пользователя не может быть короче 2 символов',
                'middle_name.max' => 'Отчество пользователя не может превышать 255 символов',

                'email.required' => 'Адрес электронной почты обязательно',
                'email.unique' => 'Адрес электронной почты уже занят',
                'email.string' => 'Адрес электронной почты должен быть строкой',
                'email.email' => 'Адрес электронной почты некорректен',
                'email.min' => 'Адрес электронной почты не может быть короче 8 символов',
                'email.max' => 'Адрес электронной почты не может превышать 255 символов',

                'tel.required' => 'Телефон обязателен',

                'password.required' => 'Пароль обязателен',
                'password.string' => 'Пароль должен быть строкой',
                'password.min' => 'Пароль не может быть короче 8 символов',
                'password.max' => 'Пароль не может превышать 255 символов',
                'password.same' => 'Пароли должны совпадать',

                'password_confirmation.required' => 'Подтверждение пароля обязательно',
                'password_confirmation.string' => 'Подтверждение пароля должно быть строкой',
                'password_confirmation.min' => 'Подтверждение пароля не может быть короче 8 символов',
                'password_confirmation.max' => 'Подтверждение пароля не может превышать 255 символов',
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        $user = new User();
        $user->name = $request->name;
        $user->surname = $request->surname;
        $user->middle_name = $request->middle_name;
        $user->password = md5($request->password . 'salt');
        $user->tel = $request->tel;
        $user->email = $request->email;
        $user->role = 'none';
        $user->token = Str::random(15);

        $filename = Str::random(15).'.'.$request->file('avatar')->getClientOriginalExtension();
        $disk = Storage::build([
            'driver' => 'local',
            'root' => 'avatars'
        ]);
        $disk->put('/'.$filename,file_get_contents($request->file('avatar')));

        $user->avatar = $filename;
        $user->save();
        return response('Вы зарегистрировались');
    }

    public function update(Request $request) {
        $errors = Validator::make(
            $request->all(),
            [
                'name' => 'required|string|min:2|max:255',
                'surname' => 'required|string|min:2|max:255',
                'middle_name' => 'string|min:2|max:255',
                'email' => 'unique:users|email|string|required|min:8|max:255',
                'tel' => 'required|string'
            ],
            [
                'name.required' => 'Имя пользователя обязательно',
                'name.string' => 'Имя пользователя должно быть строкой',
                'name.min' => 'Имя пользователя не может быть короче 2 символов',
                'name.max' => 'Имя пользователя не может превышать 255 символов',

                'surname.required' => 'Фамилия пользователя обязательно',
                'surname.string' => 'Фамилия пользователя должно быть строкой',
                'surname.min' => 'Фамилия пользователя не может быть короче 2 символов',
                'surname.max' => 'Фамилия пользователя не может превышать 255 символов',

                'middle_name.string' => 'Отчество пользователя должно быть строкой',
                'middle_name.min' => 'Отчество пользователя не может быть короче 2 символов',
                'middle_name.max' => 'Отчество пользователя не может превышать 255 символов',

                'email.required' => 'Адрес электронной почты обязательно',
                'email.unique' => 'Адрес электронной почты уже занят',
                'email.string' => 'Адрес электронной почты должен быть строкой',
                'email.email' => 'Адрес электронной почты некорректен',
                'email.min' => 'Адрес электронной почты не может быть короче 8 символов',
                'email.max' => 'Адрес электронной почты не может превышать 255 символов',

                'tel.required' => 'Телефон обязателен'
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        if ($request->file('avatar')!='') {
            $filename = Str::random(15).'.'.$request->file('avatar')->getClientOriginalExtension();
            $disk = Storage::build([
                'driver' => 'local',
                'root' => 'avatars'
            ]);
            $disk->put('/'.$filename,file_get_contents($request->file('avatar')));
            User::where('id', $request->id)->update([
                'avatar' => $filename,
                'name' => $request->name,
                'surname' => $request->surname,
                'middle_name' => $request->middle_name,
                'tel' => $request->tel,
                'email' => $request->email
            ]);
        } else {
            User::where('id', $request->id)->update([
                'name' => $request->name,
                'surname' => $request->surname,
                'middle_name' => $request->middle_name,
                'tel' => $request->tel,
                'email' => $request->email
            ]);
        }
    }

    function getUser(Request $request) {
        return User::where('token', $request->token)->get();
    }
}
