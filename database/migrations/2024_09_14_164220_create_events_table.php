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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->text('where');
            $table->text('when');
            $table->timestamp('date');
            $table->text('music_type');
            $table->jsonb('event_type');
            $table->text('zone');
            $table->text('price');
            $table->text('managerName');
            $table->text('email');
            $table->text('phone');
            $table->text('desc');
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
