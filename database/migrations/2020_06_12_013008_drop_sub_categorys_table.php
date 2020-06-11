<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class DropSubCategorysTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sub_categorys', function (Blueprint $table) {
            $table->dropIfExists();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::create('sub_categorys', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->unsignedBigInteger('cate_id');
            $table->foreign('cate_id')->references('id')->on('categorys');
            $table->timestamps();
        });
    }
}
