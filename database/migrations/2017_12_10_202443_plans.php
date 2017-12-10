<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Plans extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('plans', function (Blueprint $table) {
          $table->increments('id');
          // $table->string('site_logo',100);


          $table->char('plan_name');
          $table->decimal('plan_price',4,2);
          $table->char('plan_name2');
          $table->decimal('plan_price2',4,2);
          $table->char('plan_name3');
          $table->decimal('plan_price3',4,2);

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
