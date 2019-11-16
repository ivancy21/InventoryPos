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
            $table->Unsignedinteger('priceId');
            $table->integer('quantity');
            $table->date('dateReceived');
            $table->date('dateCreated');
            $table->date('dateExpiry');
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
