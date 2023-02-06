ฟอร์มเพิ่มข้อมูลประเภทปัญหา
<a href="{{url('/problem_type')}}">กลับ</a>

<form action="{{url('/problem_type_form_save')}}" method="post">
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

    <label for="name">ชื่อประเภท</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    <br>
    <label for="ag_id">หน่วยงานที่ดูแล</label>
        <select class="form-select" aria-label="ag_id" id="ag_id" name="ag_id">
                @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
        </select>
    <br>


    <br>
    <input type="submit" value="บันทึก">

</form>
