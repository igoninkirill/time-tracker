<?php

namespace App\Observers\Project;

use App\Models\Project\Project;
use Illuminate\Support\Facades\Auth;

class ProjectObserver
{
    public function creating(Project $project): void
    {
        $project['user_id'] = Auth::user()->id;
    }
}
