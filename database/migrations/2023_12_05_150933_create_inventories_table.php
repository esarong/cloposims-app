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
        Schema::create('inventories', function (Blueprint $table) {
            $table->ProductID();
            $table->CategoryID();
            $table->SupplierID();
            $table->UnitID();
            $table->string(column:'ProductName');
            $table->string(column:'ProductLocation');
            $table->string(column:'ProductQuantity');
            $table->string(column:'ProductDescription');
            $table->double(column:'UnitPrice');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
