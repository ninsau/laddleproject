<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSellDraftTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('sell_draft', function (Blueprint $table) {
          $table->id();
          $table->string('title');
          $table->string('description');
          $table->string('url');
          $table->string('image');
          $table->string('guide');
          $table->string('price');
          $table->string('identifier');
          $table->string('email');
          $table->string('name');
          $table->string('status');
          $table->string('dte');
          $table->integer('views');
          $table->integer('sold');
          $table->integer('earned');
          $table->integer('clicks');
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
