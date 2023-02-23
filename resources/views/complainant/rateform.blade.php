@extends('layouts.bootstrap')

<style>
    body {
        background: #eee;
    }

    .card {
        box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 0 solid rgba(0, 0, 0, .125);
        border-radius: 1rem;
    }

    .card-body {
        -webkit-box-flex: 1;
        -ms-flex: 1 1 auto;
        flex: 1 1 auto;
        padding: 1.5rem 1.5rem;
    }
</style>


<x-complainant-layout>
    <div class="container card mt-3">
        <div class="d-flex justify-content-center mt-4 mb-4 ">
            <img src="{{ asset('/image/logo1.png') }}" width="500" alt="">
        </div>
    </div>

    <div class="container card rounded mt-3">
        <div class="container-fluid">
            <form action="{{url('rate_form_save')}}" method="POST" enctype="multipart/form-data">

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


                <div class="container">
                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                        <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                                    class="bi bi-arrow-left-square me-2"></i></a> <b>ฟอร์มประเมินความพึงพอใจต่อผลการดำเนินงานของเทศบาลตำบลบ้านเป็ดในภาพรวม</b> </h2>
                        <br>
                    </div>
                    <h3>เรื่อง:{{$item->topic}}</h3>
                    <label for="">กรุณากรอกคะแนนลงในช่องแบบสอบถามที่ตรงกับระดับความคิดเห็นของท่านมากที่สุด</label>
                    <br>
                    <label for="">โดยตัวเลขของระดับประสิทธิภาพต่อแบบประเมินแต่ละด้านมีความหมายดังนี้</label>
                    <br>
                    5 หมายถึง พึงพอใจมาก
                    <br>
                    4 หมายถึง พึงพอใจ
                    <br>
                    3 หมายถึง พอใช้
                    <br>
                    2 หมายถึง ไม่พึงพอใจ
                    <br>
                    1 หมายถึง ไม่พึงพอใจมาก
                    <br>
                    <input type="hidden" name="cn_id" value="{{ Auth::guard('complainant')->user()->id }}">
                    <input type="hidden" name="cp_id" value="{{$item->id}}">
                    <!-- Main content -->
                    <div class="row rounded">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"> <b>1.การประชาสัมพันธ์ให้ประชาชนรับรู้ข้อมูลหรือผลการดำเนินงาน</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill form-control" aria-label="section1"
                                                    id="section1" name="section1">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>

                                            <div class="mb-3">
                                                <label class="form-label"> <b>2.การดำเนินงานเป็นไปตามระยะเวลาที่กำหนด</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill form-control" aria-label="section2"
                                                    id="section2" name="section2">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> <b>3.การแก้ไขปัญหาและการตอบสนองความต้องการของประชาชน</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill form-control" aria-label="section3"
                                                    id="section3" name="section3">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> <b>4.การเปิดโอกาสให้ประชาชนตรวจสอบการดำเนินโครงการ</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill form-control" aria-label="section4"
                                                    id="section4" name="section4">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> <b>5.การรายงานผลการดำเนินโครงการ/กิจกรรมต่อสาธารณะ</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill form-control" aria-label="section5"
                                                    id="section5" name="section5">
                                                    <option value="5">5</option>
                                                    <option value="4">4</option>
                                                    <option value="3">3</option>
                                                    <option value="2">2</option>
                                                    <option value="1">1</option>
                                                </select>
                                            </div>

                                        </div>

                                        <div class="col-lg-6">

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"><b>ความคิดเห็นเพิ่มเติม</b> </label>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="comment" id="comment" rows="4" style="width: 600px">{{ old('comment') }}</textarea>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="hstack gap-3">
                                        <input class="btn btn-danger btn-sm btn-icon-text rounded-pill" type="reset" value="ยกเลิก">
                                        <button class="btn btn-primary btn-sm btn-icon-text rounded-pill"><i class="bi bi-save"></i>
                                        <span class="text">ประเมิน</span></button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>

</x-complainant-layout>

