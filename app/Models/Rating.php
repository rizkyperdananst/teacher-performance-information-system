<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rating extends Model
{
    use HasFactory;

    protected $fillable = [
        'teacher_id',
        'course_id',
        'class_name_id',
        'tanggal_penilaian',
        'nilai',
    ];

    public function teachers()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    public function courses()
    {
        return $this->belongsTo(Course::class, 'course_id');
    }

    public function class_names()
    {
        return $this->belongsTo(ClassName::class, 'class_name_id');
    }
}
