<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExamCateTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_exam_cate', function (Blueprint $table) {
            $table->increments('examCateid');
            $table->string('exam_category_name');
            $table->text('exam_category_description')->nullable();
            $table->tinyInteger('publication_status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('tbl_exam_cate');
    }

}
