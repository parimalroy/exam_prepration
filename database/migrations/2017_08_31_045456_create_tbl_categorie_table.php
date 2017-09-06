<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_categorie', function (Blueprint $table) {
            $table->increments('Cate_id');
            $table->string('category_name');
            $table->text('category_description')->nullable();
            $table->tinyInteger('publicatin_status');
            $table->text('category_photo');
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
        Schema::dropIfExists('tbl_categorie');
    }
}
