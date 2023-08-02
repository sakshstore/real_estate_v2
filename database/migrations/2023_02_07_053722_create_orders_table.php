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
        Schema::create('orders', function (Blueprint $table) {
             $table->id();
                    $table->string('title') ;
                    
                    
               $table->text('description')->nullable();
                $table->string('service_id') ->nullable();
                     
          
               
                   $table->enum('payment_status', ['pending', 'completed'])->default('pending');
                  
                      $table->string('payment_reference_id') ->nullable();
                    
                      $table->json('custom_fields')->nullable();
           
               
                
                
                    $table->string('buyer_id') ;
                     
           
                
                 $table->enum('status', ['pending', 'completed'])->default('pending');
                 
                   $table->string('invoice_id') ->nullable();
                     $table->string('estimate_id') ->nullable();
                     
           
           $table->string('ip_address') ->nullable();
   
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
        Schema::dropIfExists('orders');
    }
};
