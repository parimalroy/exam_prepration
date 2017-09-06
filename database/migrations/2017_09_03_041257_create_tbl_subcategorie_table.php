<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblSubcategorieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_subcategorie', function (Blueprint $table) {
            $table->increments('subcate_id');
            $table->string('sub_categorie_name');
            $table->integer('categorie_id');
            $table->text('sub_categorie_description')->nullable();
            $table->text('sub_category_photo');
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
        Schema::dropIfExists('tbl_subcategorie');
    }
}
