<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class Quote extends Model
{
    protected $table = 'quotes';

    protected $fillable = [
        'name',
        'email',
        'phone',
        'company',
        'message',
    ];


}
