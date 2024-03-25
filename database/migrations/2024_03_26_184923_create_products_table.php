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
            $table->string('led_chips')->nullable();
            $table->string('light_efficiency')->nullable();
            $table->string('color_temperature')->nullable();
            $table->string('color_rendering_index')->nullable();
            $table->string('beam_angle')->nullable();
            $table->string('variant_type')->nullable();
            $table->string('fixture_size')->nullable();
            $table->string('fixture_material')->nullable();
            $table->string('fixture_color')->nullable();
            $table->string('driver_mode')->nullable();
            $table->string('voltage')->nullable();
            $table->string('life_span')->nullable();
            $table->string('warranty')->nullable();
            $table->string('certification')->nullable();
            $table->string('oem_odm_service')->nullable();
            $table->string('packing')->nullable();
            $table->string('free_samples')->default('Offered');
            $table->unsignedBigInteger('product_type_id')->nullable();
            $table->foreign('product_type_id')->references('id')->on('product_types')->onDelete('restrict');
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
