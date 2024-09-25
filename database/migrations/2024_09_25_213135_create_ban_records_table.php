<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('ban_records', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->dateTime('ban_duration');
            $table->dateTime('finish_date');
            $table->string('motive');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('ban_records');
    }
};
