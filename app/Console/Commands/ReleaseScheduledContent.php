<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Content;
use Carbon\Carbon;
use Illuminate\Console\Scheduling\Schedule;

class ReleaseScheduledContent extends Command
{
    protected $signature = 'content:release-scheduled';

    protected $description = 'Release scheduled content based on release date';

    public function handle()
    {
        $currentTime = Carbon::now();
        $releaseTimeLimit = $currentTime->copy()->addHours(32);

        $contentsToRelease = Content::whereDate('release_date', '>=', $currentTime->toDateString())
            ->whereDate('release_date', '<=', $releaseTimeLimit->toDateString())
            ->get();

        foreach ($contentsToRelease as $content) {
            // Your release logic here, for example:
            $content->released = true;
            $content->save();

            // $this->info("Released {$content->content_type->title}: {$content->title}");
        }

        $this->info('Scheduled content released successfully.');
    }
}
