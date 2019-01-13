<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Skill extends Model
{
  // relataion many to many
  public function Teams(){
    return $this->belongsToMany(Team::class);
  }
}
