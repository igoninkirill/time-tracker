<?php

namespace App\Services\Project;

use App\Http\Resources\Project\ProjectResource;
use App\Models\Project\Project;
use Illuminate\Http\JsonResponse;

class ProjectService
{
    public function getIndexData(): JsonResponse
    {
        return response()->json(ProjectResource::collection(Project::all()));
    }

    public function getEditData(Project $project): JsonResponse
    {
        return response()->json(new ProjectResource($project));
    }

    public function store(array $data): JsonResponse
    {
        return response()->json(new ProjectResource(Project::create($data)));
    }

    public function update(Project $project, array $data): JsonResponse
    {
        $project->update($data);
        return response()->json(new ProjectResource($project));
    }
}
