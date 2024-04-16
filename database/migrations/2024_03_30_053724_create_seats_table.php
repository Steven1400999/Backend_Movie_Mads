<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('seats', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('schedule_id');
            $table->integer('seat_number');
            $table->enum('status', ['occupied', 'available'])->default('available');
            $table->timestamps();
        });

        DB::unprepared('
            CREATE TRIGGER after_schedule_insert
            AFTER INSERT ON schedules
            FOR EACH ROW
            BEGIN
                DECLARE i INT DEFAULT 1;
                WHILE i <= 50 DO
                    INSERT INTO seats (schedule_id, seat_number, status, created_at, updated_at)
                    VALUES (NEW.id, i, "available", NOW(), NOW());
                    SET i = i + 1;
                END WHILE;
            END;
        ');
    }

    public function down(): void
    {
        Schema::dropIfExists('seats');
        DB::unprepared('DROP TRIGGER IF EXISTS after_schedule_insert');
    }
};
