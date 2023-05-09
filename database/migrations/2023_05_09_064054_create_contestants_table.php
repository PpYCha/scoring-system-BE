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
            $table->string('weight');
            $table->string('height');
            $table->string('shoeSize');
            $table->string('swimsuitSize');
            $table->string('bust');
            $table->string('waist');
            $table->string('hips');
            $table->string('nickname');
            $table->date('dateOfBirth');
            $table->string('birthPlace');
            $table->bigInteger('event_id')->unsigned();
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