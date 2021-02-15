<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected array $guarded = [];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }

    public function path()
    {
        return "/projects/{$this->project->id}/tasks/{$this->id}";
    }
}
