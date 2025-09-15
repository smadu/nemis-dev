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
        Schema::create('employer_appointment_histories', function (Blueprint $table) {
            $table->id();
            $table->string('appointment_id', 12);
            $table->string('employee_id', 12);
            $table->date('appoint_date');
            $table->date('end_date');
            $table->char('service_id', 20)->comment('e.g., POS001, POS002, get from position table');
            $table->char('rank_id', 20)->nullable()->comment('e.g., RANK001, RANK002, get from rank table');
            $table->string('position_id', 10)->comment('e.g., POS001, POS002, get from position table');
            $table->char('office_level_id', 10)->comment('e.g., OFF001, OFF002');
            $table->char('office_id', 20)->comment('ID of the primary office');
            $table->enum('updated_type', ['0', '1'])->default('0')->comment('0: Promotion, 1: Transfer, 2:Rank Change, 3: Retirement, 4: Other');
            $table->timestamps();

            $table->foreign('employee_id')->references('people_id')->on('people')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('service_id')->references('service_id')->on('services')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('rank_id')->references('rank_id')->on('service_ranks')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('office_level_id')->references('office_level_id')->on('office_levels')->onDelete('restrict')->onUpdate('cascade');
            $table->foreign('position_id')->references('position_id')->on('positions')->onDelete('restrict')->onUpdate('cascade');
            // Note: The 'office_id' foreign key constraint is not added here due to its dynamic nature based on 'office_level_id'.
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_appointment_histories');
    }
};
