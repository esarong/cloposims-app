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
        Schema::table('inventory', function (Blueprint $table) {
            $table->foreign('category_id')->references('category_id')->on('inventory_categories')->onDelete('set null');
            $table->foreign('supplier_id')->references('supplier_id')->on('suppliers')->onDelete('set null');
            $table->foreign('unit_id')->references('unit_id')->on('inventory_units')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('inventory', function (Blueprint $table) {
            //
        });
    }
};
