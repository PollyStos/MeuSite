<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('admin_page', function (Blueprint $table) {
            $table->id();
            $table->string('Page');
            $table->timestamps();
        });

        DB::table('admin_page')->insert([
            ['Page' => 'Home'],
            ['Page' => 'Portfolio'],
            ['Page' => 'Blog'],
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('admin_page');
    }
};
