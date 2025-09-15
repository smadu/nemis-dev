<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ZonalEducationOffice extends Model
{
    use HasFactory;

    protected $table = 'zonal_education_offices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'zeo_id',
        'peo_id',
        'district_id',
        'zeo_name',
        'zeo_short_name',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'active_status',
    ];

    /**
     * Relationship: ZEO belongs to a Provincial Education Office
     */
    public function provincialEducationOffice()
    {
        return $this->belongsTo(ProvincialEducationOffice::class, 'peo_id', 'peo_id');
    }

    /**
     * Relationship: ZEO belongs to a District
     */
    public function district()
    {
        return $this->belongsTo(DistrictsList::class, 'district_id', 'district_id');
    }

    public function divisionalEducationOffices()
    {
        return $this->hasMany(DivisionalEducationOffice::class, 'zeo_id', 'zeo_id');
    }
}
