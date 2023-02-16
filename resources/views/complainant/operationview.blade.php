หน้าแสดงรายละเอียด
<br>
<a href="{{url('/complaint_table')}}">กลับ</a>

@forelse ( $item as $item )
<br>
เรื่อง: {{$item->complaint->topic}}
<br>
รายละเอียดการดำเนินการ:
<br>
{{$item->detail}}
<br>
รูปภาพ
@if($item->pic_op== null)
                --
            @else
               <a href="{{asset($item->pic_op)}}">คลิกดูรูป</a>
            @endif
<br>
เจ้าหน้าที่ดำเนินการ
{{$item->user->name}}
@empty
no data
@endforelse



