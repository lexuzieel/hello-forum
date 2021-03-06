<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $primaryKey = 'login';

    public $incrementing = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'login', 'email', 'password', 'first_name', 'last_name', 'role_title'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    public function getFullNameAttribute() {
        return $this->first_name . ' ' . $this->last_name;
    }

    public function getBlockedAttribute() {
        return $this->role->level <= 0;
    }

    public function role() {
        return $this->belongsTo(Role::class);
    }

    public function sections() {
        return $this->hasMany(Section::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
