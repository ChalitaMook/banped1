<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;
    public function problem_type(){
        return $this->belongsTo(Problem_type::class,'pb_id','id');
    }
    public function complainant(){
        return $this->belongsTo(Complainant::class,'cn_id','id');
    }
}
