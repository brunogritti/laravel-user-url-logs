<?php

namespace Brunogritti\UserActivityLogs;

use Illuminate\Console\GeneratorCommand;

class UserActivityLogsCommand extends GeneratorCommand
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
            Brunogritti\UserActivityLogs\Migrations\CreateUserActivityLogsTable::run();

        } catch (\Throwable $th) {
            $this->components->info('Whops! We could not create UserActivityLogs table.');
        }

        $this->components->info('UserActivityLogs table created successfully.');
    }
}