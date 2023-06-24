<?php

namespace App\Http\Controllers;

use App\Models\Advt;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class AdvtController extends Controller
{
    public function index()
    {
        return Advt::with('photos')->with('electes')->get();
    }

    public function store(Request $request)
    {
        $errors = Validator::make(
            $request->all(),
            [
                'type' => 'string|required|max:255',
                'type_of_user' => 'string|required|max:255',
                'type_of_property' => 'string|required|max:255',
                'area' => 'numeric|required',
                'place_for_cars' => 'string|required|max:255',
                'year_of_construction' => 'numeric|required',
                'possession' => 'string|required|max:255',
                'header' => 'string|required|max:255|min:5',
                'floor' => 'numeric|required|max:255',
                'address' => 'string|required|max:255',
                'number_of_storeys' => 'numeric|required|max:255',
                'status' => 'string|required|max:255',
                'cost' => 'numeric|required',
                'bathroom' => 'numeric|required|max:255',
                'living_room' => 'numeric|required|max:255',
                'bedroom' => 'numeric|required|max:255',
                'kitchen' => 'numeric|required|max:255',
                'benefits' => 'string|required|max:255',
                'description' => 'string|required|max:255',
                'tel' => 'string|required|max:255',
            ],
            [
                'type.string' => 'Тип объявления должен быть строкой',
                'type.required' => 'Тип объявления обязателен',

                'type_of_user.string' => 'Тип пользователя должен быть строкой',
                'type_of_user.required' => 'Тип пользователя обязателен',

                'type_of_property.string' => 'Тип недвижимости должен быть строкой',
                'type_of_property.required' => 'Тип недвижимости обязателен',

                'area.numeric' => 'Площадь должен быть строкой',
                'area.required' => 'Площадь обязателен',

                'place_for_cars.string' => 'Гараж|парковка должно быть строкой',
                'place_for_cars.required' => 'Гараж|парковка обязателено',

                'year_of_construction.numeric' => 'Год основания здания должен быть строкой',
                'year_of_construction.required' => 'Год основания здания обязателен',

                'possession.string' => 'Собственник должен быть строкой',
                'possession.required' => 'Собственник обязателен',

                'header.string' => 'Заголовок должен быть строкой',
                'header.required' => 'Заголовок обязателен',
                'header.max' => 'Заголовок не должен превышать количество символов: 255',
                'header.min' => 'Заголовок должен быть не меньше 5 букв',

                'floor.numeric' => 'Этаж должен быть строкой',
                'floor.required' => 'Этаж обязателен',

                'address.string' => 'Адрес должен быть строкой',
                'address.required' => 'Адрес обязателен',
                'address.max' => 'Адрес не должен превышать количество символов: 255',

                'number_of_storeys.numeric' => 'Этажность должен быть строкой',
                'number_of_storeys.required' => 'Этажность обязателен',

                'status.string' => 'Статус должен быть строкой',
                'status.required' => 'Статус обязателен',

                'cost.numeric' => 'Стоимость должна быть цифрами',
                'cost.required' => 'Стоимость обязателена',

                'bathroom.numeric' => 'Ванна должна быть цифрой',
                'bathroom.required' => 'Ванна обязателена',

                'living_room.numeric' => 'Гостинная должна быть цифрой',
                'living_room.required' => 'Гостинная обязателена',

                'bedroom.numeric' => 'Спальня должна быть цифрой',
                'bedroom.required' => 'Спальня обязателена',

                'kitchen.numeric' => 'Кухня должна быть цифрой',
                'kitchen.required' => 'Кухня обязателена',

                'benefits.string' => 'Преимущества должно быть строкой',
                'benefits.required' => 'Преимущества обязателено',

                'description.string' => 'Описание должно быть строкой',
                'description.required' => 'Описание обязателено',
                'description.max' => 'Описание не должно превышать количество символов: 555',
                'description.min' => 'Описание должно быть не меньше 5 букв',

                'tel.string' => 'Телефон должно быть строкой',
                'tel.required' => 'Телефон обязателено',
            ]
        );

        if ($errors->fails()) {
            return response()->json([
                'errors' => $errors->errors(),
            ], 422);
        }

        $advt = Advt::make($request->all());
        $advt->save();

        $photo = Advt::where('user_id', $request->user_id)->orderBy('id', 'DESC')->get('id');
        return response($photo[0], 200);
    }

    public function storePhotos(Request $request)
    {
        foreach ($request->files as $photo) {
            $filename = Str::random(15) . '.' . $photo->getClientOriginalExtension();
            $disk = Storage::build([
                'driver' => 'local',
                'root' => 'photos'
            ]);
            $disk->put('/' . $filename, file_get_contents($photo));

            $newPhoto = new Photo();
            $newPhoto->advt_id = $request->advt_id;
            $newPhoto->file_name = $filename;
            $newPhoto->save();
        }
    }

    public function getAdvtUser(Request $request) {
        return Advt::where('user_id', $request->id)->with('photos')->with('electes')->get();
    }

    public function getOneAdvt(Request $request) {
        return Advt::where('id', $request->id)->with('photos')->with('electes')->get();
    }

    public function delete(Request $request) {
        Advt::where('id', $request->id)->delete();
    }
}
