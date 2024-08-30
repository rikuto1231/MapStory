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
        Schema::create('posts', function (Blueprint $table) {
            $table->integer('post_id')->autoIncrement();
            $table->integer('user_id');
            $table->string('title');
            $table->text('content');
            $table->double('latitude');
            $table->double('longitude');
            $table->tinyInteger('is_deleted')->default(0);
            $table->timestamps();
    
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
