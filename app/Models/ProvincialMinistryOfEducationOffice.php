<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvincialMinistryOfEducationOffice extends Model
{
    use HasFactory;

    protected $table = 'provincial_ministry_of_education_offices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'pmoe_id',
        'moe_id',
        'pmoe_name',
        'pmoe_short_name',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'active_status',
    ];

    /**
     * Relationship: Provincial MOE Office belongs to Ministry of Education Office
     */
    public function ministryOfEducationOffice()
    {
        return $this->belongsTo(MinistryOfEducationOffice::class, 'moe_id', 'moe_id');
    }

    public function provincialEducationOffices()
    {
        return $this->hasMany(ProvincialEducationOffice::class, 'pmoe_id', 'pmoe_id');
    }
}
