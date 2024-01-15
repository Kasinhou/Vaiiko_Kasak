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
        Schema::create('recipes', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('info')->nullable();
            $table->integer('time')->nullable();
            $table->string('origin')->nullable();
            $table->string('difficulty')->default('začiatočník');
            $table->string('type')->nullable();
            $table->text('addinfo')->nullable();
            $table->string('imgpath')->nullable();
            $table->integer('likes')->nullable();
            $table->text('ingredients');
            $table->text('steps');
            $table->unsignedBigInteger('user_id')->nullable();
            $table->unsignedBigInteger('cousine_id')->nullable();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('cousine_id')->references('id')->on('cousines')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recipes');
    }
};
