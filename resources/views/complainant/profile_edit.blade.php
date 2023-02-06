แก้ไขข้อมูล
ฟอร์มแก้ไขข้อมูลส่วนตัว
<br>
<a href="{{url('/profile1')}}">กลับ</a>
<form action="{{url('profile_update/'.$item->id)}}" method="post">
    @csrf

    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
    @endif

    <label for="name">ชื่อ</label>
    <input type="text" name="name" id="name" value="{{$item->name}}">
    <br>
    <label for="email">อีเมล</label>
    <input type="email" name="email" id="email" value="{{$item->email}}">
    <br>
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password" id="password" value="">
    <br>
    <label for="phone_num">เบอร์โทร</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num" value="{{$item->phone_num}}">
    <br>
    <label for="address">ที่อยู่</label>
    <textarea name="address" id="address" cols="30" rows="3">{{$item->address}}</textarea>
    <br>
    <label for="national_id">เลขประจำตัวประชาชน</label>
    <input type="text" maxlength="13" minlength="13" name="national_id" id="national_id" value="{{$item->national_id}}">
    <br>

    <input type="submit" value="บันทึก">

</form>
