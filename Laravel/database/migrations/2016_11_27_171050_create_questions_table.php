<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //Creating table
        Schema::create('questions', function (Blueprint $table) {
            //Columns
            $table->increments('id');
            $table->unsignedInteger('parentId')->nullable();
            $table->unsignedInteger('leftChildId')->nullable();
            $table->unsignedInteger('rightChildId')->nullable();
            $table->string('question');
            $table->string('suggestion')->nullable();
            $table->timestamps();

            //Foreign keys
            $table->foreign('parentId')->references('id')->on('questions');
            $table->foreign('leftChildId')->references('id')->on('questions');
            $table->foreign('rightChildId')->references('id')->on('questions');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('questions');
    }
}
