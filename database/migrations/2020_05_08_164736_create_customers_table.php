<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customers', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('fullname');
            $table->string('email');
            $table->string('phone');
            $table->longText('vehicles');
			$table->longText('communication');
			$table->longText('address');
            $table->string('username');   
            $table->string('servername');            
            $table->timestamps();
			$table->timestamps();
			$table->tinyInteger('status');
        });
			
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customers');
    }
}



