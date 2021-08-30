<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'role_id',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
     //method to encrypt de password
     public function setPasswordAttribute($password){
        $this->attributes['password'] = $password;
    }
    //methot to Captalize the firt letter
    public function getNameAttribute($name){

        return ucfirst($name);
    }

    //methot to create relationship 
    public function role(){
        return $this->belongsTo(Role::class);
    }

    public function hasPermission($name){
       return $this->role->permissions()->where('name', $name)->exists();
    }
}