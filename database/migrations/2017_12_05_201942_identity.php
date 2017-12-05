<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Identity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('identity', function (Blueprint $table) {
          $table->increments('id');
          // $table->string('site_logo',100);


          $table->string('Title');
          $table->string('Meta_Desc');
          // $table->char('Site_Logo');
          $table->string('page_name');
          $table->string('favicon');
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
