<?php

namespace App\Model;

use App\Model\Branch;
use App\Model\Service;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $guarded =[];
    public function images(){
        return $this->hasMany(Image::class);
    }
    public function work_fields(){
        return $this->belongsToMany(WorkField::class);
    }
    public function services(){
        return $this->belongsToMany(Service::class);
    }
    public function branchs(){
        return $this->hasMany(Branch::class);
    }
}
