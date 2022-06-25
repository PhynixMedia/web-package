<?php

namespace Web\App\Models;

use Illuminate\Database\Eloquent\Model;

class FeedBack extends Model
{
    protected $table = 'web_feedbacks';

    protected $fillable = [
        'name',
        'email',
        'subject',
        'message',
    ];

}
