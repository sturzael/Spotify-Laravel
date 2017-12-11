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


          $table->char('Title');
          $table->char('Meta_Desc');
          // $table->char('Site_Logo');
          $table->char('page_name');
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
