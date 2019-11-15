<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InventoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Inventory', function (Blueprint $table) {
            $table->increments('id');
            $table->Unsignedinteger('priceId');
            $table->integer('quantity');
            $table->string('dateReceived');
            $table->string('dateCreated');
            $table->string('dateExpiry');
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
        Schema::dropIfExists('Inventory');
    }
}
