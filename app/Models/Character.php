<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'experience',
        'gold',
        'appearance',
        'gender',
        'time',
        'Ambience',
        'id_class',
        'id_group',
        'id_inscription',
    ];

    public function inscription()
    {
        return $this->belongsTo(Inscription::class, 'id_inscription');
    }
}