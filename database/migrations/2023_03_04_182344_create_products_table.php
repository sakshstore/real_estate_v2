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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
               $table->string('title') ;
               $table->text('description')->nullable();
               
          $table->double('selling_price')->nullable();
      
          
               $table->text('thumbnail')->nullable()->default('no-image.png');
              $table->integer('user_id')->unsigned();
              
           
                  
        $table->enum('status', ['published', 'draft'])->default('draft');
        
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
        Schema::dropIfExists('products');
    }
};
