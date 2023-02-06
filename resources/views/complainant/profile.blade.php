โปรไฟล์
<a href="{{url('profile_edit/'.Auth::guard('complainant')->user()->id)}}">แก้ไขข้อมูล</a>
<br>
<a href="{{url('/complainant/dashboard')}}">กลับ</a>
<br>
ชื่อ:{{ Auth::guard('complainant')->user()->name }}
<br>
อีเมล:{{ Auth::guard('complainant')->user()->email }}
<br>
เบอร์โทร:{{ Auth::guard('complainant')->user()->phone_num }}
<br>
ที่อยู่:{{ Auth::guard('complainant')->user()->address }}
<br>
เลขบัตรประจำตัวประชาชน:{{ Auth::guard('complainant')->user()->national_id }}
<br>

