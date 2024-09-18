<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->string('invoice_code')->unique();
            $table->foreignId('purchase_id')->constrained('purchases');
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
