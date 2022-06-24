<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Appointment extends Model
{
    protected $table = 'web_appointments';

    protected $fillable = [
        'unique_code',
        'fname',
        'lname',
        'email',
        'phone',
        'gender',
        'comments',
        'treatment',
        'appointment_date',
        'status'
    ];
}
