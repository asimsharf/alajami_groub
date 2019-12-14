<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $guarded =[];

    public function company(){
        return $this->belongsTo(Company::class);
    }
    public function main_slider(){
        return $this->belongsTo(MainSlider::class);
    }
    public function work_field(){
        return $this->belongsTo(WorkField::class);
    }
}
