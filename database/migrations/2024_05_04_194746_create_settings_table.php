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
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('name', 150);
            $table->string('phone', 150);
            $table->string('logo', 255)->nullable;
            $table->tinyInteger('state')->default(1);
            $table->decimal('hour',10,2);
            $table->decimal('start',10,2);
            $table->decimal('end',10,2);
            $table->decimal('after_count_time', 10,2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('settings');
    }
};
