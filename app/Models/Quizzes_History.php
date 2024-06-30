<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Quizzes_History extends Model
{
    use HasFactory;

    protected $table = 'quizzes_history';

    protected $fillable = ['quiz', 'score' , 'id_character'];
}
