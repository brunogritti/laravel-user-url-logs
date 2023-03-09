<?php

namespace Brunogritti\UserUrlLogs\Models;

use Illuminate\Database\Eloquent\Model;

class UserUrlLog extends Model
{
    protected $table = 'user_url_logs';

    protected $guard = ['id'];

    protected $fillable = [
        'user_id',
        'method',
        'url',
        'status_code',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at'
    ];
}
