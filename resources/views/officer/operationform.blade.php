ฟอร์มเพิ่มรายละเอียด
<br>
<a href="{{url('/officer/complaint_table')}}">กลับ</a>
<br>
เรื่องร้องเรียน :{{$item->topic}}

<form action="{{url('operation_update/'.$item->id)}}" method="post" enctype="multipart/form-data">
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

    <label for="detail">รายละเอียด</label>
    <textarea name="detail" id="detail" rows="3">{{old('detail')}}</textarea>
    <br>
    เพิ่มรูปภาพ
    <br>
    <label for="pic_op">รูปภาพ</label>
    <input type="file" name="pic_op" id="pic_op">

    <input type="hidden" name="us_id" value="{{Auth::user()->id}}">

    <br>
    <input type="submit" value="บันทึก">

</form>
