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
        Schema::create('divisional_education_offices', function (Blueprint $table) {
            $table->id();
            $table->char('deo_id',10)->unique();
            $table->char('zeo_id',10);
            $table->string('deo_name');
            $table->string('deo_short_name',50);
            $table->string('email')->unique()->nullable();
            $table->string('phone', 20)->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();  // total 10 digits, 7 after decimal
            $table->decimal('longitude', 10, 7)->nullable();
            $table->enum('active_status', ['1','0'])->default('1');
            $table->timestamps();

            $table->foreign('zeo_id')->references('zeo_id')->on('zonal_education_offices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('divisional_education_offices');
    }
};
