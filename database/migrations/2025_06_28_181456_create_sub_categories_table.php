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
        Schema::create('sub_categories', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');  // Foreign key to categories table
            $table->string('sub_category_name')->nullable();
            // Define foreign key constraint with onDelete('cascade') or 'restrict'
            $table->foreign('category_id') ->references('id')->on('categories')->onDelete('cascade'); // Foreign key constraint with cascading delete
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sub_categories');
    }
};
