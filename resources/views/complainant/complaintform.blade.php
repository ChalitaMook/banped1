ฟอร์มร้องเรียน
<a href="{{url('/complainant/dashboard')}}">กลับ</a>

<form action="{{url('/complaint_save')}}" method="post" enctype="multipart/form-data">
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

    <label for="pb_id">ประเภทที่ร้องเรียน</label>
    <select class="form-select" aria-label="pb_id" id="pb_id" name="pb_id">
            @foreach ($items as $item)
                <option value="{{$item->id}}">{{$item->name}}</option>
            @endforeach
    </select>
<br>

    <label for="topic">หัวข้อ</label>
    <input type="text" name="topic" id="topic" value="{{old('topic')}}">
    <br>
    <label for="detail">รายละเอียด</label>
    <textarea name="detail" id="detail" rows="3">{{old('detail')}}</textarea>
    <br>
    เพิ่มรูปภาพได้สูงสุดสามรูป
    <br>
    <label for="pic1">รูป1</label>
    <input type="file" name="pic1" id="pic1">
    <br>
    <label for="pic2">รูป2</label>
    <input type="file" name="pic2" id="pic2">
    <br>
    <label for="pic3">รูป3</label>
    <input type="file" name="pic3" id="pic3">

    <input type="hidden" name="status" value="รับเรื่องแล้ว">
    <input type="hidden" name="cn_id" value="{{ Auth::guard('complainant')->user()->id }}">


    <br>
    <input type="submit" value="บันทึก">

</form>
