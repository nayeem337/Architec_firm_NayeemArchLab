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
        Schema::create('homes', function (Blueprint $table) {
            $table->id();
            $table->text('description')->nullable();
            $table->string('title')->nullable();    // Adds a nullable title column
            $table->string('title')->nullable();
            $table->string('image')->nullable();    // Use string instead of text for file paths/URLs


            // add manually title-name
            $table->timestamps();
        });
    }






//    public function up(): void
//    {
//        Schema::table('homes', function (Blueprint $table) {
//            if (!Schema::hasColumn('homes', 'title_name')) {
//                $table->string('title_name')->nullable();
//            }
//        });
//    }
//
//    public function down(): void
//    {
//        Schema::table('homes', function (Blueprint $table) {
//            $table->dropColumn('title_name');
//        });
//    }


    /**
     * Reverse the migrations.
     */

    public function down(): void
    {
        Schema::dropIfExists('homes');
    }



};
