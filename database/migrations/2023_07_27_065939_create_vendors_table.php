<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->id();
            
            
                $table->string('name');
            $table->string('email')->unique();
            $table->string('company_name')->nullable();
            $table->string('registeration_number')->nullable();
            $table->string('phone')->nullable();
            $table->string('mobile')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->string('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('pin')->nullable();
            
            $table->string('referral')->nullable();
            
            
            $table->string('selected_plan')->nullable();
            
            
            $table->string('annual_earning')->nullable();
            
            $table->string('total_experience')->nullable();
            
            $table->string('timezone')->nullable();
            
            $table->string('avatar')->nullable();
            
            
            
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
        Schema::dropIfExists('vendors');
    }
};
