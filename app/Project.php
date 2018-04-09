<?php

namespace App;

class Project extends AppModel
{
    public function tasks()
    {
        return $this->hasMany(Task::class);
    }

    public function members()
    {
        return $this->belongsToMany(Member::class, 'project_member');
    }
}
