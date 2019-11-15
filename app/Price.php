<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    //
    protected $table = 'Price';
    protected $guarded =['id','created_at','updated_at'

    ];
    public function inventories()
    {
        return $this->hasMany(Inventory::class, 'priceId');
    }
}
