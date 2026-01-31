<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blog', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('blog_category_id')->nullable();
            $table->string('title')->nullable();
            $table->string('slug')->nullable();
            $table->string('image')->nullable();
            $table->string('alt')->nullable();
            $table->text('description')->nullable();
            $table->string('facebook_link')->default('https://www.facebook.com/')->nullable();
            $table->string('twitter_link')->default('https://x.com/')->nullable();
            $table->string('instagram_link')->default('https://www.instagram.com/')->nullable();
            $table->string('youtube_link')->default('https://youtube.com/')->nullable();
            $table->text('seo_title')->nullable();
            $table->text('seo_des')->nullable();
            $table->text('seo_key')->nullable();
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
        Schema::dropIfExists('blog');
    }
}
