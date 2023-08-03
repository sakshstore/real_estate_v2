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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
              $table->string('name') ;
            $table->string('email') ;
             $table->string('phone') ;
              $table->string('service_id') ;
                    $table->string('user_id') ;
                       $table->string('ip_address') ;
                          $table->string('request_url') ;   
                          $table->string('status') ->nullable() ;
               ;
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
        Schema::dropIfExists('leads');
    }
};
