<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTicketsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tickets', function (Blueprint $table) {
            $table->increments('id');
         
            $table->string('title') ;
           
       
            $table->string('category');
             $table->string('status'); // enum('Open', 'Hold', 'Pending', 'Close') 	
            $table->integer('user_id')->unsigned();
            
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
        Schema::drop('tickets');
    }
}
