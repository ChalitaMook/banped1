<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Operation extends Model
{
    use HasFactory;

    public function user(){
        return $this->belongsTo(User::class,'us_id','id');
    }

    public function complaint(){
        return $this->belongsTo(Complaint::class,'cp_id','id');
    }

}
