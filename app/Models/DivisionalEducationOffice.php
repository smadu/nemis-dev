<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

use Illuminate\Database\Eloquent\Factories\HasFactory;

class DivisionalEducationOffice extends Model
{
    use HasFactory;

    protected $table = 'divisional_education_offices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'deo_id',
        'zeo_id',
        'deo_name',
        'deo_short_name',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'active_status',
    ];

    /**
     * Relationship: DEO belongs to a Zonal Education Office
     */
    public function zonalEducationOffice()
    {
        return $this->belongsTo(ZonalEducationOffice::class, 'zeo_id', 'zeo_id');
    }
}
