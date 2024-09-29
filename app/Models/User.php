<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'phone',
        'reg_no',
        'department_id',
        'level_id',
        'program_id',
        'specialization_id',
        'academic_year_id',
        'status',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    protected static function boot()
    {
        parent::boot();

        // Removing this unless you want it to always set role_id to 3
        // static::creating(function ($model) {
        //     $model->role_id = 3;
        // });

        // static::deleting(function ($model) {
        //     $model->role_id = 3;
        // });
    }

    /**
     * The attributes that should be cast to native types.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Relationship to Role
     */
    public function role()
    {
        return $this->belongsTo(Role::class); 
    }

    public function specialization()
    {
        return $this->belongsTo(Specialization::class);
    }

    public function department() // Singular form for relationship
    {
        return $this->belongsTo(Department::class, 'department_id'); 
    }

    public function courses()
    {
        return $this->belongsToMany(Course::class, 'user_course'); 
    }

    public function level() // Singular form for relationship
    {
        return $this->belongsTo(Level::class, 'level_id');
    }

    public function program() // Singular form for relationship
    {
        return $this->belongsTo(Program::class, 'program_id');
    }

    public function academicYear() // Singular form for relationship
    {
        return $this->belongsTo(Academic_year::class, 'academic_year_id');
    }
}
