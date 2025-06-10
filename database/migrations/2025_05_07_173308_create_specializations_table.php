<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('specializations', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->unsignedBigInteger('subcategory_id');
            $table->timestamps();

            $table->foreign('subcategory_id')->references('id')->on('subcategories');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('specializations');
    }
};
