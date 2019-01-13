<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
  // relataion many to many
  public function Skills(){
    return $this->belongsToMany(Skill::class);
  }


}
