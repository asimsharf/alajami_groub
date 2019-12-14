<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $guarded=[];
    public function companies(){
        return $this->belongsToMany(Company::class);
    }
}
