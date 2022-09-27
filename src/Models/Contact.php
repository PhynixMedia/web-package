<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $table = 'web_contacts';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'subject',
        'message',
    ];

}
