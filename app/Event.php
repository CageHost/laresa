<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name', 'alias', 'image', 'bgimage', 'description', 'date', 'time', 'location', 'type'
    ];

    public function games()
    {
        return $this->belongsToMany('App\Game');
    }
}
