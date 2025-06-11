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
        Schema::create('rooms', function (Blueprint $table) {
            $table->id();
            $table->text("room_name");
            $table->enum('room_type', ['Single Bed', 'Double Bed', 'Double Superior', 'Suite']);
            $table->text("description");
            $table->text("photos");
            $table->boolean('offer')->default(false);
            $table->decimal("price", 10, 2);
            $table->decimal("discount", 5, 2);
            $table->text("cancellation_policy");
            $table->enum('status', ['Available', 'Booked']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rooms');
    }
};
