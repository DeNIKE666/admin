<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Deposit extends Model
{
    protected $fillable = [
        'plan_id',
        'user_id',
        'amount',
        'status',
    ];

    public function plan()
    {
        return $this->hasOne(Plan::class , 'id' , 'plan_id');
    }
}
