ฟอร์มแก้ไขข้อมูลประเภทปัญหา
<a href="{{url('/problem_type')}}">กลับ</a>

<form action="{{url('problem_type_form_update/'.$item2->id)}}" method="post">
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
    <input type="text" name="name" id="name" value="{{$item2->name}}">
    <br>
    <label for="ag_id">หน่วยงานที่ดูแล</label>
        <select class="form-select" aria-label="ag_id" id="ag_id" name="ag_id">
            @foreach ($item1 as $item1)
                <option value="{{ $item1->id }}" {{ $item1->id == $item2->ag_id ? 'selected' : '' }}>{{ $item1->name }}</option>
            @endforeach
        </select>
    <br>
    <br>
    <input type="submit" value="บันทึก">

</form>
