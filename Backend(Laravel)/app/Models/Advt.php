<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Photo;

class Advt extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'type',
        'type_of_user',
        'type_of_property',
        'area',
        'place_for_cars',
        'year_of_construction',
        'possession',
        'header',
        'floor',
        'address',
        'number_of_storeys',
        'status',
        'cost',
        'bathroom',
        'living_room',
        'bedroom',
        'kitchen',
        'benefits',
        'description',
        'tel',
    ];

    public function photos() {
        return $this->hasMany(Photo::class, 'advt_id', 'id');
    }

    public function electes() {
        return $this->hasMany(Electe::class, 'advt_id', 'id');
    }
}
