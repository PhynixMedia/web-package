<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = 'feedbacks';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

}
