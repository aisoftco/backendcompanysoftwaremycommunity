<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Client extends Model
{
    use SoftDeletes;
    protected $table = 'clients';
    protected $fillable = [
        'first_name',
        'last_name',
        'street',
        'city',
        'state',
        'zip_code',
        'email',
        'company_id'
    ];
    protected $dates = ['deleted_at'];

    public function company(){
        return $this->belongsTo('App\Company');
    }

    public function payments(){
    	return $this->hasMany('App\Payment');
    }
}
