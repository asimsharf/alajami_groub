<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MainSlider extends Model
{
    protected $guarded =[];
    public function images(){
        return $this->hasMany(Image::class);
    }
}
