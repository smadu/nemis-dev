<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProvincialEducationOffice extends Model
{
    use HasFactory;

    protected $table = 'provincial_education_offices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'peo_id',
        'pmoe_id',
        'peo_name',
        'peo_short_name',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'active_status',
    ];

    /**
     * Relationship: Provincial Education Office belongs to a Provincial MOE Office
     */
    public function provincialMoeOffice()
    {
        return $this->belongsTo(ProvincialMinistryOfEducationOffice::class, 'pmoe_id', 'pmoe_id');
    }
}
