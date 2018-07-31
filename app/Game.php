<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
  protected $fillable = [
    'name', 'alias', 'image', 'bgimage', 'description'
  ];
}
