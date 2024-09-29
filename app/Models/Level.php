<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Level extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'status',
    ];

    public function departments()
    {
        return $this->belongsToMany(Department::class, 'department_levels', 'level_id', 'department_id');
    }
    public function users(){
        return $this->hasMany(User::class,'user_id');
    }
}
