<?php

namespace Brunogritti\UserUrlLogs;

use Illuminate\Console\Command;

class UserUrlLogsCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'make:user-url-logs';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create a new laravel Migration for user url logs';

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
        /* try {
            \Brunogritti\UserUrlLogs\Migrations\CreateUserUrlLogsTable::run();

            $this->info('UserUrlLogs table created successfully.');

        } catch (\Throwable $th) {
            $this->info('<fg=red>Whops! We could not create UserUrlLogs table.');

            $this->info($th->getMessage());
        } */
    }
}