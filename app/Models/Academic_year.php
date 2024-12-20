<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Academic_year extends Model
{
    use HasFactory;
    public $fillable = [
        "name",
        "description"
    ];
    public function programs()
    {
        return $this->hasMany(Program::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class, 'academic_year_id');
    }
    public function users(){
        return $this->hasMany(User::class,'user_id');
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
