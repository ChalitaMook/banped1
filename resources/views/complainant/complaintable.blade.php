@extends('layouts.bootstrap')

<style>
    body {
        margin-top: 20px;
        background: #f8f8f8
    }
</style>


<x-complainant-layout>

    <div class="container card border mt-5">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container mt-3">



                <div class="col">
                    <div class="e-tabs mb-3 px-3">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"><h2>รับเรื่องแล้ว</h2></li>
                        </ul>
                    </div>

                    <div class="row flex-lg-nowrap">
                        <div class="col mb-3">
                            <div class="e-panel card">
                                <div class="card-body">
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
                                                        <th>วันที่แจ้ง</th>
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
                                                            <td>{{ $item1->created_at }}</td>

                                                        </tr>
                                                    @empty
                                                        <tr>
                                                            <td>ไม่มีข้อมูล</td>
                                                        </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
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
                        <li class="nav-item"><h2>กำลังดำเนินการ</h2></li>
                    </ul>
                </div>

                <div class="row flex-lg-nowrap">
                    <div class="col mb-3">
                        <div class="e-panel card">
                            <div class="card-body">
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
                                                    <th>วันที่แจ้ง</th>
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
                                                        <td>{{ $item2->created_at }}</td>

                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td>ไม่มีข้อมูล</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
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
                        <li class="nav-item"><h2>ดำเนินการเสร็จสิ้น</h2></li>
                    </ul>
                </div>

                <div class="row flex-lg-nowrap">
                    <div class="col mb-3">
                        <div class="e-panel card">
                            <div class="card-body">
                                <div class="card-title">
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
                                                    <th>วันที่แจ้ง</th>
                                                    <th>ดูรายละเอียด</th>
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
                                                        <td>{{ $item3->created_at }}</td>
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



