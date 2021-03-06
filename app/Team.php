<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Team extends Model
{
    use SoftDeletes;
    protected $table = 'teams';
    protected $fillable = [
        'first_name',
        'last_name',
        'image',
        'position',
        'network',
        'description',
        'company_id'
    ];
    protected $dates = ['deleted_at'];
    // relataion many to many
  public function Skills(){
    return $this->belongsToMany(Skill::class);
  }


}
