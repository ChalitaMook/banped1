<?php

namespace App\Http\Controllers;

use App\Models\Agency;
use App\Models\User;
use App\Models\Problem_type;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function pb_type_tb(){
        $items = Problem_type::get();
        return view('admin.problem_type_tb',compact('items'));
    }
    public function pb_type_form(){
        $items = Agency::get();
        return view('admin.problem_type_form',compact('items'));
    }
    public function pb_type_form_save(Request $req){

        $req->validate([
            'name'=>'required|unique:problem_types',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'name.unique'=>"ชื่อประเภทต้องไม่ซ้ำ"
        ]
            );

        $item = new Problem_type;
        $item->name = $req->name;
        $item->ag_id =$req->ag_id;
        $item->save();
        return redirect('/problem_type');
    }
    public function pb_type_form_edit($id){
        $item1 = Agency::get();
        $item2 = Problem_type::find($id);
        return view('admin.problem_type_form_edit',compact('item1','item2'));
    }
    public function pb_type_form_update(Request $req,$id){

        $req->validate([
            'name'=>'required',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
        ]
            );

        $item = Problem_type::find($id);
        $item->name = $req->name;
        $item->ag_id =$req->ag_id;
        $item->save();
        return redirect('/problem_type');
    }
    public function pb_type_delete($id){
        $item = Problem_type::find($id)->forceDelete();
        return redirect('/problem_type');
    }



    public function user_tb(){
        $items = User::get();
        return view('admin.user_tb',compact('items'));
    }
    public function user_form(){
        $items = Agency::get();
        return view('admin.user_form',compact('items'));
    }
    public function user_form_save(Request $req){

        $req->validate([
            'email'=>'required|unique:users',
            'name'=>'required',
            'phone_num'=>'required|numeric|digits:10',
            'password'=>'required',
            'role'=>'required',
            'ag_id'=>'required',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'email.required'=>"กรุณากรอกอีเมล",
            'password.required'=>"กรุณากรอกรหัสผ่าน",
            'role.required'=>"กรุณากรอกตำแหน่ง",
            'ag_id.required'=>"กรุณากรอกหน่วยงาน",
            'email.unique'=>"อีเมลต้องไม่ซ้ำ",
            'phone_num.required'=>"กรุณากรอกเบอร์โทรศัพท์",
            'phone_num.numeric'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข",
            'phone_num.degits'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข10ตัว",
        ]
            );

        $item = new User;

        $item->email = $req->email;
        $item->password = Hash::make($req->password);
        $item->name = $req->name;
        $item->phone_num =$req->phone_num;
        $item->role = $req->role;
        $item->ag_id = $req->ag_id;
        $item->save();
        return redirect('/user');
    }
    public function user_form_edit($id){
        $item1 = Agency::get();
        $item2 = User::find($id);
        return view('admin.user_form_edit',compact('item1','item2'));
    }
    public function user_form_update(Request $req,$id){

        $req->validate([
            'email'=>'required',
            'name'=>'required',
            'phone_num'=>'required|numeric|digits:10',
            'password'=>'required',
            'role'=>'required',
            'ag_id'=>'required',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'email.required'=>"กรุณากรอกอีเมล",
            'password.required'=>"กรุณากรอกรหัสผ่าน",
            'role.required'=>"กรุณากรอกตำแหน่ง",
            'ag_id.required'=>"กรุณากรอกหน่วยงาน",
            'email.unique'=>"อีเมลต้องไม่ซ้ำ",
            'phone_num.required'=>"กรุณากรอกเบอร์โทรศัพท์",
            'phone_num.numeric'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข",
            'phone_num.degits'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข10ตัว",
        ]
            );

        $item = User::find($id);

        $item->email = $req->email;
        $item->password = Hash::make($req->password);
        $item->name = $req->name;
        $item->phone_num =$req->phone_num;
        $item->role = $req->role;
        $item->ag_id = $req->ag_id;
        $item->save();
        return redirect('/user');
    }
    public function user_delete($id){
        $item = User::find($id)->forceDelete();
        return redirect('/user');
    }




    public function agency_tb(){
        $item = Agency::get();
        return view('admin.agency_tb',compact('item'));
    }
    public function agency_form(){
        return view('admin.agency_form');
    }
    public function agency_form_save(Request $req){

        $req->validate([
            'name'=>'required|unique:agencies',
            'phone_num'=>'required|numeric|digits:10',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'name.unique'=>"ชื่อหน่วยงานต้องไม่ซ้ำ",
            'phone_num.required'=>"กรุณากรอกเบอร์โทรศัพท์",
            'phone_num.numeric'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข",
        ]
            );

        $item = new Agency;
        $item->name = $req->name;
        $item->phone_num =$req->phone_num;
        $item->save();
        return redirect('/agency');
    }
    public function agency_form_edit($id){

        $item = Agency::find($id);
        return view('admin.agency_form_edit',compact('item'));
    }
    public function agency_form_update(Request $req,$id){

        $req->validate([
            'name'=>'required',
            'phone_num'=>'required|numeric|digits:10',
        ],
        [
            'name.required'=>"กรุณากรอกชื่อ",
            'name.unique'=>"ชื่อหน่วยงานต้องไม่ซ้ำ",
            'phone_num.required'=>"กรุณากรอกเบอร์โทรศัพท์",
            'phone_num.numeric'=>"เบอร์โทรศัพท์ต้องเป็นตัวเลข",
        ]
            );

        $item = Agency::find($id);
        $item->name = $req->name;
        $item->phone_num =$req->phone_num;
        $item->save();
        return redirect('/agency');
    }
    public function agency_delete($id){
        $item = Agency::find($id)->forceDelete();
        return redirect('/agency');
    }



}
