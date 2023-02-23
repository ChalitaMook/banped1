<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Rate;
use App\Models\Problem_type;
use App\Models\Complaint;



class BossController extends Controller
{
   public function rate_report(){

    $items = Rate::paginate(6);
    $sec1 = round(Rate::avg('section1'),2);
    $sec2 = round(Rate::avg('section2'),2);
    $sec3 = round(Rate::avg('section3'),2);
    $sec4 = round(Rate::avg('section4'),2);
    $sec5 = round(Rate::avg('section5'),2);

    return view('boss.rate_table',compact('items','sec1','sec2','sec3','sec4','sec5',));
   }

    public function ReportBoss(){
        $items = Problem_type::get();


        return view('Boss.report',compact('items'));
    }

    public function pb_report($id){


        $items1 = Complaint::where('pb_id',$id)->where('status','รับเรื่องแล้ว')->get();
        $items2 = Complaint::where('pb_id',$id)->where('status','กำลังดำเนินการ')->get();
        $items3 = Complaint::where('pb_id',$id)->where('status','ดำเนินการเสร็จสิ้น')->get();

        $itemscount1 = $items1->count();
        $itemscount2 = $items2->count();
        $itemscount3 = $items3->count();

        return view('boss.pb_report',compact('items1','itemscount1','items2','itemscount2','items3','itemscount3',));
       }

}
