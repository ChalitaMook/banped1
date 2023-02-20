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
    <div class="container-fluid">
        <div class="container">
            <!-- Title -->
            <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                            class="bi bi-arrow-left-square me-2"></i></a>  ฟอร์มเพิ่มข้อมูลประเภทปัญหา </h2>
                <div class="hstack gap-3">
                    <button class="btn btn-light btn-sm btn-icon-text"><i class="bi bi-x"></i> <span
                            class="text">ยกเลิก</span></button>
                    <button class="btn btn-primary btn-sm btn-icon-text"><i class="bi bi-save"></i> <span
                            class="text">บันทึก</span></button>
                </div>
            </div>

            <!-- Main content -->
            <div class="row">
                <!-- Left side -->
                <div class="col-lg-8">
                    <!-- Basic information -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6 mb-4">ข้อมูลร้องเรียน</h3>
                            <div class="mb-3">
                                <label class="form-label">ประเภทที่ร้องเรียน</label>
                                <select class="form-select" aria-label="pb_id" id="pb_id" name="pb_id">
                                    @foreach ($items as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-3">
                                <label class="form-label">หัวข้อที่ร้องเรียน</label>
                                <input type="text" class="form-control">
                            </div>
                           
                            <div class="mb-3">
                                <label class="form-label">หัวข้อที่ร้องเรียน</label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- Right side -->
                <div class="col-lg-4">
                    <!-- Avatar -->
                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">รูปภาพประกอบ 1</h3>
                            <input class="form-control" type="file">
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">รูปภาพประกอบ 2</h3>
                            <input class="form-control" type="file">
                        </div>
                    </div>

                    <div class="card mb-4">
                        <div class="card-body">
                            <h3 class="h6">รูปภาพประกอบ 3</h3>
                            <input class="form-control" type="file">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-complainant-layout>





<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        {{ Auth::guard('complainant')->user()->name }}
    </h2>
</x-slot>
ฟอร์มร้องเรียน
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

</form>
