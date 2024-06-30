<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Characters_quiz extends Model
{
    use HasFactory;

    protected $table = 'characters_quizzes';

    protected $fillable = ['id_character', 'id_quiz' , 'result'];
}
