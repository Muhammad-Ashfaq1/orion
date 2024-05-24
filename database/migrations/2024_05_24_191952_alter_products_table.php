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
        Schema::table('products', function (Blueprint $table) {
            // Changing existing integer columns to string
            $table->string('cut_round')->nullable()->change();
            $table->string('cut_square')->nullable()->change();
            $table->string('d_square')->nullable()->change();

            // Adding new string columns
            $table->string('lamp_size_w')->nullable();
            $table->string('lamp_size_l')->nullable();
            $table->string('lamp_size_i')->nullable();
            $table->string('lamp_size_t')->nullable();
            $table->string('ip_class')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('products', function (Blueprint $table) {
            // Reverting the string columns back to integer
            $table->integer('cut_round')->nullable()->change();
            $table->integer('cut_square')->nullable()->change();
            $table->integer('d_square')->nullable()->change();

            // Dropping the new string columns
            $table->dropColumn(['lamp_size_w', 'lamp_size_l', 'lamp_size_i', 'lamp_size_t', 'ip_class']);
        });
    }
};
