<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teachers_Course extends Model
{
    use HasFactory;

    protected $table = 'teachers_courses';

    protected $fillable = [
        'id_teacher',
        'id_course',
    ];

    public function course(){
        return $this->belongsTo(\App\Models\Course::class, 'id_course', 'id');
    }

    public function teacher(){
        return $this->belongsTo(\App\Models\Teacher::class, 'id_teacher', 'id');
    }
}
