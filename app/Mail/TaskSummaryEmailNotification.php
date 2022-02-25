<?php

namespace App\Mail;

use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TaskSummaryEmailNotification extends Mailable
{
    use Queueable;
    use SerializesModels;
    protected $user;
    protected $tasks;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user, $tasks)
    {
        $this->user = $user;
        $this->tasks = $tasks;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->view('emails.task_summary')->with([
            'user'  => $this->user,
            'tasks' => $this->tasks,
        ]);
    }
}
