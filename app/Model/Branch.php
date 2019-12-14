<?php

namespace App\Model;

use App\Model\Company;
use Illuminate\Database\Eloquent\Model;

class Branch extends Model
{
    protected $guarded=[];
    public function company(){
        return $this->belongsTo(Company::class);
    }
}
