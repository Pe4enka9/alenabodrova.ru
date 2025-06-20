<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('employments', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('stuff_specialization_id');
            $table->unsignedBigInteger('service_id');
            $table->dateTime('date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('stuff_specialization_id')->references('id')->on('stuff_specializations');
            $table->foreign('service_id')->references('id')->on('services');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('employments');
    }
};
