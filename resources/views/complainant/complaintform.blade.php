@extends('layouts.bootstrap')

{{-- css ฟอร์มร้องเรียน --}}
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
            <form action="{{ url('/complaint_save') }}" method="POST" enctype="multipart/form-data">

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
                                    class="bi bi-arrow-left-square me-2"></i></a> <b>ฟอร์มร้องเรียนข้อมูล</b> </h2>
                        <div class="hstack gap-3">
                            <input class="btn btn-danger btn-sm btn-icon-text rounded-pill" type="reset" value="ยกเลิก">
                            <button class="btn btn-primary btn-sm btn-icon-text rounded-pill"><i class="bi bi-save"></i>
                                <span class="text">ร้องเรียน</span></button>
                        </div>
                    </div>

                    <!-- Main content -->
                    <div class="row rounded">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"> <b>ประเภทที่ร้องเรียน</b> </label>
                                                <br>
                                                <select class="form-select rounded-pill" aria-label="select_input"
                                                    id="select_input" name="select_input">
                                                    @foreach ($items as $item)
                                                        <option value="{{ $item->id }},{{ $item->ag_id }}">
                                                            {{ $item->name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>

                                             <div class="mb-3">
                                                <label class="form-label"> <b>หัวข้อ</b> </label>
                                                <input class="form-control pr-5 rounded-pill" type="text"
                                                    name="topic" id="topic" value="{{ old('topic') }}">
                                            </div>
                                        </div>

                                        <div class="col-lg-6">

                                        </div>

                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label class="form-label"><b>รายละเอียด</b> </label>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="detail" id="detail" rows="4" style="width: 600px">{{ old('detail') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Right side -->
                        <div class="col-lg-4">
                            <!-- Avatar -->
                            <div class="card mb-4 rounded">
                                <div class="card-body">
                                    <h3 class="h6"> <b>รูปที่:1</b> </h3>
                                    <input class="form-control rounded-pill" name="pic1" id="pic1"
                                        type="file">
                                </div>
                            </div>
                            <div class="card mb-4 rounded">
                                <div class="card-body">
                                    <h3 class="h6"> <b>รูปที่:2</b> </h3>
                                    <input class="form-control rounded-pill" name="pic2" id="pic2"
                                        type="file">
                                </div>
                            </div>
                            <div class="card mb-4 rounded">
                                <div class="card-body">
                                    <h3 class="h6"> <b>รูปที่:3</b></h3>
                                    <input class="form-control rounded-pill" name="pic3" id="pic3"
                                        type="file">
                                </div>
                            </div>
                            <!-- Notes -->
                            <input type="hidden" name="status" value="รับเรื่องแล้ว">
                            <input type="hidden" name="cn_id" value="{{ Auth::guard('complainant')->user()->id }}">

                        </div>
                    </div>
                </div>
            </form>





        </div>
    </div>

</x-complainant-layout>





{{-- ฟอร์มร้องเรียน
<a href="{{ url('/complainant/dashboard') }}">กลับ</a>

<form action="{{ url('/complaint_save') }}" method="post" enctype="multipart/form-data">
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

    <label for="pb_id">ประเภทที่ร้องเรียน</label>
    <select class="form-select" aria-label="pb_id" id="pb_id" name="pb_id">
        @foreach ($items as $item)
            <option value="{{ $item->id }}">{{ $item->name }}</option>
        @endforeach
    </select>
    <br>

    <label for="topic">หัวข้อ</label>
    <input type="text" name="topic" id="topic" value="{{ old('topic') }}">
    <br>
    <label for="detail">รายละเอียด</label>
    <textarea name="detail" id="detail" rows="3">{{ old('detail') }}</textarea>
    <br>
    เพิ่มรูปภาพได้สูงสุดสามรูป
    <br>
    <label for="pic1">รูป1</label>
    <input type="file" name="pic1" id="pic1">
    <br>
    <label for="pic2">รูป2</label>
    <input type="file" name="pic2" id="pic2">
    <br>
    <label for="pic3">รูป3</label>
    <input type="file" name="pic3" id="pic3">

    <input type="hidden" name="status" value="รับเรื่องแล้ว">
    <input type="hidden" name="cn_id" value="{{ Auth::guard('complainant')->user()->id }}">


    <br>
    <input type="submit" value="บันทึก">

</form> --}}
