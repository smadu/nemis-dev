<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class employerAppointment extends Model
{
    use HasFactory;

    protected $table = 'employer_appointments'; // optional, Laravel can infer from class name

    protected $primaryKey = 'appointment_id'; // if you want to use appointment_id as PK
    public $incrementing = false;             // because appointment_id is a char
    protected $keyType = 'string';

    protected $fillable = [
        'appointment_id',
        'employee_id',
        'first_appointment_date',
        'retirement_date',
        'service_id',
        'rank_id',
        'position_id',
        'office_level_id',
        'office_id',
        'appointment_category_id',
        'appointment_letter_no',
        'appointment_letter',
        'w_op_no',
        'active_status',
    ];

    protected $casts = [
        'first_appointment_date' => 'date',
        'retirement_date' => 'date',
    ];

    // Relationships

    public function employee()
    {
        return $this->belongsTo(People::class, 'employee_id', 'people_id');
    }

    public function service()
    {
        return $this->belongsTo(Service::class, 'service_id', 'service_id');
    }

    public function rank()
    {
        return $this->belongsTo(ServiceRank::class, 'rank_id', 'rank_id');
    }

    public function position()
    {
        return $this->belongsTo(Position::class, 'position_id', 'position_id');
    }

    public function officeLevel()
    {
        return $this->belongsTo(OfficeLevel::class, 'office_level_id', 'office_level_id');
    }

    public function appointmentCategory()
    {
        return $this->belongsTo(AppointmentCategory::class, 'appointment_category_id', 'appointment_category_id');
    }
}
