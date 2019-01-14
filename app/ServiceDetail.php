<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class ServiceDetail extends Model
{
    use SoftDeletes;
    protected $table = 'service_details';
    protected $fillable = [
        'titlle',
        'description',
        'image',
        'service_id'
    ];
    protected $dates = ['deleted_at'];

    public function service(){
        return $this->belongsTo('App\Service');
    }
}
