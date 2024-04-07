<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB; // Add this line

return new class extends Migration {
    /**
     * Create table.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->uuid('id')->default(DB::raw('UUID()'))->primary();
            $table->string('name');
            $table->string('barcode')->nullable();
            $table->decimal('price', 10, 2);
            $table->integer('qte');
            $table->timestamps();
        });
    }

    /**
     * Drop table.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};