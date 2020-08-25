<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    public function product()
    {
    	return $this->belongsTo(Product::class);
    }

    public function color()
    {
    	return $this->belongsTo(Color::class);
    }

    public function size()
    {
    	return $this->belongsTo(Size::class);
    }

}
