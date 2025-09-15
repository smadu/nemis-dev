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
        Schema::create('appointment_categories', function (Blueprint $table) {
            $table->id();
            $table->char('appointment_category_id', 10)->unique()->comment('e.g., ACID01, ACID02');
            $table->string('categories_name', 50);
            $table->string('description')->nullable();
            $table->enum('active_status', ['0', '1'])->default('1')->comment('1: Active, 0: Inactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointment_categories');
    }
};
