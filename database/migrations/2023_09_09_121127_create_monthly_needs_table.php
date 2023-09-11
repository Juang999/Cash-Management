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
        Schema::create('monthly_needs', function (Blueprint $table) {
            $table->id();
            $table->string("periode_code");
            $table->integer('need_category_id');
            $table->string('description');
            $table->unsignedDecimal('nominal');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monthly_needs');
    }
};
