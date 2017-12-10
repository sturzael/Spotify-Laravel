<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Images extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('images', function (Blueprint $table) {
          $table->increments('id');
          // $table->string('site_logo',100);


          $table->char('home_image');
          $table->char('page_image');
            $table->char('block1_image');
              $table->char('block2_image');
              $table->char('block3_image');
                $table->char('block4_image');

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
