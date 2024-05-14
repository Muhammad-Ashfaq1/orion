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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('product_type_id');
            $table->string('product_model')->nullable();
            $table->integer('wattage')->nullable();
            $table->integer('initial_lumen')->nullable();
            $table->integer('stable_lumen')->nullable();
            $table->integer('ra')->nullable();
            $table->integer('beam_angle')->nullable();
            $table->integer('life_hours')->nullable();
            $table->integer('guarantee')->nullable();
            $table->integer('lamp_size_h1')->nullable();
            $table->string('lamp_size_h2')->nullable();
            $table->string('lamp_size_d')->nullable();
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('cascade')->onUpdate('cascade');
            $table->softDeletes();
            $table->string('image_url')->nullable();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
