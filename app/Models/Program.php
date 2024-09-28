<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    
    protected $table = "programs";
    
    public $fillable = [
        "name",
        "code",
        "contact",
        "location",
        "description",
        "department_id",
        "status",
    ];

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function courses(){
        return $this->hasMany(Course::class);
    }
    public function exams()
    {
        return $this->hasMany(Exam::class, 'program_id');
    }
}
