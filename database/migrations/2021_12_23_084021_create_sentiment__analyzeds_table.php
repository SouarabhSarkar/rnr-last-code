<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSentimentAnalyzedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sentiment__analyzeds', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('tag');
            $table->enum('role',['reader','plumber','driver']);
            $table->integer('tag_count');
            $table->integer('sentiment_analyzed');
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
        Schema::dropIfExists('sentiment__analyzeds');
    }
}
