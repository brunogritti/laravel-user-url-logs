<?php

namespace Brunogritti\UserActivityLogs\Traits;

use Illuminate\Database\Eloquent\Model;
use Brunogritti\UserActivityLogs\Models\UserActivityLog;

trait Loggable
{
    public static function bootLoggable()
    {
        static::updated(function (Model $model) use ($trait) {
            //Get which columns changed
            $changes = array_diff($model->getOriginal(), $model->getAttributes());

            //Creates a log for every column changed
            foreach ($changes as $key => $change) {
                self::createLog($model, 'updated', $change, $model[$change]);
            }
        });

        static::created(function (Model $model) use ($trait) {
            self::createLog($model, 'created');
        });

        static::deleted(function (Model $model) use ($trait) {
            self::createLog($model, 'deleted');
        });
    }

    private function createLog($model, $action, $column, $data)
    {
        $log = new UserActivityLog;

        $log->user_id = \Auth::id();
        $log->action = $action;
        $log->model = get_class($model);
        $log->column = $column;
        $log->row = $model->id;
        $log->data = $data;

        $log->save();
    }
}