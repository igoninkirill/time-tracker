<?php

namespace App\Services\Project;

use App\Http\Resources\Project\TaskResource;
use App\Models\Project\Project;
use App\Models\Project\Task;
use Illuminate\Http\JsonResponse;

class TaskService
{
    public function getIndexData(Project $project): JsonResponse
    {
        return response()->json(TaskResource::collection($project->tasks));
    }

    public function getEditData(Task $task): JsonResponse
    {
        return response()->json(new TaskResource($task));
    }

    public function store(array $data, Project $project): JsonResponse
    {
        return response()->json(new TaskResource($project->task()->create($data)));
    }

    public function update(array $data, Task $task): JsonResponse
    {
        $task->update($data);
        return response()->json(new TaskResource($task));
    }
}
