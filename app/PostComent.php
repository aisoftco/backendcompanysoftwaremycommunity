<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PostComent extends Model
{
    use SoftDeletes;
    protected $table = 'post_coments';
    protected $fillable = [
        'message',
        'date_coment',
        'post_id'
    ];
    protected $dates = ['deleted_at'];

    public function post(){
        return $this->belongsTo('App\Post');
    }

}
