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
            $table->char('workplace_id',10)->unique()->comment('Office ID');
            $table->char('census_no', 10)->unique();
            $table->char('institution_category_id', 10)->comment('Foreign key referencing institution_categories table');
            $table->char('authority_id', 10)->comment('Foreign key referencing authorities table');
            $table->char('district_id', 10);
            $table->char('zeo_wp_id', 10);
            $table->char('deo_wp_id', 10);
            $table->char('police_station_id', 10)->nullable()->comment('Foreign key referencing police_stations table');
            $table->char('moh_area_id', 10)->nullable()->comment('Foreign key referencing moh_areas table');
            $table->char('institution_types_id', 10)->comment('foreign key referencing institution_types table');
            $table->char('grade_span_id', 10)->nullable()->comment('foreign key referencing grade_spans table');
            $table->string('name');
            $table->string('short_name',50)->nullable();
            $table->date('established_year')->nullable()->comment('e.g., 2000-12-31  format  YYYY-MM-DD');
            $table->string('email')->unique()->nullable();
            $table->string('phone', 20)->unique()->nullable();
            $table->string('address')->nullable();
            $table->string('postal_code', 10)->nullable();
            $table->decimal('latitude', 10, 7)->nullable();  // total 10 digits, 7 after decimal
            $table->decimal('longitude', 10, 7)->nullable();
            $table->string('logo')->nullable();
            $table->enum('active_status', ['1','0'])->default('1');
            $table->timestamps();

            $table->foreign('zeo_wp_id')->references('workplace_id')->on('zonal_education_offices'); 
            $table->foreign('deo_wp_id')->references('workplace_id')->on('divisional_education_offices');
            $table->foreign('district_id')->references('district_id')->on('districts_lists');
            $table->foreign('institution_category_id')->references('institution_category_id')->on('institution_categories');
            $table->foreign('authority_id')->references('authority_id')->on('authorities');
            $table->foreign('police_station_id')->references('police_station_id')->on('police_stations')->onDelete('cascade');
            $table->foreign('moh_area_id')->references('moh_area_id')->on('moh_areas')->onDelete('cascade');
            $table->foreign('institution_types_id')->references('institution_types_id')->on('institution_types')->onDelete('cascade');
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
