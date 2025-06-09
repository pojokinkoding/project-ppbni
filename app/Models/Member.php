<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';

    protected $fillable = [
        'member_id',
        'member_period',
        'member_nik',
        'member_name', 
        'member_address',
        'member_gender',
        'member_birthdate',
        'member_birthplace',
        'member_phone',
        'member_email',
        'member_date',
        'member_off_date',
        'member_active',
        'member_job',
        'member_education',
        'member_photo',
        'member_createddate',
        'member_createdby',
        'member_modifieddate',
        'member_modifiedby'
    ];

    protected $casts = [
        'member_active' => 'boolean',
        'member_birthdate' => 'date',
        'member_date' => 'date',
        'member_off_date' => 'date',
        'member_createddate' => 'datetime',
        'member_modifieddate' => 'datetime'
    ];
}
