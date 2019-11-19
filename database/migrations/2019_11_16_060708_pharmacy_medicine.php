<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PharmacyMedicine extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('PharmacyMedicine', function (Blueprint $table) {
            $table->increments('id');
            $table->Unsignedinteger('medicineId');
            $table->integer('purchasedPrice');
            $table->date('dateReceived');
            $table->date('dateCreated');
            $table->date('dateExpiry');
            $table->integer('quantity');
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
        Schema::dropIfExists('PharmacyMedicine');
    }
}
