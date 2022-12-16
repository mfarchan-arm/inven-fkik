<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommoditiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('commodities', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('school_operational_assistance_id');
            $table->unsignedBigInteger('commodity_location_id');
            $table->string('item_code');
            $table->string('register');
            $table->string('name');
            $table->string('brand');
            $table->tinyInteger('condition');
            $table->bigInteger('quantity');
            $table->string('unit');
            $table->string('vendor');
            $table->longText('note')->nullable();
            $table->timestamps();

            $table->foreign('school_operational_assistance_id')->references('id')->on('school_operational_assistances')->onDelete('CASCADE');
            $table->foreign('commodity_location_id')->references('id')->on('commodity_locations')->onDelete('CASCADE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('commodities');
    }
}
