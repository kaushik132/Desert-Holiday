<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('seo_home_title')->nullable();
            $table->text('seo_home_des')->nullable();
            $table->text('seo_home_key')->nullable();
            $table->string('seo_about_title')->nullable();
            $table->text('seo_about_des')->nullable();
            $table->text('seo_about_key')->nullable();
            $table->string('seo_destination_title')->nullable();
            $table->text('seo_destination_des')->nullable();
            $table->text('seo_destination_key')->nullable();
            $table->string('seo_blog_title')->nullable();
            $table->text('seo_blog_des')->nullable();
            $table->text('seo_blog_key')->nullable();
            $table->string('seo_contact_title')->nullable();
            $table->text('seo_contact_des')->nullable();
            $table->text('seo_contact_key')->nullable();
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
        Schema::dropIfExists('seo');
    }
}
