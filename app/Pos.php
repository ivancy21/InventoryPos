<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pos extends Model
{
    //
    protected $table = 'Pos';
    protected $guarded=['id','created_at','updated_at'

    ];
    public function pos()
    {
        return $this->hasMany(PharmacyMedicine::class,'pharmacyMedicineId');
        return $this->hasMany(Medicine::class,'priceId');
    }
}
