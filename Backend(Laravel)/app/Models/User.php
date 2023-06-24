<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'name',
        'surname',
        'middle_name',
        'email',
        'tel',
        'password',
        'token',
        'role',
        'avatar'
    ];

    public function photos() {
        return $this->hasMany(Photo::class, 'advt_id', 'advt_id');
    }

    public function advts() {
        return $this->hasMany(Advt::class, 'user_id', 'id');
    }

    public function electes() {
        return $this->hasMany(Electe::class, 'user_id', 'id');
    }
}
