<?php

namespace Brunogritti\UserActivityLogs;

use Illuminate\Console\Command;
use Brunogritti\UserActivityLogs\Migrations\CreateUserActivityLogsTable;

class UserActivityLogsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:user-activity-logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new laravel Migration for user activity logs';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $type = 'Migration';

    /**
     * The type of class being generated.
     *
     * @var string
     */
    protected $folder = null;

    public function handle()
    {
        try {
            CreateUserActivityLogsTable::run();

            $this->info('UserActivityLogs table created successfully.');

        } catch (\Throwable $th) {
            $this->info('<fg=red>Whops! We could not create UserActivityLogs table.');

            $this->info($th->getMessage());
        }
    }
}