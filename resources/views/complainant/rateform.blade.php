<h1>ฟอร์มประเมิน</h1>
<br>
ความพึงพอใจต่อผลการดำเนินงานของเทศบาลตำบลบ้านเป็ดในภาพรวม
<br>
เรื่อง:{{$item->topic}}
<br>
ระดับคะแนน มากที่สุด-น้อยที่สุด 5-1
<br>

<form action="{{url('rate_form_save')}}" method="post">
    @csrf
        <input type="hidden" name="cn_id" value="{{ Auth::guard('complainant')->user()->id }}">
        <input type="hidden" name="cp_id" value="{{$item->id}}">
        
        <label for="section1">1.การประชาสัมพันธ์ให้ประชาชนรับรู้ข้อมูลหรือผลการดำเนินงาน</label>
        <select name="section1" id="section1">
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>
        </select>
        <br>
        <label for="section2">2.การดำเนินงานเป็นไปตามระยะเวลาที่กำหนด</label>
        <select name="section2" id="section2">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <br>
        <label for="section3">3.การแก้ไขปัญหาและการตอบสนองความต้องการของประชาชน</label>
        <select name="section3" id="section3">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <br>
        <label for="section4">4.การเปิดโอกาสให้ประชาชนตรวจสอบการดำเนินโครงการ</label>
        <select name="section4" id="section4">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <br>
        <label for="section5">5.การรายงานผลการดำเนินโครงการ/กิจกรรมต่อสาธารณะ</label>
        <select name="section5" id="section5">
            <option value="5">5</option>
            <option value="4">4</option>
            <option value="3">3</option>
            <option value="2">2</option>
            <option value="1">1</option>
        </select>
        <br>
        ข้อเสนอแนะ
        <textarea name="comment" id="comment" cols="30" rows="3"></textarea>

        <input type="submit" value="บันทึก">

</form>



