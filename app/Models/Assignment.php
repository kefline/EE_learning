<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'label',
        'deadline',
        'progress',
        'course_id',
        
    ];
    public function course(){
        return $this->belongsTo(Course::class);
    }
}
