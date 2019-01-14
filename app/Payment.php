<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Payment extends Model
{
    use SoftDeletes;
    protected $table = 'payments';
    protected $fillable = [
        'card_number',
        'expiration_date_card',
        'name_card',
        'security_number_card',
        'amount_paid',
        'client_id'
    ];
    protected $dates = ['deleted_at'];

    public function client(){
        return $this->belongsTo('App\Client');
    }
}
