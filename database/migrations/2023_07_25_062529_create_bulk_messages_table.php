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
        Schema::create('bulk_messages', function (Blueprint $table) {
            $table->id();
            
                  $table->text('content')->nullable();
               
                  $table->string('plateforms')->nullable();
                  
                  $table->string('delivery_time')->nullable();
                  
                  
                  $table->string('status')->default('pending');
               
                $table->string('user_id') ; 
                  
                  
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
        Schema::dropIfExists('bulk_messages');
    }
};
