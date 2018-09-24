<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    
    
    public function personality()
    {
        return $this->belongsTo(Personality::class);
    }
}
