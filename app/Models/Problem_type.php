<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Problem_type extends Model
{
    use HasFactory;
    public function agency(){
        return $this->belongsTo(Agency::class,'ag_id','id');
    }
    public function complaints()
    {
        return $this->hasMany(Complant::class);
    }
}
