<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Electe extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'advt_id',
    ];

    public function advt() {
        return $this->hasOne(Advt::class, 'id', 'advt_id');
    }

    public function photos() {
        return $this->hasMany(Photo::class, 'advt_id', 'advt_id');
    }
}
