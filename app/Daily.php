<?php

namespace App;

class Daily extends AppModel
{
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}
