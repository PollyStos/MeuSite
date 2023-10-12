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
        Schema::create('admin_pages', function (Blueprint $table) {
            $table->id();
            $table->string('Page');
            $table->string('Flg');
            $table->string('URL');
            $table->boolean('CheckMenu');
            $table->boolean('CheckAba');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_pages');
    }
};