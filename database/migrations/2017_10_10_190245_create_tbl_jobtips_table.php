<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblJobtipsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_jobtips', function (Blueprint $table) {
            $table->increments('tips_id');
            $table->string('job_tips_name');
            $table->text('job_tips_description');
            $table->tinyInteger('publicatin_status');
            $table->text('job_tips_photo');
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
        Schema::dropIfExists('tbl_jobtips');
    }
}
