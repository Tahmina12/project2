<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('categoryId');
            $table->integer('subcategoryId');
            $table->text('newsTitle');
            $table->string('authorName',100);
            $table->text('newsShortDescription');
            $table->text('newsLongDescription');
            $table->text('addVideo')->nullable();
            $table->tinyInteger('publicationStatus')->nullable();
            $table->text('newsImage')->nullable();
            $table->tinyInteger('breakingNews')->nullable();
            $table->integer('view_count')->default(0);
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
        Schema::dropIfExists('news');
    }
}
