<?php

namespace Clubecasa\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    protected $table = 'activity_logs';

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
