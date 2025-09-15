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
        Schema::create('institutions', function (Blueprint $table) {
            $table->id();
            $table->char('census_no', 10)->unique();
            $table->char('institutions_id', 10);
            $table->char('institution_type_id', 10)->comment('Foreign key referencing institution_types table');
            $table->char('authority_id', 10)->comment('Foreign key referencing authorities table');
            $table->char('office_level_id', 10)->comment('Foreign key referencing office_levels table');
            $table->char('district_id', 10);
            $table->char('zeo_id', 10);
            $table->char('deo_id', 10);
            $table->char('police_station_id', 10)->comment('Foreign key referencing police_stations table');
            $table->char('moh_area_id', 10)->comment('Foreign key referencing moh_areas table');
            $table->char('school_type_id', 10)->comment('foreign key referencing school_types table');
            $table->char('grade_span_id', 10)->comment('foreign key referencing grade_spans table');
            $table->string('school_name');
            $table->string('school_short_name',50)->nullable();
            $table->char('school_category', 10)->comment('e.g., Government, Private, International');
            $table->date('established_year')->comment('e.g., 2000-12-31  format  YYYY-MM-DD');
            $table->string('email')->unique();
            $table->string('phone', 20)->unique();
            $table->string('address')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();  // total 10 digits, 7 after decimal
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('logo')->nullable();
            $table->enum('active_status', ['1','0'])->default('1');
            $table->timestamps();

            $table->foreign('office_level_id')->references('office_level_id')->on('office_levels')->onDelete('cascade');
            $table->foreign('zeo_id')->references('zeo_id')->on('zonal_education_offices')->onDelete('cascade');
            $table->foreign('deo_id')->references('deo_id')->on('divisional_education_offices')->onDelete('cascade');
            $table->foreign('district_id')->references('district_id')->on('districts_lists')->onDelete('cascade');
            $table->foreign('institution_type_id')->references('institution_type_id')->on('institution_types')->onDelete('cascade');
            $table->foreign('authority_id')->references('authority_id')->on('authorities')->onDelete('cascade');
            $table->foreign('police_station_id')->references('police_station_id')->on('police_stations')->onDelete('cascade');
            $table->foreign('moh_area_id')->references('moh_area_id')->on('moh_areas')->onDelete('cascade');
            $table->foreign('school_type_id')->references('school_type_id')->on('school_types')->onDelete('cascade');
            $table->foreign('grade_span_id')->references('grade_span_id')->on('grade_spans')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('institutions');
    }
};
