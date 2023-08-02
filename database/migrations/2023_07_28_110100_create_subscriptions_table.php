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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id();
            
            
                  $table->string('name')->nullable();
                   
                  $table->string('amount')->nullable();
                  $table->string('currency')->nullable();
                  $table->string('property_submission')->nullable();
                  
                  $table->string('featured_property')->nullable();
                  $table->string('top_property')->nullable();
                  
                  $table->string('urgent_property')->nullable();
                  
                  $table->string('line_1')->nullable();
                  
                  $table->string('line_2')->nullable();
                  
                  $table->string('line_3')->nullable();
                  
                  $table->string('line_4')->nullable();
                  
                  $table->string('user_id')->nullable();
                  
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
        Schema::dropIfExists('subscriptions');
    }
};
