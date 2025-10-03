<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Institution extends Model
{
    use HasFactory;

    protected $table = 'institutions';

    protected $primaryKey = 'id';

    protected $fillable = [
        'workplace_id',
        'census_no',
        'institution_category_id',
        'authority_id',
        'district_id',
        'zeo_wp_id',
        'deo_wp_id',
        'police_station_id',
        'moh_area_id',
        'institution_types_id',
        'grade_span_id',
        'name',
        'short_name',
        'established_year',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'logo',
        'active_status',
    ];

    /* ============================
       Relationships
       ============================ */

    public function zonalEducationOffice()
    {
        return $this->belongsTo(ZonalEducationOffice::class, 'zeo_wp_id', 'workplace_id');
    }

    public function divisionalEducationOffice()
    {
        return $this->belongsTo(DivisionalEducationOffice::class, 'deo_wp_id', 'workplace_id');
    }

    public function district()
    {
        return $this->belongsTo(DistrictsList::class, 'district_id', 'district_id');
    }

    public function institutionCategory()
    {
        return $this->belongsTo(InstitutionCategory::class, 'institution_category_id', 'institution_category_id');
    }

    public function authority()
    {
        return $this->belongsTo(Authority::class, 'authority_id', 'authority_id');
    }

    public function policeStation()
    {
        return $this->belongsTo(PoliceStation::class, 'police_station_id', 'police_station_id');
    }

    public function mohArea()
    {
        return $this->belongsTo(MohArea::class, 'moh_area_id', 'moh_area_id');
    }

    public function institutionType()
    {
        return $this->belongsTo(InstitutionType::class, 'institution_types_id', 'institution_types_id');
    }

    public function gradeSpan()
    {
        return $this->belongsTo(GradeSpan::class, 'grade_span_id', 'grade_span_id');
    }
}
