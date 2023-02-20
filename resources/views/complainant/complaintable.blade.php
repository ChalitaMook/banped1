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
                                        <h6 class="mr-2"><span>รายการ:</span><small
                                                class="px-1">รับเรื่องแล้ว</small></h6>

                                    </div>
                                    <div class="e-table">
                                        <div class="table-responsive table-lg mt-3">
                                            <table class="table table-bordered">
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
                                        </div>
                                        <div class="d-flex justify-content-center">
                                            <ul class="pagination mt-3 mb-0">
                                                <li class="disabled page-item"><a href="#" class="page-link">‹</a>
                                                </li>
                                                <li class="active page-item"><a href="#" class="page-link">1</a>
                                                </li>
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
                                    <h6 class="mr-2"><span>รายการ:</span><small class="px-1">กำลังดำเนินการ</small>
                                    </h6>

                                </div>
                                <div class="e-table">
                                    <div class="table-responsive table-lg mt-3">
                                        <table class="table table-bordered">
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
                                                        @if ($item2->pic1 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item2->pic1) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        @if ($item2->pic2 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item2->pic2) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        @if ($item2->pic3 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item2->pic3) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        <td>{{ $item2->problem_type->name }}</td>
                                                        <td>{{ $item2->status }}</td>

                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td>ไม่มีข้อมูล</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <ul class="pagination mt-3 mb-0">
                                            <li class="disabled page-item"><a href="#" class="page-link">‹</a>
                                            </li>
                                            <li class="active page-item"><a href="#" class="page-link">1</a>
                                            </li>
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

            <br>

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
                                    <h6 class="mr-2"><span>รายการ:</span><small
                                            class="px-1">ดำเนินการเสร็จสิ้น</small>
                                    </h6>

                                </div>
                                <div class="e-table">
                                    <div class="table-responsive table-lg mt-3">
                                        <table class="table table-bordered">
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
                                                @forelse ($item3 as $item3)
                                                    <tr>
                                                        <td>{{ $item3->topic }}</td>
                                                        <td>{{ $item3->detail }}</td>
                                                        @if ($item3->pic1 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item3->pic1) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        @if ($item3->pic2 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item3->pic2) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        @if ($item3->pic3 == null)
                                                            <td>--</td>
                                                        @else
                                                            <td>
                                                                <a href="{{ asset($item3->pic3) }}">คลิกดูรูป</a>
                                                            </td>
                                                        @endif
                                                        <td>{{ $item3->problem_type->name }}</td>
                                                        <td>{{ $item3->status }}</td>
                                                        <td> <a href="{{ url('/complainant/operation/view/' . $item3->id) }}"
                                                                class="table-link text-info">
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
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <ul class="pagination mt-3 mb-0">
                                            <li class="disabled page-item"><a href="#" class="page-link">‹</a>
                                            </li>
                                            <li class="active page-item"><a href="#" class="page-link">1</a>
                                            </li>
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


<br>


</x-complainant-layout>




{{-- <h1>ตารางร้องเรียน</h1>
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
        @forelse ($item2 as $item2 )
        <tr>
            <td>{{$item2->topic}}</td>
            <td>{{$item2->detail}}</td>
            @if ($item2->pic1 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic1)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if ($item2->pic2 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic2)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if ($item2->pic3 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item2->pic3)}}">คลิกดูรูป</a>
                </td>
            @endif
            <td>{{$item2->problem_type->name}}</td>
            <td>{{$item2->status}}</td>

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
        @forelse ($item3 as $item3 )
        <tr>
            <td>{{$item3->topic}}</td>
            <td>{{$item3->detail}}</td>
            @if ($item3->pic1 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic1)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if ($item3->pic2 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic2)}}">คลิกดูรูป</a>
                </td>
            @endif
            @if ($item3->pic3 == null)
                <td>--</td>
            @else
                <td>
                    <a href="{{asset($item3->pic3)}}">คลิกดูรูป</a>
                </td>
            @endif
            <td>{{$item3->problem_type->name}}</td>
            <td>{{$item3->status}}</td>
            <td> <a href="{{url('/complainant/operation/view/'.$item3->id)}}" class="table-link text-info">
                ดูรายละเอียด
             </a></td>
        </tr>
        @empty
            <tr>
                <td>ไม่มีข้อมูล</td>
            </tr>
        @endforelse
    </tbody>
</table> --}}
