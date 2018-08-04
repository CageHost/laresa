<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    protected $fillable = [
        'name', 'alias', 'image', 'bgimage', 'description'
    ];

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function teams()
    {
        return $this->belongsToMany('App\Team');
    }
}
