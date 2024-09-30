<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'code',
        'date',
        'duration',
        'status',
        'academic_year_id',
        'program_id',
    ];
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    // Relationship with Academic_year
    public function academicYear()
    {
        return $this->belongsTo(Academic_year::class, 'academic_year_id');
    }
    public function questions(){
        return $this->hasMany(Question::class);
    }
}
