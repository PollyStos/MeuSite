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
        Schema::create('admin_page_sections', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('page_id');
                $table->string('section_name');
                $table->string('URL');
                $table->boolean('CheckMenu');
                $table->timestamps();
    
                $table->foreign('page_id')->references('id')->on('pages')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_page_sections');
    }
};
