<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rate extends Model
{
    use HasFactory;

    public function complaint(){
        return $this->belongsTo(Complaint::class,'cp_id','id');
    }

    public function complainant(){
        return $this->belongsTo(Complainant::class,'cn_id','id');
    }
}

