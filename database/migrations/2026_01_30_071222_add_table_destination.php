<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('destination', function (Blueprint $table) {
            $table->text('seo_title')->after('exclusions')->nullable();
            $table->text('seo_description')->after('seo_title')->nullable();
            $table->text('seo_keyword')->after('seo_description')->nullable();
            $table->string('seo_image')->after('seo_keyword')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('destination', function (Blueprint $table) {
            //
        });
    }
};
