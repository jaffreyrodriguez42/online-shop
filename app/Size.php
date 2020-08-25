<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Size extends Model
{
    public function items()
    {
    	return $this->hasMany(Size::class);
    }
}
