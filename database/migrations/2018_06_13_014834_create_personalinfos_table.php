<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonalinfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if(!Schema::hasTable('personal_info')){
            Schema::create('personal_info', function(Blueprint $table){
                $table->increments('id');
                $table->string('firstname');
                $table->string('middlename');
                $table->string('surname');
                $table->string('address');
                $table->string('email');
                $table->string('phone');
                $table->string('course');
                // DB::statement('ALTER TABLE personal_info ADD COLUMN subjects integer');
                $table->json('subjects'); 
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_info');
    }
}
