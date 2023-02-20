@extends('layouts.bootstrap')

<style>
    body {
        background: #eee;
    }

    .main-box.no-header {
        padding-top: 20px;
    }

    .main-box {
        background: #FFFFFF;
        -webkit-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -moz-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -o-box-shadow: 1px 1px 2px 0 #CCCCCC;
        -ms-box-shadow: 1px 1px 2px 0 #CCCCCC;
        box-shadow: 1px 1px 2px 0 #CCCCCC;
        margin-bottom: 16px;
        -webikt-border-radius: 3px;
        -moz-border-radius: 3px;
        border-radius: 3px;
    }

    .table a.table-link.danger {
        color: #e74c3c;
    }

    .label {
        border-radius: 3px;
        font-size: 0.875em;
        font-weight: 600;
    }

    .user-list tbody td .user-subhead {
        font-size: 0.875em;
        font-style: italic;
    }

    .user-list tbody td .user-link {
        display: block;
        font-size: 1.25em;
        padding-top: 3px;
        margin-left: 60px;
    }

    a {
        color: #3498db;
        outline: none !important;
    }

    .user-list tbody td>img {
        position: relative;
        max-width: 50px;
        float: left;
        margin-right: 15px;
    }

    .table thead tr th {
        text-transform: uppercase;
        font-size: 0.875em;
    }

    .table thead tr th {
        border-bottom: 2px solid #e7ebee;
    }

    .table tbody tr td:first-child {
        font-size: 1.125em;
        font-weight: 300;
    }

    .table tbody tr td {
        font-size: 0.875em;
        vertical-align: middle;
        border-top: 1px solid #e7ebee;
        padding: 12px 8px;
    }

    a:hover {
        text-decoration: none;
    }
</style>


<x-app-layout>
    <div class="container">
        <link rel="stylesheet" type="text/css"
            href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css">
        <hr>
        <div class="container bootstrap snippets bootdey">

            <h3>รายการที่รับเรื่องแล้ว</h3>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                                <tr class="table-primary">
                                                    <th>หัวข้อ</th>
                                                    <th>รายละเอียด</th>
                                                    <th>รูปภาพ1</th>
                                                    <th>รูปภาพ2</th>
                                                    <th>รูปภาพ3</th>
                                                    <th>ผู้ร้องเรียน</th>
                                                    <th>ประเภทร้องเรียน</th>
                                                    <th>เปลี่ยนสถานะ</th>
                                                        </tr>
                                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($item1 as $item1 )
                                        <tr>
                                            <td>{{$item1->topic}}</td>
                                            <td>{{$item1->detail}}</td>
                                            @if($item1->pic1== null)
                                                <td>--</td>
                                            @else
                                                <td>
                                                    <a href="{{asset($item1->pic1)}}">คลิกดูรูป</a>
                                                </td>
                                            @endif
                                            @if($item1->pic2== null)
                                                <td>--</td>
                                            @else
                                                <td>
                                                    <a href="{{asset($item1->pic2)}}">คลิกดูรูป</a>
                                                </td>
                                            @endif
                                            @if($item1->pic3== null)
                                                <td>--</td>
                                            @else
                                                <td>
                                                    <a href="{{asset($item1->pic3)}}">คลิกดูรูป</a>
                                                </td>
                                            @endif
                                            <td>{{$item1->complainant->name}}</td>
                                            <td>{{$item1->problem_type->name}}</td>
                                            <td> <a href="{{url('change_status/'.$item1->id)}}" class="table-link text-info">
                                                เปลี่ยนสถานะ
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

            <h3>รายการที่กำลังดำเนินการ</h3>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                                <tr class="table-primary">
                                                        <th>หัวข้อ</th>
                                                        <th>รายละเอียด</th>
                                                        <th>รูปภาพ1</th>
                                                        <th>รูปภาพ2</th>
                                                        <th>รูปภาพ3</th>
                                                        <th>ผู้ร้องเรียน</th>
                                                        <th>ประเภทร้องเรียน</th>
                                                        <th>เพิ่มรายละเอียด</th> {{-- เพิ่มรายละเอียด+พร้อมเปลี่ยนสถานะ --}}
                                                </tr>

                                    </thead>
                                            <tbody>
                                                            @forelse ($item2 as $item2 )
                                                            <tr>
                                                                <td>{{$item2->topic}}</td>
                                                                <td>{{$item2->detail}}</td>
                                                                @if($item2->pic1== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item2->pic1)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                @if($item2->pic2== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item2->pic2)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                @if($item2->pic3== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item2->pic3)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                <td>{{$item2->complainant->name}}</td>
                                                                <td>{{$item2->problem_type->name}}</td>
                                                                <td> <a href="{{url('operation/'.$item2->id)}}" class="table-link text-info">
                                                                    เพิ่มรายละเอียด
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

            <h3>รายการที่ดำเนินการเสร็จสิ้น</h3>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                            <tr class="table-primary">
                                                <tr class="table-primary">

                                                        <th>หัวข้อ</th>
                                                        <th>รายละเอียด</th>
                                                        <th>รูปภาพ1</th>
                                                        <th>รูปภาพ2</th>
                                                        <th>รูปภาพ3</th>
                                                        <th>ผู้ร้องเรียน</th>
                                                        <th>ประเภทร้องเรียน</th>
                                                        <th>ดูรายละเอียด</th> {{-- เพิ่มรายละเอียด+พร้อมเปลี่ยนสถานะ --}}
                                                        </tr>
                                                        <tbody>
                                                            @forelse ($item3 as $item3 )
                                                            <tr>
                                                                <td>{{$item3->topic}}</td>
                                                                <td>{{$item3->detail}}</td>
                                                                @if($item3->pic1== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item3->pic1)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                @if($item2->pic2== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item3->pic2)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                @if($item3->pic3== null)
                                                                    <td>--</td>
                                                                @else
                                                                    <td>
                                                                        <a href="{{asset($item3->pic3)}}">คลิกดูรูป</a>
                                                                    </td>
                                                                @endif
                                                                <td>{{$item3->complainant->name}}</td>
                                                                <td>{{$item3->problem_type->name}}</td>
                                                                <td> <a href="{{url('operation/view/'.$item3->id)}}" class="table-link text-info">
                                                                    ดูรายละเอียด
                                                                 </a></td>

                                                                </tr>
                                                            @empty
                                                                <tr>
                                                                <td>ไม่มีข้อมูล</td>
                                                                </tr>

                                                            @endforelse
                                                        </tbody>
                                    </thead>

                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </div>

</x-app-layout>


