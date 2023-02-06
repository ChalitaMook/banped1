<h1>ข้อมูลพนักงาน</h1>
<a href="{{url('/user_form')}}">เพิ่มข้อมูล</a><br>
<a href="{{url('/redirects')}}">กลับ</a>
<table class="table user-list">
    <thead>
        <tr class="table-primary">
        <th><span>ไอดี</span></th>
        <th><span>ชื่อ</span></th>
        <th><span>อีเมล</span></th>
        <th><span>เบอร์โทร</span></th>
        <th><span>ตำแหน่ง</span></th>
        <th><span>แผนก</span></th>
        <th><span>ลบ</span></th>
        <th><span>แก้ไข</span></th>
        <th>&nbsp;</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->email}}</td>
            <td>{{$item->phone_num}}</td>
            @if ($item->role=='0')
                <td>แอดมิน</td>
            @elseif($item->role=='1')
                <td>พนักงาน</td>
            @else
                <td>หัวหน้า</td>
            @endif
                </td>
            <td>{{$item->agency->name}}</td>
            <td >
                <a href="{{url('user_delete/'.$item->id)}}" class="table-link text-info">
                    ลบ
                </a>

            </td>
            <td>
                 <a href="{{url('user_form_edit/'.$item->id)}}" class="table-link danger">
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
