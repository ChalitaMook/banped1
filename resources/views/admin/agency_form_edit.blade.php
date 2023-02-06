ฟอร์มแก้ไขข้อมูลหน่วยงาน
<br>
<a href="{{url('/agency')}}">กลับ</a>
<form action="{{url('agency_form_update/'.$item->id)}}" method="post">
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
    <input type="text" name="name" id="name" value="{{$item->name}}">
    <br>
    <label for="phone_num">เบอร์โทรหน่วยงาน</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num" value="{{$item->phone_num}}">

    <br>
    <input type="submit" value="บันทึก">

</form>
