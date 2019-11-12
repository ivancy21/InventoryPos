<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MedicineList extends Model
{
    //
    protected $table = 'MedicineList';
    protected $guarded=['productCode','created_at','updated_at'

    ];
}
