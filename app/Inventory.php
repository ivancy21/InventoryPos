<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Inventory extends Model
{
    //
    protected $table = 'Inventory';
    protected $guarded=['id','created_at','updated_at'

    ];
    public function prices()
    {
        return $this->hasMany(Price::class);
    }
}
