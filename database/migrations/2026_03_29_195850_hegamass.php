<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Eloquent\Model;
return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hegamas',function(blueprint $table){
            $table->id();
            $table->string('name');
            $table->integer('height');
            $table->integer('age');
            $table->string('phone');
            $table->text('medical_history');
            $table->enum('hegama',['جلسه حجامه',"جلسه مساج","جلسه حجامه وابر صينيه","مساج وكيرو براكتيك","جلسه كامله"])->default('جلسه حجامه');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        schema::dropifexists('hegamas');
    }
};
