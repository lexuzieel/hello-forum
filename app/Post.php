<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'content', 'user_login', 'topic_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function topic() {
        return $this->belongsTo(Topic::class);
    }
}
