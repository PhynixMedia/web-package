<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class CallBack extends Model
{
    protected $table = 'callbacks';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'appointment_date',
    ];

}
