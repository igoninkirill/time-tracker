<?php

namespace App\Http\Controllers\Project;

use App\Http\Requests\Project\TaskRequest;
use App\Models\Project\Project;
use App\Models\Project\Task;
use App\Services\Project\TaskService;
use Illuminate\Http\JsonResponse;

class TaskController
{
    public function __construct(public TaskService $service)
    {}

    public function index(Project $project): JsonResponse
    {
        return $this->service->getIndexData($project);
    }

    public function store(TaskRequest $request, Project $project): JsonResponse
    {
        return $this->service->store($request->validated(), $project);
    }

    public function update(TaskRequest $request, Task $task): JsonResponse
    {
        return $this->service->update($request->validated(), $task);
    }

    public function edit(Task $task): JsonResponse
    {
        return $this->service->getEditData($task);
    }
}
