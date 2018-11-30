<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    protected $fillable = ['name', 'phone', 'gender', 'salary'];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }


    public function projects()
    {

        // return $this->belongsToMany(Project::class)->withPivot(['hours'])->withTimestamps();
        return $this->belongsToMany(Project::class)->withPivot('hours')->withTimestamps();
    }


}
