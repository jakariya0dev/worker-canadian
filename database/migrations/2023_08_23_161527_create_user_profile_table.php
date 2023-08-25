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

            $table->string('sure_name', 100);
            $table->string('name', 100);
            $table->string('o_name', 100);
            $table->string('gender', 100);
            $table->string('m_status', 100);
            $table->string('religion', 100);
            $table->date('dob', 100);
            $table->string('pob', 100);
            $table->string('cob', 100);
            $table->string('nid', 100);
            $table->string('education', 100);
            $table->string('visibility', 100);
            $table->string('c_nation', 100);
            $table->string('n_type', 100);
            $table->string('o_nation', 100);

            $table->string('pass_no', 100);
            $table->date('pass_doi', 100);
            $table->string('pass_poi', 100);
            $table->date('pass_doe', 100);
            $table->string('op_no', 100);
            $table->date('op_doi', 100);
            $table->string('op_poi', 100);
            $table->date('op_doe', 100);

            $table->string('phone', 100);
            $table->string('mobile', 100)->unique();
            $table->string('email', 100);
            $table->text('pre_address');
            $table->text('per_address');
            
            $table->string('f_name', 100);
            $table->string('f_nation', 100);
            $table->string('f_cob', 100);
            $table->string('m_name', 100);
            $table->string('m_nation', 100);
            $table->string('m_cob', 100);
            $table->string('s_name', 100);
            $table->string('s_nation', 100);
            $table->string('s_cob', 100);

            $table->string('tov', 100);
            $table->string('noe', 100);
            $table->string('pov', 100);
            $table->date('edoj', 100);
            $table->string('poa', 100);
            $table->string('poe', 100);
            $table->string('status', 100);
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
