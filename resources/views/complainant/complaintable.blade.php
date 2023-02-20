@extends('layouts.bootstrap')

<style>
    body {
        margin-top: 20px;
        background: #f8f8f8
    }
</style>


<x-complainant-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::guard('complainant')->user()->name }}
        </h2>
    </x-slot>


    <div class="container card border mt-5">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container mt-3">
            <div class="row flex-lg-nowrap">
                <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
                    <div class="card p-3">
                        <div class="e-navlist e-navlist--active-bg">
                            <div class="user-avatar">
                                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Maxwell Admin">
                            </div>

                            <h5 class="user-name text-center">{{ Auth::guard('complainant')->user()->name }}</h5>
                            <h6 class="user-email text-center ">{{ Auth::guard('complainant')->user()->email }}</h6>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="e-tabs mb-3 px-3">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><a class="nav-link active" href="#">ข้อมูลร้องเรียน</a></li>
                        </ul>
                    </div>

                    <div class="row flex-lg-nowrap">
                        <div class="col mb-3">
                            <div class="e-panel card">
                                <div class="card-body">
                                    <div class="card-title">
                                        <h6 class="mr-2"><span>รายการ:</span><small class="px-1">ที่ร้องเรียน</small></h6>
                                                
                                    </div>
                                    <div class="e-table">
                                        <div class="table-responsive table-lg mt-3">
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th>หัวข้อร้องเรียน</th>
                                                        <th>ประเภทร้องเรียน</th>
                                                        <th>รูปภาพ</th>
                                                        <th>ชื่อผู้ร้องเรียน</th>
                                                        <th>วันที่ </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                                มาเก็บขยะด่วนเหม็นมากๆ                                                                
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle">เก็บขยะ</td>
                                                        <td class="align-middle text-center">
                                                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"
                                                                style="width: 35px; height: 35px; border-radius: 3px;">
                                                                <i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle"><span>สมชาย รักดี</span>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            26 Jan 2018
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                                น้ำไม่ไหลมาดูด่วน                                                                
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle">น้ำประปา</td>
                                                        <td class="align-middle text-center">
                                                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"
                                                                style="width: 35px; height: 35px; border-radius: 3px;">
                                                                <i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle"><span>สมชาย รักดี</span>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            26 Jan 2018
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="align-middle">
                                                            <div class="custom-control custom-control-inline custom-checkbox custom-control-nameless m-0 align-top">
                                                                ไฟฟ้าดับมาดูด่วน                                                                
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle">ไฟ้ฟ้า</td>
                                                        <td class="align-middle text-center">
                                                            <div class="bg-light d-inline-flex justify-content-center align-items-center align-top"
                                                                style="width: 35px; height: 35px; border-radius: 3px;">
                                                                <i class="fa fa-fw fa-photo" style="opacity: 0.8;"></i>
                                                            </div>
                                                        </td>
                                                        <td class="text-nowrap align-middle"><span>สมชาย รักดี</span>
                                                        </td>
                                                        <td class="text-center align-middle">
                                                            26 Jan 2018
                                                        </td>
                                                    </tr>
                                                    
                                                </tbody>
                                            </table>
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <ul class="pagination mt-3 mb-0">
                                                <li class="disabled page-item"><a href="#"
                                                        class="page-link">‹</a></li>
                                                <li class="active page-item"><a href="#"
                                                        class="page-link">1</a></li>
                                                <li class="page-item"><a href="#" class="page-link">2</a></li>
                                                <li class="page-item"><a href="#" class="page-link">3</a></li>
                                                <li class="page-item"><a href="#" class="page-link">4</a></li>
                                                <li class="page-item"><a href="#" class="page-link">5</a></li>
                                                <li class="page-item"><a href="#" class="page-link">›</a></li>
                                                <li class="page-item"><a href="#" class="page-link">»</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>





</x-complainant-layout>




<h1>ตารางร้องเรียน</h1>
<a href="{{ url('/complaint_form') }}">เพิ่มข้อมูล</a><br>
<a href="{{ url('/complainant/dashboard') }}">กลับ</a>
<br>
รายการ
<br>
รับเรื่องแล้ว
<table>
    <thead>
        <tr>
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>
            <th>รูปภาพ1</th>
            <th>รูปภาพ2</th>
            <th>รูปภาพ3</th>
            <th>ประเภทร้องเรียน</th>
            <th>สถานะ</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item1 as $item1)
            <tr>
                <td>{{ $item1->topic }}</td>
                <td>{{ $item1->detail }}</td>
                @if ($item1->pic1 == null)
                    <td>--</td>
                @else
                    <td>
                        <a href="{{ asset($item1->pic1) }}">คลิกดูรูป</a>
                    </td>
                @endif
                @if ($item1->pic2 == null)
                    <td>--</td>
                @else
                    <td>
                        <a href="{{ asset($item1->pic2) }}">คลิกดูรูป</a>
                    </td>
                @endif
                @if ($item1->pic3 == null)
                    <td>--</td>
                @else
                    <td>
                        <a href="{{ asset($item1->pic3) }}">คลิกดูรูป</a>
                    </td>
                @endif
                <td>{{ $item1->problem_type->name }}</td>
                <td>{{ $item1->status }}</td>

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
<table>
    <thead>
        <tr>
            <th>หัวข้อ</th>
            <th>รายละเอียด</th>
            <th>รูปภาพ1</th>
            <th>รูปภาพ2</th>
            <th>รูปภาพ3</th>
            <th>ประเภทร้องเรียน</th>
            <th>สถานะ</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($item2 as $item2)
            <tr>
                <td>{{ $item2->topic }}</td>
                <td>{{ $item2->detail }}</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>ประเภทร้องเรียน</td>
                <td>สถานะ</td>

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
            <th>ประเภทร้องเรียน</th>
            <th>สถานะ</th>
            <th>รายละเอียด</th>

        </tr>
    </thead>
    <tbody>
        @forelse ($item3 as $item3)
            <tr>
                <td>{{ $item3->topic }}</td>
                <td>{{ $item3->detail }}</td>
                <td>1</td>
                <td>2</td>
                <td>3</td>
                <td>ประเภทร้องเรียน</td>
                <td>สถานะ</td>
                <td>รายละเอียด</td>
            </tr>
        @empty
            <tr>
                <td>ไม่มีข้อมูล</td>
            </tr>
        @endforelse
    </tbody>
</table>
