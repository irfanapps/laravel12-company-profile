<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\Activitylog\Models\Activity;

class CleanActivityLog extends Command
{
    protected $signature = 'activitylog:clean {--days=30 : Remove logs older than this number of days}';

    protected $description = 'Clean up old activity logs';

    public function handle()
    {
        $days = $this->option('days');
        $cutoffDate = now()->subDays($days);

        $this->info("Deleting activity logs older than {$days} days...");

        $deleted = Activity::where('created_at', '<', $cutoffDate)->delete();

        $this->info("Deleted {$deleted} activity logs.");

        return 0;
    }
}
