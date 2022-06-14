<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class MySQLBackup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'database:backup';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // added
        $filename = "backup-".time().".gz";
//        $command = "mysqldump --user=" . env('DB_USERNAME') ." -- password=" . env('DB_PASSWORD') . " --host=" . env('DB_HOST') . " ". env('DB_DATABASE') . " | gzip > " . storage_path() ."/app/backups/".$filename;
        $command = "mysql -V";
        $returnVar = NULL;
        $output = NULL;
        exec($command, $output, $returnVar);
        dd($output);
    }
}
