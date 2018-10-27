<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    public function posts()
    {
        return $this->hasMany('TCG\Voyager\Models\Post','category_id','category_id');
    }
}
