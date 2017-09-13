<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExamSubCateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exam_sub_cate', function (Blueprint $table) {
            $table->increments('examSubCateId');
            $table->string('exam_sub_category_name');
            $table->integer('exam_categorie_id');
            $table->text('exam_sub_category_description')->nullable();
            $table->tinyInteger('publication_status');
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
        Schema::dropIfExists('tbl_exam_sub_cate');
    }
}
