ตารางรายการร้องเรียน
<br>
<a href="{{url('/redirects')}}">กลับ</a>
<br>
รายการ
<br>
รับเรื่องแล้ว
<table >
    <thead>
        <tr>
        <th>หัวข้อ</th>
        <th>รายละเอียด</th>
        <th>รูปภาพ1</th>
        <th>รูปภาพ2</th>
        <th>รูปภาพ3</th>
        <th>ผู้ร้องเรียน</th>
        <th>ประเภทร้องเรียน</th>
        <th>เปลี่ยนสถานะ</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item1 as $item1 )
        <tr>
            <td>{{$item1->topic}}</td>
            <td>{{$item1->detail}}</td>
            @if($item1->pic1== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item1->pic1)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item1->pic2== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item1->pic2)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item1->pic3== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item1->pic3)}}">คลิกดูรูป</a>
                </td>
            @endif
            <td>{{$item1->complainant->name}}</td>
            <td>{{$item1->problem_type->name}}</td>
            <td> <a href="{{url('change_status/'.$item1->id)}}" class="table-link text-info">
                เปลี่ยนสถานะ
             </a></td>

        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>

        @endforelse
    </tbody>
</table>
<br>
กำลังดำเนินการ
<table >
    <thead>
        <tr>
        <th>หัวข้อ</th>
        <th>รายละเอียด</th>
        <th>รูปภาพ1</th>
        <th>รูปภาพ2</th>
        <th>รูปภาพ3</th>
        <th>ผู้ร้องเรียน</th>
        <th>ประเภทร้องเรียน</th>
        <th>เพิ่มรายละเอียด</th> {{-- เพิ่มรายละเอียด+พร้อมเปลี่ยนสถานะ --}}
        </tr>
    </thead>
    <tbody>
        @forelse ($item2 as $item2 )
        <tr>
            <td>{{$item2->topic}}</td>
            <td>{{$item2->detail}}</td>
            @if($item2->pic1== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic1)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item2->pic2== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic2)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item2->pic3== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic3)}}">คลิกดูรูป</a>
                </td>
            @endif
            <td>{{$item2->complainant->name}}</td>
            <td>{{$item2->problem_type->name}}</td>
            <td> <a href="{{url('operation/'.$item2->id)}}" class="table-link text-info">
                เพิ่มรายละเอียด
             </a></td>
        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>

        @endforelse
    </tbody>
</table>
<br>

ดำเนินการเสร็จสิ้น
<table>
    <thead>
        <tr>
        <th>หัวข้อ</th>
        <th>รายละเอียด</th>
        <th>รูปภาพ1</th>
        <th>รูปภาพ2</th>
        <th>รูปภาพ3</th>
        <th>ผู้ร้องเรียน</th>
        <th>ประเภทร้องเรียน</th>
        <th>ดูรายละเอียด</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($item3 as $item3 )
        <tr>
            <td>{{$item3->topic}}</td>
            <td>{{$item3->detail}}</td>
            @if($item3->pic1== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic1)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item2->pic2== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic2)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if($item3->pic3== null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic3)}}">คลิกดูรูป</a>
                </td>
            @endif
            <td>{{$item3->complainant->name}}</td>
            <td>{{$item3->problem_type->name}}</td>
            <td> <a href="{{url('operation/view/'.$item3->id)}}" class="table-link text-info">
                ดูรายละเอียด
             </a></td>

            </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>

        @endforelse
    </tbody>
</table>
