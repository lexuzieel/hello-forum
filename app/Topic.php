<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'user_login', 'section_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function section() {
        return $this->belongsTo(Section::class);
    }

    public function posts() {
        return $this->hasMany(Post::class);
    }
}
