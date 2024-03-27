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
        if (!Schema::hasTable('products')) {
            Schema::create('products', function (Blueprint $table) {
                $table->id();
                $table->string('product_name', 255);
                $table->decimal('regular_price', 10, 2)->nullable();
                $table->decimal('discount_price', 10, 2)->nullable();
                $table->integer('quantity')->nullable();
                $table->text('short_description')->nullable();
                $table->text('product_description')->nullable();
                $table->string('image');
                $table->unsignedBigInteger('category_id')->nullable();
                $table->softDeletes();
                $table->timestamp('created_at')->useCurrent();
                $table->timestamp('updated_at')->useCurrent();
            });
        }
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
