<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory; // Make sure the field names match with your form and database columns
    protected $fillable = [
        "name",
        "code",
        "credicts", // Ensure this matches your form and database
        "academic_year_id", // Foreign key for academic year
        "description",
        "program_id", // Foreign key for program
        "status",
    ];

    // A course belongs to one program
    public function program()
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    // A course belongs to one academic year
    public function academicYear()
    {
        return $this->belongsTo(Academic_year::class, 'academic_year_id');
    }

    // If a course can be assigned to many users
    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
