ฟอร์มแก้ไขข้อมูลพนักงาน
<br>
<a href="{{url('/user')}}">กลับ</a>

<form action="{{url('user_form_update/'.$item2->id)}}" method="post">
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
<br>
    <label for="name">ชื่อ</label>
    <input type="text" name="name" id="name" value="{{$item2->name}}">
    <br>
    <label for="email">อีเมล</label>
    <input type="email" name="email" id="email" value="{{$item2->email}}">
    <br>
    <label for="pasword">รหัสผ่าน</label>
    <input type="password" name="password" id="password" value="">
    <br>
            <label for="role">ตำแหน่ง</label>
            <select class="form-select" aria-label="role" id="role" name="role">
                <option value="{{$item2->role}}"></option>
                <option value="0">แอดมิน</option>
                <option value="1">พนักงาน</option>
                <option value="2">หัวหน้า</option>
            </select>
            <br>

    <label for="phone_num">เบอร์โทร</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num" value="{{$item2->phone_num}}">
    <br>
    <label for="ag_id">หน่วยงานที่สังกัด:</label>
        <select class="form-select" aria-label="ag_id" id="ag_id" name="ag_id">
            @foreach ($item1 as $item1)
                <option value="{{ $item1->id }}" {{ $item1->id == $item2->ag_id ? 'selected' : '' }}>{{ $item1->name }}</option>
            @endforeach
        </select>
    <br>

    <br>
    <input type="submit" value="บันทึก">

</form>
