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
        Schema::create('user_profile', function(Blueprint $table){
            $table->id();

            $table->string('sure_name', 100)->nullable();
            $table->string('name', 100)->nullable();
            $table->string('o_name', 100)->nullable();
            $table->string('gender', 100)->nullable();
            $table->string('m_status', 100)->nullable();
            $table->string('religion', 100)->nullable();
            $table->date('dob', 100)->nullable();
            $table->string('pob', 100)->nullable();
            $table->string('cob', 100)->nullable();
            $table->string('nid', 100)->nullable();
            $table->string('education', 100)->nullable();
            $table->string('visibility', 100)->nullable();
            $table->string('c_nation', 100)->nullable();
            $table->string('n_type', 100)->nullable();
            $table->string('o_nation', 100)->nullable();

            $table->string('pass_no', 100)->nullable();
            $table->date('pass_doi', 100)->nullable();
            $table->string('pass_poi', 100)->nullable();
            $table->date('pass_doe', 100)->nullable();
            $table->string('op_no', 100)->nullable();
            $table->date('op_doi', 100)->nullable();
            $table->string('op_poi', 100)->nullable();
            $table->date('op_doe', 100)->nullable();

            $table->string('phone', 100)->nullable();
            $table->string('mobile', 100)->unique();
            $table->string('email', 100)->unique();
            $table->text('pre_address')->nullable();
            $table->text('per_address')->nullable();
            
            $table->string('f_name', 100)->nullable();
            $table->string('f_nation', 100)->nullable();
            $table->string('f_cob', 100)->nullable();
            $table->string('m_name', 100)->nullable();
            $table->string('m_nation', 100)->nullable();
            $table->string('m_cob', 100)->nullable();
            $table->string('s_name', 100)->nullable();
            $table->string('s_nation', 100)->nullable();
            $table->string('s_cob', 100)->nullable();

            $table->string('tov', 100)->nullable();
            $table->string('noe', 100)->nullable();
            $table->string('pov', 100)->nullable();
            $table->date('edoj', 100)->nullable();
            $table->string('poa', 100)->nullable();
            $table->string('poe', 100)->nullable();
            $table->string('status', 100)->nullable();
            $table->string('pro_pic', 100)->nullable();
            $table->string('password', 100);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
