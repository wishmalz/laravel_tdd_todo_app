<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected array $guarded = [];

    public function path()
    {
        return "/projects/{$this->id}";
    }

    public function owner()
    {
        return $this->belongsTo(User::class);
    }
}
