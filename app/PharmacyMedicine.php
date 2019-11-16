<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PharmacyMedicine extends Model
{
    //
    protected $table = 'PharmacyMedicine';
    protected $guarded=['id','created_at','updated_at'

    ];
    public function medicines()
    {
        return $this->belongsTo(Medicine::class,'id');
    }
}
