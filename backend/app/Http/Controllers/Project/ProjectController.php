<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Http\Requests\Project\ProjectRequest;
use App\Models\Project\Project;
use App\Services\Project\ProjectService;
use Illuminate\Http\JsonResponse;

class ProjectController extends Controller
{
    public function __construct(public ProjectService $service)
    {}

    public function index(): JsonResponse
    {
        return $this->service->getIndexData();
    }

    public function store(ProjectRequest $request): JsonResponse
    {
        return $this->service->store($request->validated());
    }

    public function update(ProjectRequest $request, Project $project): JsonResponse
    {
        return $this->service->update($project, $request->validated());
    }

    public function edit(Project $project): JsonResponse
    {
        return $this->service->getEditData($project);
    }
}
