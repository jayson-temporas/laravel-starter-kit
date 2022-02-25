<?php

namespace App\Jobs;

use App\Mail\TaskSummaryEmailNotification;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Mail;

class SendTasksSummaryEmail implements ShouldQueue
{
    use Dispatchable;
    use InteractsWithQueue;
    use Queueable;
    use SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $users = User::with('tasks')->whereNotNull('email_verified_at')->get();
        foreach ($users as $user) {
            $tasks = $user->tasks->toArray();
            if (count($tasks) > 0) {
                $notification = new TaskSummaryEmailNotification($user, $tasks);
                Mail::to($user->email)->send($notification);
            }
        }
    }
}
