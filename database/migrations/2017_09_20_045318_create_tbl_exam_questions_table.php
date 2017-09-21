<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblExamQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_exam_questions', function (Blueprint $table) {
            $table->increments('exam_questin_id');
            $table->string('exam_question_name');
            $table->string('exam_answare_name');
            $table->integer('exam_sub_categorie_id');
            $table->text('exam_question_description')->nullable();
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
        Schema::dropIfExists('tbl_exam_questions');
    }
}
