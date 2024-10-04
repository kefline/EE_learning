<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory; 
    protected $fillable = [
        "name",
        "code",
        "credicts",
        "academic_year_id", 
        "description",
        "program_id", 
        "status",
    ];

    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function academicYear()
    {
        return $this->belongsTo(Academic_year::class, 'academic_year_id');
    }

   // Course.php
public function users()
{
    return $this->belongsToMany(User::class, 'user_course'); // 'user_course' is the pivot table name
}
public function questions(){
    return $this->hasMany(Question::class);
}
public function assignment(){
    return $this->hasMany(Assignment::class);
}

}
