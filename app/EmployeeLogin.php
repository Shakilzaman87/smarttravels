<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class EmployeeLogin extends Authenticatable
{

    protected $table = "employee_login";
    protected $primaryKey = 'id';

    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile()
    {
        return $this->hasOne(ErpEmployee::class,'employee_id');
    }
    
    public function tasks()
    {
        return $this->hasMany(ErpTask::class,'task_assigned_to');
    }
    
    public function attendences()
    {
        return $this->hasMany(ErpEmployeeAttendence::class,'employee_id');
    }
}