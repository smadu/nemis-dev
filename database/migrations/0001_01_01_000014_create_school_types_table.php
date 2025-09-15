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
        Schema::create('school_types', function (Blueprint $table) {
            $table->id();
            $table->char('school_type_id', 10)->unique()->comment('example. STID01, STID02');
            $table->string('school_type_name', 150)->unique()->comment('Type Name');
            $table->string('description')->nullable();
            $table->enum('active_status', ['1','0'])->default('1');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('school_types');
    }
};
