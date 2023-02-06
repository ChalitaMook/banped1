<h1>ข้อมูลหน่วยงาน</h1>
<a href="{{url('/agency_form')}}">เพิ่มข้อมูล</a><br>
<a href="{{url('/redirects')}}">กลับ</a>
<table >
    <thead>
        <tr>
        <th>ไอดี</th>
        <th>ชื่อหน่วยงาน</th>
        <th>เบอร์โทรหน่วยงาน</th>
        <th>ลบ</th>
        <th>แก้ไข</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->phone_num}}</td>
            <td>
                <a href="{{url('agency_delete/'.$item->id)}}" class="table-link text-info">
                   ลบ
                </a>

            </td>
            <td>
                 <a href="{{url('agency_form_edit/'.$item->id)}}" class="table-link danger">
                   แก้ไข
                </a>
            </td>
        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>

        @endforelse
    </tbody>
</table>
