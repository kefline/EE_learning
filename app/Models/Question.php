<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "type",
        "level",
        "course_id",
        "exam_id",
        "academic_year_id",
        "deadline",
        "question_no",
        "status",
        "description"
    
    ];
    public function academicYear(){
        return $this->belongsTo(Academic_year::class);
    }
    public function course(){
        return $this->belongsTo(Course::class);

    }
    public function exam(){
        return $this->belongsTo(Exam::class);
    }
    public function questionlevels(){
        return $this->belongsTo(Questionlevel::class);
    }
    
}
