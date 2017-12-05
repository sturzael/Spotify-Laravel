<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Colours extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('colours', function (Blueprint $table) {
          $table->increments('id');
          // $table->string('site_logo',100);


          $table->char('text_colour');
          $table->char('header_colour');
          $table->char('block_colour');
          $table->char('deal_colour');
          $table->char('oncolour_text_colour');
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
