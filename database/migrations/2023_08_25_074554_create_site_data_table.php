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
        Schema::create('site_data', function (Blueprint $table) {
            $table->id();
            $table->string('site_name', 100);
            $table->text('site_title');
            $table->text('sub_title');
            $table->string('cell_number', 50);
            $table->text('location');
            $table->string('email', 100);
            $table->text('short_desc');
            $table->text('twitter');
            $table->text('facebook');
            $table->text('instagram');
            $table->text('linkedin');
            $table->text('bkash1');
            $table->text('bkash2');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('site_data');
    }
};
