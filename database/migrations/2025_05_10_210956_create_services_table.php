<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('specialization_id')->nullable();
            $table->unsignedBigInteger('subcategory_id');
            $table->unsignedBigInteger('length_id')->nullable();
            $table->float('price');
            $table->float('additionally')->nullable();
            $table->timestamps();

            $table->foreign('specialization_id')->references('id')->on('specializations');
            $table->foreign('subcategory_id')->references('id')->on('subcategories');
            $table->foreign('length_id')->references('id')->on('lengths');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
