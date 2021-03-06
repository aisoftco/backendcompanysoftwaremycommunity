<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Skill extends Model
{
  use SoftDeletes;
  protected $table = 'skills';
  protected $fillable = [
      'logo',
      'tecnology'
  ];
  protected $dates = ['deleted_at'];
  // relataion many to many
  public function Teams(){
    return $this->belongsToMany(Team::class);
  }
}
