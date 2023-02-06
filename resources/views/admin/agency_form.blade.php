ฟอร์มเพิ่มข้อมูลหน่วยงาน
<a href="{{url('/agency')}}">กลับ</a>

<form action="{{url('/agency_form_save')}}" method="post">
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

    <label for="name">ชื่อหน่วยงาน</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    <br>
    <label for="phone_num">เบอร์โทรหน่วยงาน</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num" value="{{old('phone_num')}}">

    <br>
    <input type="submit" value="บันทึก">

</form>
