<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class City extends Leadz
{
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
    public function division()
    {
        return $this->belongsTo('App\Division');
    }
}
