<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBasicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basics', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('site_logo',100);
            $table->string('site_header', 30);

            $table->text('site_para_one_header');
            $table->string('site_para_one_sub_header_1');
            $table->string('site_para_one_sub_header_2');
            $table->string('site_para_one_sub_header_3');
            $table->text('site_para_one_text_1');
            $table->text('site_para_one_text_2');
            $table->text('site_para_one_text_3');
            // $table->string('site_para_one_image',100);

            $table->string('site_para_two_header');
            $table->string('site_para_two_sub_header_1');
            $table->string('site_para_two_sub_header_2');
            $table->string('site_para_two_sub_header_3');
            $table->text('site_para_two_text_1');
            $table->text('site_para_two_text_2');
            $table->text('site_para_two_text_3');
            // $table->string('site_para_two_image',100);

            $table->string('footer_small_text');
            $table->string('footer_big_text');
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
        Schema::dropIfExists('basics');
    }
}
