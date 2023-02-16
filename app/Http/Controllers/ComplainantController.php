<?php

namespace App\Http\Controllers;

use App\Models\Complaint;
use App\Models\Complainant;
use App\Models\Problem_type;
use App\Models\Operation;
use App\Models\Rate;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ComplainantController extends Controller
{
    public function profile(){
        return view('complainant.profile');
    }
    public function profile_edit($id){
        $item = Complainant::find($id);
        return view('complainant.profile_edit',compact('item'));
    }
    public function profile_update(Request $req,$id){

        $req->validate([
            'name'=>'required',
            'email'=>'required',
            'password'=>'required|min:8',
            'phone_num'=>'required|numeric|digits:10',
            'address'=>'required',
            'national_id'=>'required|numeric|digits:13',

        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'email.required'=>"กรุณากรอกอีเมล",
            'password.required'=>"กรุณากรอกรหัสผ่าน",
            'phone_num.required'=>"กรุณากรอกเบอร์โทรศัพท์",
            'address.required'=>"กรุณากรอกที่อยู่",
            'national_id.required'=>"กรุณากรอกเลขประจำตัวประชาชน",
            'password.min'=>"ขั้นต่ำแปดตัวอักษร",

        ]
            );

        $item = Complainant::find($id);
        $item->name = $req->name;
        $item->email = $req->email;
        $item->password = Hash::make($req->password);
        $item->phone_num = $req->phone_num;
        $item->address = $req->address;
        $item->national_id = $req->national_id;
        $item->save();
        return redirect('/profile1');
    }


    public function complaint_form(){
        $items = Problem_type::get();
        return view('complainant.complaintform',compact('items'));
    }
    public function complaint_save(Request $req){

        $req->validate([
            'topic'=>'required',
            'detail'=>'required',
            ],
            [
                'topic.required'=>"กรุณากรอกหัวข้อ",
                'detail.required'=>"กรุณากรอกรายละเอียด",
            ]
            );
        $item = new Complaint;
        $pic1;
            if($pic1=$req->file('pic1')){
                $pic1=$req->file('pic1');
                $pic1_gen=hexdec(uniqid()); //แปลง
                $pic1_ext=strtolower($pic1->getClientOriginalExtension()); //นามสกุลไฟล์
                $pic1_name=$pic1_gen.'.'.$pic1_ext;
                $upload_location='public/pic1/';
                $pic1->move($upload_location,$pic1_name);
                $full_path=$upload_location.$pic1_name;
                $item->pic1 = $full_path;

            }elseif($pic1 == null){
                    //
            }
            $pic2;
            if($pic2=$req->file('pic2')){
                $pic2=$req->file('pic2');
                $pic2_gen=hexdec(uniqid()); //แปลง
                $pic2_ext=strtolower($pic2->getClientOriginalExtension()); //นามสกุลไฟล์
                $pic2_name=$pic2_gen.'.'.$pic2_ext;
                $upload_location='public/pic2/';
                $pic2->move($upload_location,$pic2_name);
                $full_path=$upload_location.$pic2_name;
                $item->pic2 = $full_path;
            }elseif($pic2 == null){
                    //
            }
            $pic3;
            if($pic3=$req->file('pic3')){
                $pic3=$req->file('pic3');
                $pic3_gen=hexdec(uniqid()); //แปลง
                $pic3_ext=strtolower($pic3->getClientOriginalExtension()); //นามสกุลไฟล์
                $pic3_name=$pic3_gen.'.'.$pic3_ext;
                $upload_location='public/pic3/';
                $pic3->move($upload_location,$pic3_name);
                $full_path=$upload_location.$pic3_name;
                $item->pic3 = $full_path;
            }elseif($pic3 == null){
                    //
            }
            $item->topic = $req->topic;
            $item->detail = $req->detail;
            $item->status = $req->status;
            $selected_value = explode(",", $req->input('select_input'));
            $col1 = $selected_value[0];
            $col2 = $selected_value[1];
            $item->pb_id =$col1;
            $item->ag_id =$col2;
            $item->cn_id = $req->cn_id;
            $item->save();
            return redirect('/complaint_table');

    }


    public function complaint_table(){
        $id = Auth::guard('complainant')->user()->id;
        $item1 = Complaint::where('cn_id',$id)->where('status','รับเรื่องแล้ว')->get();
        $item2 = Complaint::where('cn_id',$id)->where('status','กำลังดำเนินการ')->get();
        $item3 = Complaint::where('cn_id',$id)->where('status','ดำเนินการเสร็จสิ้น')->get();
        return view('complainant.complaintable',compact('item1','item2','item3'));
    }

    public function operationview($id){
        $item = Operation::where('cp_id',$id)->get();
        return view('complainant.operationview',compact('item'));
    }


    public function rate_table(){
        $id = Auth::guard('complainant')->user()->id;
        $item = Complaint::where('cn_id',$id)->where('status','ดำเนินการเสร็จสิ้น')->get();
        return view('complainant.ratetable',compact('item'));
    }

    public function rate_form($id){
        $item=Complaint::find($id);
        return view('complainant.rateform',compact('item'));
    }

    public function rate_form_save(Request $req){

        $item = new Rate;
        $item->section1 = intval($req->section1);
        $item->section2 = intval($req->section2);
        $item->section3 = intval($req->section3);
        $item->section4 = intval($req->section4);
        $item->section5 = intval($req->section5);
        $item->comment = $req->comment;
        $item->cn_id = $req->cn_id;
        $item->cp_id = $req->cp_id;
        $item->save();

        return redirect('/rate_table');

    }
}
