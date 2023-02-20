<?php

namespace App\Http\Controllers;

use App\Models\Complaint;

use App\Models\Operation;
use App\Models\Complainant;
use App\Models\Problem_type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OfficerController extends Controller
{
    public function complaint_table(){
        $ag_id = Auth::user()->ag_id;
        $item1 = Complaint::where('status','รับเรื่องแล้ว')->where('ag_id',$ag_id)->get();
        $item2 = Complaint::where('status','กำลังดำเนินการ')->where('ag_id',$ag_id)->get();
        $item3 = Complaint::where('status','ดำเนินการเสร็จสิ้น')->where('ag_id',$ag_id)->get();
        return view('officer.complaint_table',compact('item1','item2','item3'));
    }

    public function change_status($id){
    $item=Complaint::find($id);
    $item->status = "กำลังดำเนินการ";
    $item->save();

        return redirect('/officer/complaint_table');
    }

    public function operation($id){
        $item=Complaint::find($id);
        return view('officer.operationform',compact('item'));
    }

    public function operationview($id){
        $item = Operation::where('cp_id',$id)->get();
        return view('officer.operationview',compact('item'));
    }



    public function operation_update(Request $req,$id){

        $item=Complaint::find($id);
        $item->status = "ดำเนินการเสร็จสิ้น";
        $item->save();

        $item2 = new Operation;
        $pic_op;
            if($pic_op=$req->file('pic_op')){
                $pic_op=$req->file('pic_op');
                $pic_op_gen=hexdec(uniqid()); //แปลง
                $pic_op_ext=strtolower($pic_op->getClientOriginalExtension()); //นามสกุลไฟล์
                $pic_op_name=$pic_op_gen.'.'.$pic_op_ext;
                $upload_location='public/pic_op/';
                $pic_op->move($upload_location,$pic_op_name);
                $full_path=$upload_location.$pic_op_name;
                $item2->pic_op = $full_path;

            }elseif($pic_op == null){
                    //
            }
            $item2->detail = $req->detail;
            $item2->cp_id = $id;
            $item2->us_id = $req->us_id;
            $item2->save();
            return redirect('/officer/complaint_table');
    }
}
