<?php

namespace Brunogritti\UserActivityLogs\Models;

use Illuminate\Database\Eloquent\Model;

class UserActivityLog extends Model
{
    protected $table = 'user_activity_logs';

    protected $guard = ['id'];

    protected $fillable = [
        'user_id',
        'action',
        'model',
        'column',
        'row',
        'data',
    ];

    public $timestamps = false;

    protected $dates = [
        'created_at'
    ];
}
