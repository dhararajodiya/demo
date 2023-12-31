<?php

namespace Modules\Blog\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PhoneDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'phone',

    ];


    protected static function newFactory()
    {
        return \Modules\Blog\Database\factories\PhoneDetailFactory::new();
    }
}
