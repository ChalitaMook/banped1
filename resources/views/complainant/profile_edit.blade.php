@extends('layouts.bootstrap')

<style>
    body {
        margin: 0;
        padding-top: 40px;
        color: #2e323c;
        background: #f5f6fa;
        position: relative;
        height: 100%;
    }

    .account-settings .user-profile {
        margin: 0 0 1rem 0;
        padding-bottom: 1rem;
        text-align: center;
    }

    .account-settings .user-profile .user-avatar {
        margin: 0 0 1rem 0;
    }

    .account-settings .user-profile .user-avatar img {
        width: 90px;
        height: 90px;
        -webkit-border-radius: 100px;
        -moz-border-radius: 100px;
        border-radius: 100px;
    }

    .account-settings .user-profile h5.user-name {
        margin: 0 0 0.5rem 0;
    }

    .account-settings .user-profile h6.user-email {
        margin: 0;
        font-size: 0.8rem;
        font-weight: 400;
        color: #9fa8b9;
    }

    .account-settings .about {
        margin: 2rem 0 0 0;
        text-align: center;
    }

    .account-settings .about h5 {
        margin: 0 0 15px 0;
        color: #007ae1;
    }

    .account-settings .about p {
        font-size: 0.825rem;
    }

    .form-control {
        border: 1px solid #cfd1d8;
        -webkit-border-radius: 2px;
        -moz-border-radius: 2px;
        border-radius: 2px;
        font-size: .825rem;
        background: #ffffff;
        color: #2e323c;
    }

    .card {
        background: #ffffff;
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        border: 0;
        margin-bottom: 1rem;
    }
</style>


<x-complainant-layout>
    <div class=" my-3 mt-4 card border">
        <div class="d-flex justify-content-center">
            <img src="{{ asset('/image/resume.jpg') }}" width="300" alt="">
        </div>
    </div>

    <div class="container">
        <div class="row gutters">
            <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <div class="account-settings">
                            <div class="user-profile">
                                <div class="user-avatar">
                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                                </div>

                                <h5 class="user-name">{{ Auth::guard('complainant')->user()->name }}</h5>
                                <h6 class="user-email">{{ Auth::guard('complainant')->user()->email }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-9 col-md-12 col-sm-12 col-12">
                <div class="card h-100">
                    <div class="card-body">
                        <form action="{{ url('profile_update/' . $item->id) }}" method="post">
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

                            <div class="row gutters">

                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mb-2 text-primary">เเก้ไขข้อมูลส่วนตัว</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="fullName">ชื่อ-นามสกุล :</label>
                                        <input type="text" class="form-control" name="name" id="fullName"
                                            value="{{ $item->name }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">อีเมล :</label>
                                        <input type="email" class="form-control" name="email" id="eMail"
                                            value="{{ $item->email }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="eMail">รหัสผ่าน :</label>
                                        <input type="password" class="form-control" name="password" id="eMail"
                                            value="">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="phone">โทรศัทพ์ :</label>
                                        <input type="text" class="form-control" name="phone_num" id="phone"
                                            value="{{ $item->phone_num }}">
                                    </div>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="website">เลขบัตรประจำตัวประชาชน: </label>
                                        <input type="text" class="form-control" name="national_id" id="website"
                                            value="{{ $item->national_id }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <h6 class="mt-3 mb-2 text-primary">ที่อยู่</h6>
                                </div>
                                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6 col-12">
                                    <div class="form-group">
                                        <label for="Street">ที่อยู่ :</label>
                                        <input type="name" class="form-control" name="address" id="Street"
                                            value="{{ $item->address }}">
                                    </div>
                                </div>

                            </div>
                            <div class="row gutters">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="text-right">
                                        <button type="button" id="submit" name="submit"
                                            class="btn btn-secondary">ยกเลิก</button>
                                        {{-- <button type="button" id="submit" name="submit"
                                            class="btn btn-primary">บันทึก</button> --}}
                                        <input type="submit" class="btn btn-primary" value="บันทึก">

                                    </div>
                                </div>
                            </div>


                        </form>


                    </div>
                </div>
            </div>
        </div>
    </div>

</x-complainant-layout>




แก้ไขข้อมูล
ฟอร์มแก้ไขข้อมูลส่วนตัว
<br>
<a href="{{ url('/profile1') }}">กลับ</a>
<form action="{{ url('profile_update/' . $item->id) }}" method="post">
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

    <label for="name">ชื่อ</label>
    <input type="text" name="name" id="name" value="{{ $item->name }}">
    <br>
    <label for="email">อีเมล</label>
    <input type="email" name="email" id="email" value="{{ $item->email }}">
    <br>
    <label for="password">รหัสผ่าน</label>
    <input type="password" name="password" id="password" value="">
    <br>
    <label for="phone_num">เบอร์โทร</label>
    <input type="text" maxlength="10" minlength="10" name="phone_num" id="phone_num"
        value="{{ $item->phone_num }}">
    <br>
    <label for="address">ที่อยู่</label>
    <textarea name="address" id="address" cols="30" rows="3">{{ $item->address }}</textarea>
    <br>
    <label for="national_id">เลขประจำตัวประชาชน</label>
    <input type="text" maxlength="13" minlength="13" name="national_id" id="national_id"
        value="{{ $item->national_id }}">
    <br>

    <input type="submit" value="บันทึก">

</form>
