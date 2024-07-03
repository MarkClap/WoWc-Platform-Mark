<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Institution extends Model
{
    use HasFactory;

    protected $fillable = [
        'name','phone_number' ,'email', 'password', 'id_user'
    ];

    protected $hidden = [
        'password','remember_token',
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
