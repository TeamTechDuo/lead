<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Area extends Leadz
{
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    
    public function division()
    {
        return $this->belongsTo('App\Division');
    }

    public function city()
    {
        return $this->belongsTo('App\City');
    }
}
