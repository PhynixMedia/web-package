<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    protected $table = 'newsletters';

    protected $fillable = [
        'email',
    ];

}
