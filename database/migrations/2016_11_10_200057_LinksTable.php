<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
     {
       Schema::create('links', function (Blueprint $table) {
           $table->increments('id');
           $table->string('url',100);
           $table->dateTimeTz('date');
           $table->string('password',100);
           $table->string('randset', 10);
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
        //
    }
}
