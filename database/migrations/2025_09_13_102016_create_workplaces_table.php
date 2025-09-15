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
        Schema::create('workplaces', function (Blueprint $table) {
            $table->id();
            $table->char('workplaces_code', 10)->unique(); // Unique code for the workplace
            $table->string('name'); // Display name of the education office/school
            $table->char('type', 10); // ministry, provincial, zonal, divisional, school
            $table->char('main_ref_table_id', 10); // Main reference table identifier
            $table->timestamps();

            $table->foreign('type')->references('office_level_id')->on('office_levels')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('workplaces');
    }
};
