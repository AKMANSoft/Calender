<?php

namespace App\Listeners;

use App\Mail\ProjectSubmit;
use App\Events\ProjectCreated;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Models\EmailTemplate;

class SendProjectSubmitNotification
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
        $emailTemplate = EmailTemplate::find(1);
        if($emailTemplate) {
            $data = $emailTemplate->data;
        } else {
            $data = "";
        }
        Mail::to($event->project->founder_email)->send(new ProjectSubmit($data));
    }
}
