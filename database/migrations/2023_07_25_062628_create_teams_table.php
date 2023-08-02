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
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            
              $table->string('full_name') ;
                           
                  
                  $table->text('about')->nullable();
                  
                  $table->string('instagram_url')->nullable();
                  
                  $table->string('facebook_url')->nullable();
                  
                  $table->string('linked_url')->nullable();
                  
                  $table->string('whatsapp_number')->nullable();
                  
                  
               $table->string('avatar')->nullable()->default('no-image.png');
               
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
        Schema::dropIfExists('teams');
    }
};
