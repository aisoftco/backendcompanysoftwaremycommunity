<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Portafolio extends Model
{
    use SoftDeletes;
    protected $table = 'portafolios';
    protected $fillable = [
        'project_name',
        'description',
        'image',
        'link',
        'company_id'
    ];
    protected $dates = ['deleted_at'];

    public function company(){
        return $this->belongsTo('App\Company');
    }
}
