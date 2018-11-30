<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    public function employees()
    {
        // return $this->belongsToMany(Employee::class)->withPivot(['hours'])->withTimestamps();
        return $this->belongsToMany(Employee::class)->withPivot('hours')->withTimestamps();

    }
}
