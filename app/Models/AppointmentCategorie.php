<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppointmentCategorie extends Model
{
    use HasFactory;

    protected $table = 'appointment_categories';

    protected $primaryKey = 'id';

    protected $fillable = [
        'appointment_category_id',
        'categories_name',
        'description',
        'active_status',
    ];
}
