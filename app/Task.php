<?php

namespace App;

class Task extends AppModel
{
    public function project()
    {
        return $this->belongsTo(Project);
    }
}
