<?php

namespace App\models;

use Illuminate\Database\Eloquent\Model;

class Payment extends Model
{
    protected $fillable=[
        'total',
        'payment_type',
        'status',
        'customer_id',

    ];

    public function customerDetail(){
        return $this->belongsTo('App\models\CustomerDetail');
    }
}
