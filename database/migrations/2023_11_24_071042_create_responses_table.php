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
        Schema::create('responses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')
                ->references('id')
                ->on('users');
            $table->string('title')->nullable();
            $table->string('description')->nullable();
            $table->enum('type', ['GET', 'POST', 'DELETE', 'PUT', 'PATCH']);
            $table->integer('code')->default(200);
            $table->longText('body');
            $table->longText('header')->nullable();
            $table->integer('requests')->default(0);
            $table->string('uuid');
            $table->dateTime('expire_time');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('responses');
    }
};
