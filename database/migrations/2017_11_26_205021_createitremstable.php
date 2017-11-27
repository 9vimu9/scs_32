<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Createitremstable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('items', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->unique();
          $table->integer('initial_quantity');
          $table->integer('quantity')->default(0);
          // $table->tinyInteger('status')->default(1)
          $table->softDeletes();
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
        Schema::dropIfExists('items');
    }
}
