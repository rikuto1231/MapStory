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
        Schema::create('records', function (Blueprint $table) {
            $table->integer('record_id')->autoIncrement();
            $table->integer('post_id');
            $table->integer('history_id');
            $table->timestamps();

            $table->foreign('post_id')->references('post_id')->on('posts')->onDelete('cascade');
            $table->foreign('history_id')->references('history_id')->on('histories')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('records');
    }
};
