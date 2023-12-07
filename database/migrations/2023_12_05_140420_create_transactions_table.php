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
        Schema::create('transactions', function (Blueprint $table) {
            $table->TransactionID();
            $table->UserID();
            $table->string(column:'CustomerName');
            $table->date(column:'TransactionDate');
            $table->double(column:'TransactionAmount');
            $table->string(column:'TransactionType');
            $table->double(column:'TransactionTaxAmount');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
