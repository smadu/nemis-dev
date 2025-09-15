<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Workplaces extends Model
{
    protected $fillable = ['workplaces_code', 'name', 'type', 'main_ref_table_id'];

    public function ministry()
    {
        return $this->belongsTo(MinistryOfEducationOffice::class, 'main_ref_table_id', 'moe_id');
    }

    public function provincialMinistry()
    {
        return $this->belongsTo(ProvincialMinistryOfEducationOffice::class, 'main_ref_table_id', 'pmoe_id');
    }

    public function provincialEducationOffice()
    {
        return $this->belongsTo(ProvincialEducationOffice::class, 'main_ref_table_id', 'peo_id');
    }

    public function zonalEducationOffice()
    {
        return $this->belongsTo(ZonalEducationOffice::class, 'main_ref_table_id', 'zeo_id');
    }

    public function divisionalEducationOffice()
    {
        return $this->belongsTo(DivisionalEducationOffice::class, 'main_ref_table_id', 'deo_id');
    }

    public function institution()
    {
        return $this->belongsTo(Institution::class, 'main_ref_table_id', 'institutions_id');
    }

    // Dynamic accessor to get the real model
    public function original()
    {
        return match ($this->type) {
            'ministry'   => $this->ministry,
            'pministry' => $this->provincialMinistry,
            'provincial' => $this->provincialEducationOffice,
            'zonal'      => $this->zonalEducationOffice,
            'divisional' => $this->divisionalEducationOffice,
            'institution'     => $this->institution,
            default      => null,
        };
    }
};
