<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'contact_us';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

}
