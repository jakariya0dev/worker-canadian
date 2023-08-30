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
        Schema::create('team', function (Blueprint $table) {
            $table->id();
            $table->string('name1', '50');
            $table->string('name2', '50');
            $table->string('name3', '50');
            $table->string('name4', '50');
            $table->string('position1', '50');
            $table->string('position2', '50');
            $table->string('position3', '50');
            $table->string('position4', '50');
            $table->string('pro_pic1', '50');
            $table->string('pro_pic2', '50');
            $table->string('pro_pic3', '50');
            $table->string('pro_pic4', '50');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('team');
    }
};
