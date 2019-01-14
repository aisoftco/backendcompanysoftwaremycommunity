<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;
    protected $table = 'services';
    protected $fillable = [
        'description',
        'image',
        'user_id'
    ];
    protected $dates = ['deleted_at'];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function serviceDetails(){
    	return $this->hasMany('App\ServiceDetail');
    }

}
