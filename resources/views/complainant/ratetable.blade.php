ประเมิน
ดำเนินการเสร็จสิ้น
<table >
    <thead>
        <tr>
        <th>หัวข้อ</th>
        <th>สถานะ</th>
        <th>รายละเอียด</th>
        <th>ประเมิน</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item as $item )
        <tr>
            <td>{{$item->topic}}</td>
            <td>สถานะ</td>
            <td>รายละเอียด</td>
            <td>ประเมิน</td>
        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>
        @endforelse
    </tbody>
</table>
