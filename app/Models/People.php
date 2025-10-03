<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class People extends Model
{
    use HasFactory;

    protected $table = 'people';

    protected $primaryKey = 'id';

    protected $fillable = [
        'people_id',
        'nic',
        'title_id',
        'full_name',
        'gender',
        'date_of_birth',
        'religion_id',
        'ethnicity_id',
        'civil_status_id',
        'health_condition',
        'blood_group_id',
        'email',
        'phone',
        'district_id',
        'gn_division_id',
        'address_line1',
        'address_line2',
        'address_line3',
        'postal_code',
        'latitude',
        'longitude',
        'profile_picture',
        'active_status',
    ];

    // Relationships

    public function title()
    {
        return $this->belongsTo(Title::class, 'title_id', 'title_id');
    }

    public function religion()
    {
        return $this->belongsTo(Religion::class, 'religion_id', 'religion_id');
    }

    public function ethnicity()
    {
        return $this->belongsTo(Ethnicity::class, 'ethnicity_id', 'ethnicity_id');
    }

    public function bloodGroup()
    {
        return $this->belongsTo(BloodGroup::class, 'blood_group_id', 'blood_group_id');
    }

    public function district()
    {
        return $this->belongsTo(DistrictsList::class, 'district_id', 'district_id');
    }

    public function gnDivision()
    {
        return $this->belongsTo(GnDivision::class, 'gn_division_id', 'gn_division_id');
    }
}
