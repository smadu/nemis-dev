<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MinistryOfEducationOffice extends Model
{
    use HasFactory;

    protected $table = 'ministry_of_education_offices';

    protected $primaryKey = 'id';

    protected $fillable = [
        'moe_id',
        'moe_name',
        'moe_short_name',
        'email',
        'phone',
        'address',
        'postal_code',
        'latitude',
        'longitude',
        'active_status',
    ];

    public function provincialOffices()
    {
        return $this->hasMany(ProvincialMinistryOfEducationOffice::class, 'moe_id', 'moe_id');
    }
}
