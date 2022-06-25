<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'web_newsletters';

    protected $fillable = [
        'email',
    ];

}
