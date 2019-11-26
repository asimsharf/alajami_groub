<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded =[];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function work_field(){
        return $this->belongsTo(WorkField::class);
    }
}
