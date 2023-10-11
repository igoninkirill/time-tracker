<?php

namespace App\Policies\Project;

use App\Models\Project\Task;
use App\Models\User;

class TaskPolicy
{
    /**
     * Create a new policy instance.
     */
    public function __construct()
    {
        //
    }

//    public function view(User $user, Task $task)
//    {
//        return $user->id === $task->project->user_id;
//    }
//
//    public function update(User $user, Task $task)
//    {
//        return $user->id === $task->project->user_id;
//    }
}
