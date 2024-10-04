<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $table = "users";
    protected $fillable = [
        "name",
        "email",
        "reg_no",
        "level_id",
        'role_id',
        "department_id",
        "program_id",
        "course_id",
        "academic_year_id",
    ];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->role_id = 1;
        });

        static::deleting(function ($model) {
            $model->role_id = 1;
        });
    }

    public function newQuery()
    {
        $query = parent::newQuery();


        $query->where( 'role_id', 1);

        return $query;
    }

    public function department(){
        return $this->belongsTo(Department::class);
    }
    public function level(){
        return $this->belongsTo(Level::class);
    }
    public function academic_year(){
        return $this->belongsTo(Academic_year::class);
    }
    public function programs(){
        return $this->belongsTo(Program::class);

    }
 
    
}

