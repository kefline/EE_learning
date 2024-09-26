<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Instructor extends Model
{
    use HasFactory;
    protected $table = "instructors";
    protected $fillable = [
        "name",
        "email",
        "phone",
        'role_id',
        "specialization_id",
        "department_id",
        "course_id",
    ];
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($model) {
            $model->role_id = 2;
        });

        static::deleting(function ($model) {
            $model->role_id = 2;
        });
    }

    public function newQuery()
    {
        $query = parent::newQuery();


        $query->where( 'role_id', 2);

        return $query;
    }
    public function departments(){
        return $this->belongsTo(Department::class);
    }
    public function specialization(){
        return $this->belongsTo(Specialization::class);
    }
}
