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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user1s_id');
            $table->foreign('user1s_id')->references('id')->on('user1s');
            $table->string('name');
            $table->integer('age');
            $table->integer('height');
            $table->integer('weight');
            $table->string('profile_picture');
            $table->enum('workout_system',['bulk','cut'])->default('bulk');
            $table->enum('following',['online','private'])->default('online');
            $table->enum('subscription',['standard','premium','vip','friends'])->default('standard');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
