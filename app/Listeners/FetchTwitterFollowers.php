<?php

namespace App\Listeners;

use App\Events\ProjectCreated;
use App\Models\Project;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;
use PgSql\Lob;

class FetchTwitterFollowers
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(ProjectCreated $event): void
    {
        $response = Http::withToken(config('services.twitter.token'))
            ->get("https://api.twitter.com/2/users/by/username/mianham22846878", [
            'user.fields'=>'public_metrics',
        ]);

        if($response->successful()){
            Project::where('id', $event->project->id)->update([
                'twitter_followers' => 'ads'
            ]);
            Log::info('Twiiter followers updated of project id : ' . $event->project->id);
        } else {
            Log::error('Twiiter API is not working.');
        }
    }
}
