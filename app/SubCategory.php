<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SubCategory extends Leadz
{
    public function category()
    {
        return $this->belongsTo('App\Category');
    }
}
