<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDestinationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('destination', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category_id')->nullable();
            $table->string('thumb_image')->nullable();
            $table->json('gallery')->nullable();
            $table->string('alt')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->text('short_description')->nullable();
            $table->string('tour_duration')->nullable();
            $table->string('tour_group')->nullable();
            $table->string('tour_location')->nullable();
            $table->string('best_time')->nullable();
            $table->string('pickup_location')->nullable();
            $table->string('tour_reviews')->nullable();
            $table->text('description')->nullable();
            $table->string('itinerarys')->nullable();
            $table->json('inclusions')->nullable();
            $table->json('exclusions')->nullable();
            $table->integer('is_active')->default('1')->nullable();
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
        Schema::dropIfExists('destination');
    }
}
