<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblQueTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('tbl_que', function (Blueprint $table) {
            $table->increments('ques_id');
            $table->string('question_name');
            $table->string('answare_name');
            $table->integer('categorie_id');
            $table->text('question_description')->nullable();
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
        Schema::dropIfExists('tbl_que');
    }

}
