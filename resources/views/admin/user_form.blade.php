ฟอร์มเพิ่มข้อมูลพนักงาน
<br>
<a href="{{url('/user')}}">กลับ</a>

<form action="{{url('/user_form_save')}}" method="post">
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
    <input type="text" name="name" id="name" value="{{old('name')}}">
    <br>
    <label for="email">อีเมล</label>
    <input type="email" name="email" id="email" value="{{old('email')}}">
    <br>
    <label for="pasword">รหัสผ่าน</label>
    <input type="password" name="password" id="password" value="{{old('password')}}">
    <br>
            <label for="role">ตำแหน่ง</label>
            <select class="form-select" aria-label="role" id="role" name="role">
                <option value="0"  {{ old('role') == 0 ? 'selected' : '' }}>
                    แอดมิน
                </option>
                <option value="1" {{ old('role') == 1 ? 'selected' : '' }}>
                    พนักงาน
                </option>
                <option value="2" {{ old('role') == 2 ? 'selected' : '' }}>
                    หัวหน้า
                </option>
            </select>
            <br>

    <label for="phone_num">เบอร์โทร</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num" value="{{old('phone_num')}}">
    <br>
    <label for="ag_id">หน่วยงานที่สังกัด:</label>
        <select class="form-select" aria-label="ag_id" id="ag_id" name="ag_id">
                @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
        </select>
    <br>

    <br>
    <input type="submit" value="บันทึก">

</form>
