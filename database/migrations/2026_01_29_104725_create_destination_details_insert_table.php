<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationDetailsInsertTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination_details_insert', function (Blueprint $table) {
            $table->increments('id');
            $table->string('order_num')->nullable();
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('package_id')->nullable();
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
        Schema::dropIfExists('destination_details_insert');
    }
}
