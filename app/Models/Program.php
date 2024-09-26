<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Program extends Model
{
    use HasFactory;
    protected $table="programs";
    protected $fillable = [
        "name",
        "code",
        "contact",
        "location",
        "description",
        "department_id",
        'status',
    ];
    protected $casts = [
        'status' => 'integer',
    ];
    public function department(){
        return $this-> belongsTo(Department::class);
    }
    
}
