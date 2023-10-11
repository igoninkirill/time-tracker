<?php

namespace App\Models\Project;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Task extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'project_id',
        'start_date',
        'end_date'
    ];

    public function project(): BelongsTo
    {
        return $this->belongsTo(Project::class);
    }
}
