<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'code',
        'contact',
        'location',
        'description',
        'status',
    ];

    public function levels()
    {
        return $this->belongsToMany(Level::class, 'department_levels', 'department_id', 'level_id');
    }

    public function programs()
    {
        return $this->hasMany(Program::class);
    }
}
