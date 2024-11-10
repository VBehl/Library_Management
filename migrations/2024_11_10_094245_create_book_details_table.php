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
        Schema::create('bookdetails', function (Blueprint $table) {
            $table->id('ISBNCode');
            $table->string('name');
            $table->string('author')->nullable();
            $table->string('category')->nullable();
            $table->string('subcategory')->nullable();
            $table->string('class')->nullable();
            $table->string('inStock')->nullable();
            $table->integer('price')->nullable();
            $table->integer('rackNumber')->nullable();
            $table->integer('totalCopies')->nullable();
            $table->boolean('isShow')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_details');
    }
};
