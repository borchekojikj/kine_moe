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
        Schema::create('user_infos', function (Blueprint $table) {
            $table->id();
            $table->string('description')->nullable();
            $table->foreignId('user_id')->constrained('users');
            // $table->string('culture');
            // $table->string('recommendations');
            $table->string('notifications');
            // $table->foreignId('notifications')->constrained('notifications', 'id');
            $table->string('explore_style');
            // $table->string('interests');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_infos');
    }
};
