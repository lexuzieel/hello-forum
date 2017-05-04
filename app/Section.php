<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Section extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_login'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function topics() {
        return $this->hasMany(Topic::class);
    }
}
