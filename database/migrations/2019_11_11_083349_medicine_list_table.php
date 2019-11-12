<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MedicineListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('MedicineList', function (Blueprint $table) {
            $table->string('productCode')->unique();
            $table->string('name');
            $table->string('category');
            $table->float('purchasePrice');
            $table->float('sellingPrice');
            $table->string('quantity');
            $table->string('genericName');
            $table->string('companyName');
            $table->string('effects'); 
            $table->date('expiryDate');
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('MedicineList');
    }
}
