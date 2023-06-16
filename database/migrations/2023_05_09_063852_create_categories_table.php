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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('category');
            $table->string('description')->nullable();
            $table->string('minimumPercentage')->nullable();
            $table->string('maximumPercentage')->nullable();
            $table->string('status')->nullable();
            $table->string('percentage');

            $table->bigInteger('event_id')->unsigned();
            $table->bigInteger('subEvent_id')->unsigned();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};