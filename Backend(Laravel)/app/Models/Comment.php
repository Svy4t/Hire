<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $fillable = [
        'advt_id',
        'user_id',
        'description',
    ];

    public function user() {
        return $this->hasOne(User::class, 'id', 'user_id');
    }
}
