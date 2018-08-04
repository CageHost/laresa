<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'alias', 'image', 'bgimage', 'description', 'points', 'rank'
    ];

    public function events()
    {
        return $this->belongsToMany('App\Event');
    }

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
