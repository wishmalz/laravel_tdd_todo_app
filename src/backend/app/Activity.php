<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    protected array $guarded = [];

    public function subject()
    {
        return $this->morphTo();
    }
}
