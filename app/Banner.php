<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Banner extends Model
{
    use SoftDeletes;
    protected $table = 'banners';
    protected $fillable = [
        'titlle',
        'description',
        'image',
        'company_id'
    ];
    protected $dates = ['deleted_at'];


    
    public function company(){
        return $this->belongsTo('App\Company');
    }
}
