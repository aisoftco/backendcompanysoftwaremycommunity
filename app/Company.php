<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Company extends Model
{
    use SoftDeletes;
    protected $table = 'companies';
    protected $fillable = [
        'view',
        'mission',
        'description_view',
        'description_mission',
        'image_view',
        'image_mission',
        'email',
        'link_facebook'

    ];
    protected $dates = ['deleted_at'];

	  // relataion one to many
    public function Banners(){
    	return $this->hasMany(Banner::class);
    }

    // relataion one to many
    public function portafolios(){
    	return $this->hasMany('App\Portafolios');
    }

    // relataion one to many
    public function clients(){
    	return $this->hasMany('App\Client');
    }

    // relataion one to many
    public function teams(){
    	return $this->hasMany(Team::class);
    }
}
