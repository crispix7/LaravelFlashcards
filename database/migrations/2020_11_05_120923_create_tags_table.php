<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTagsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });

        Schema::create('flashcard_tag', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('flashcard_id');
            $table->unsignedBigInteger('tag_id');
            $table->timestamps();

            $table->unique(['flashcard_id', 'tag_id']);

            $table->foreign('flashcard_id')->references('id')->on('flashcards')->onDelete('cascade');
            $table->foreign('tag_id')->references('id')->on('tags')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('flashcard_tag');
        Schema::dropIfExists('tags');
    }
}
