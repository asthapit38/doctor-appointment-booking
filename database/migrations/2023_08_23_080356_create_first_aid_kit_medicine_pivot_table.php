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
        Schema::create('first_aid_kit_medicine_pivot', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('first_aid_kit_id');
            $table->unsignedBigInteger('medicine_id');
            $table->integer('quantity');
            $table->timestamps();

            $table->foreign('first_aid_kit_id')->references('id')->on('first_aid_kits')->onDelete('cascade');
            $table->foreign('medicine_id')->references('id')->on('medicines')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('first_aid_kit_medicine_pivot');
    }
};
