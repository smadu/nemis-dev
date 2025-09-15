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
        Schema::create('employer_appointments', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_id', 12)->unique();
            $table->string('employee_id', 12);
            $table->date('first_appointment_date');
            $table->date('retirement_date');
            $table->char('service_id', 20)->comment('e.g., POS001, POS002, get from position table');
            $table->char('rank_id', 20)->comment('e.g., RANK001, RANK002, get from rank table');
            $table->string('position_id', 10)->comment('e.g., POS001, POS002, get from position table');
            $table->char('office_level_id', 10)->comment('e.g., OL01, OL02');
            $table->char('office_id', 20)->comment('ID of the primary office');
            $table->char('appointment_category_id', 5)->comment('e.g., AC01, AC02, get from appointment_categories table');
            $table->string('appointment_letter_no')->nullable()->comment('Appointment letter number');
            $table->string('appointment_letter')->nullable()->comment('Path to the appointment letter document');
            $table->enum('active_status', ['0', '1'])->default('1')->comment('1: Active, 0: Inactive');
            $table->timestamps();

            // Composite unique constraint
            $table->unique(['service_id', 'employee_id']);

            // Foreign key constraint
            $table->foreign('office_level_id')->references('office_level_id')->on('office_levels')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('employee_id')->references('people_id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('appointment_category_id')->references('appointment_category_id')->on('appointment_categories')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('rank_id')->references('rank_id')->on('service_ranks')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_appointments');
    }
};
