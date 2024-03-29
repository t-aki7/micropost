<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Micropost extends Model
{
    protected $fillable = ['content', 'user_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
    public function favorite_users() 
    {
        //kadai2
        return $this->belongsToMany(User::class, 'favorites', 'micropost_id', 'user_id')->withTimestamps();
    }
    
    public function is_favoriting($micropostId)
    {
        return $this->favorite_users()->where('micropost_id', $micropostId)->exists();
    }
}
