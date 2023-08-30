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
        Schema::create('application', function (Blueprint $table) {
            $table->id();
            $table->string('contact_number', 50);
            $table->string('email_address', 100);
            $table->string('job_type', 100);

            $table->string('pro_pic', 100);
            $table->string('nid', 100);
            $table->string('passport', 100);
            $table->string('skills', 100);

            $table->string('number_to_payment', 100);
            $table->string('transaction_id', 100);
            $table->string('number_from_payment', 100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apply_here');
    }
};
