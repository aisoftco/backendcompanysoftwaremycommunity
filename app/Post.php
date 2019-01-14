<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;
    protected $table = 'posts';
    protected $fillable = [
        'titlle',
        'summary',
        'description',
        'image',
        'user_id'
    ];
    protected $dates = ['deleted_at'];

    public function coments(){
    	return $this->hasMany('App\PostComent');
    }

    public function user(){
        return $this->belongsTo('App\User');
    }
}
