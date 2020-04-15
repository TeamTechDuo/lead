<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Division extends Leadz
{
    public function country()
    {
        return $this->belongsTo('App\Country');
    }
}
