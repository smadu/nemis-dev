<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Database\Eloquent\Model;

class Authority extends Model
{
    use HasFactory;

    protected $table = 'authorities';

    protected $primaryKey = 'id';

    protected $fillable = [
        'authority_id',
        'authority_name',
        'description',
        'active_status',
    ];
}
