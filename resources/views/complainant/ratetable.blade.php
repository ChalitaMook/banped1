ประเมิน
<br>
<a href="{{url('/complainant/dashboard')}}">กลับ</a>
<br>
<table >
    <thead>
        <tr>
        <th>หัวข้อ</th>
        <th>รายละเอียดการดำเนินการ</th>
        <th>ประเมิน</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item as $item )
        <tr>
            <td>{{$item->topic}}</td>
            <td> <a href="{{url('/complainant/operation/view/'.$item->id)}}" class="table-link text-info">
                ดูรายละเอียด
             </a></td>
             <td> <a href="{{url('rate_form/'.$item->id)}}" class="table-link text-info">
                ประเมิน
             </a></td>
        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>
        @endforelse
    </tbody>
</table>
