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
        Schema::create('contestants', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('municipality');
            $table->string('age');
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('shoeSize')->nullable();
            $table->string('swimsuitSize')->nullable();
            $table->string('bust');
            $table->string('waist');
            $table->string('hips');
            $table->string('nickname');
            $table->string('image')->nullable();
            $table->date('dateOfBirth')->nullable();
            $table->string('birthPlace')->nullable();
            $table->string('cotestant_number')->nullable();
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
        Schema::dropIfExists('contestants');
    }
};