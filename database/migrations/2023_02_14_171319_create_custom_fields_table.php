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
        Schema::create('saksh_fields', function (Blueprint $table) {
            $table->id();
            
                    $table->string('model');
   
   
    $table->string('field_type');
      
      
       $table->string('name');
      
      
    
    


 $table->json('attributes');
                                                    
                                                    
   $table->string('require');
                                                            
                                                            
                                                            
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
        Schema::dropIfExists('custom_fields');
    }
};
