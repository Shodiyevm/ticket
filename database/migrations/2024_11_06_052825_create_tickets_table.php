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
        Schema::create('tickets', function (Blueprint $table) {
            $table->id();
            $table->string('image_path', 255)->nullable()->after('ticket_kid_quantity');
            $table->string('event_id', 10);
            $table->dateTime('event_date');
            $table->integer('ticket_adult_price');
            $table->integer('ticket_adult_quantity')->default(0);
            $table->integer('ticket_kid_price');
            $table->integer('ticket_kid_quantity')->default(0);
            $table->string('barcode', 50)->unique();
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->integer('equal_price');
            $table->string('event_name', 100);
            $table->enum('ticket_status', ['available', 'sold', 'reserved'])->default('available');
            $table->string('seat_number', 10)->nullable();
            $table->float('discount', 8, 2)->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tickets');
    }
};
