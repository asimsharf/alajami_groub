<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkField extends Model
{
    protected $guarded =[];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function companies(){
        return $this->belongsToMany(Company::class);
    }
}
