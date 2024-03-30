<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->text('description')->nullable();
            $table->integer('duration')->nullable();
            $table->unsignedBigInteger('language_id');
            $table->unsignedBigInteger('dubbing_id');
            $table->unsignedBigInteger('subtitle_id');
            $table->string('image')->nullable();

            $table->foreign('language_id')->references('id')->on('languages')->onDelete('cascade');
            $table->foreign('dubbing_id')->references('id')->on('dubbings')->onDelete('cascade');
            $table->foreign('subtitle_id')->references('id')->on('subtitles')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('movies');
    }
};
