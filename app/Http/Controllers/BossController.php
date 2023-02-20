<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BossController extends Controller
{
    public function BossPage(){
        return view('Boss.boss');
    }

    public function ReportBoss(){
        return view('Boss.report');
    }
}
