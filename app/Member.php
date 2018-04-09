<?php

namespace App;

class Member extends AppModel
{
    public function dailies()
    {
        return $this->hasMany(Daily::class);
    }

    public function projects()
    {
        return $this->belongsToMany(Project::class, 'project_member');
    }
}
