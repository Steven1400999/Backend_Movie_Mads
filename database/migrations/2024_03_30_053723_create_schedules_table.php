<?php
use App\Models\Movie;
use App\Models\Schedule;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('movie_id');
            $table->datetime('start_time');
            $table->dateTime('end_time')->nullable(); // Añade nullable para permitir valores nulos

            $table->integer('room');
            $table->integer('total_capacity')->default(50);
            $table->integer('available_seats')->default(50);
            $table->timestamps();

            $table->foreign('movie_id')->references('id')->on('movies')->onDelete('cascade');
        });

    }

    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
