<?php

namespace Tests\Unit;

use App\Task;
use App\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_belongs_to_a_user()
    {
        $task = factory(Task::class)->create();

        $this->assertInstanceOf(User::class, $task->user);
    }
}
