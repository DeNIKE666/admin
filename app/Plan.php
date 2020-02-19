<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Plan extends Model
{
    protected $fillable = [
        'title',
        'days',
        'percent',
        'status',
    ];

    public function setStatusAttribute($value)
    {
        return $this->attributes['status'] = $value  == 'enable' ? 1 : 0;
    }


}
