<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = [
        'name', 'alias', 'image', 'bgimage', 'description', 'points', 'rank'
    ];
}
