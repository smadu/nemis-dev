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
        Schema::create('provincial_ministry_of_education_offices', function (Blueprint $table) {
            $table->id();
            $table->char('workplace_id',10)->unique()->comment('Office ID');
            $table->char('moe_wp_id',10);
            $table->string('name');
            $table->string('short_name',50);
            $table->string('email')->unique();
            $table->string('phone', 20)->unique();
            $table->string('address')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();  // total 10 digits, 7 after decimal
            $table->decimal('longitude', 10, 7)->nullable();
            $table->enum('active_status', ['1','0'])->default('1');
            $table->timestamps();

            $table->foreign('moe_wp_id')->references('workplace_id')->on('ministry_of_education_offices')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('provincial_ministry_of_education_offices');
    }
};
