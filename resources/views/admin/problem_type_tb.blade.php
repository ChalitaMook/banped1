
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

            <h1>ฟอร์มเพิ่มข้อมูลประเภทปัญหา</h1>
            <a class="btn btn-primary" href="{{url('/problem_type_form')}}">เพิ่มข้อมูล</a><br>

            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
                                <table class="table user-list">
                                    <thead>
                                            <tr class="table-primary">
                                                    <th>ไอดี</th>
                                                    <th>ชื่อประเภท</th>
                                                    <th>หน่วยงานที่ดูแล</th>
                                                    <th>ลบ</th>
                                                    <th>แก้ไข</th>
                                                    </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($items as $item )
                                        <tr>
                                            <td>{{$item->id}}</td>
                                            <td>{{$item->name}}</td>
                                            <td>{{$item->agency->name}}</td>
                                            <td>
                                                <a href="{{url('problem_type_delete/'.$item->id)}}" class="table-link text-info">
                                                   ลบ
                                                </a>

                                            </td>
                                            <td>
                                                 <a href="{{url('problem_type_form_edit/'.$item->id)}}" class="table-link danger">
                                                   แก้ไข
                                                </a>
                                            </td>
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

</x-app-layout>


{{-- <h1>ข้อมูลหน่วยงาน</h1>
<a href="{{url('/problem_type_form')}}">เพิ่มข้อมูล</a><br>
<a href="{{url('/redirects')}}">กลับ</a>
<table >
    <thead>
        <tr>
        <th>ไอดี</th>
        <th>ชื่อประเภท</th>
        <th>หน่วยงานที่ดูแล</th>
        <th>ลบ</th>
        <th>แก้ไข</th>
        </tr>
    </thead>
    <tbody>
        @forelse ($items as $item )
        <tr>
            <td>{{$item->id}}</td>
            <td>{{$item->name}}</td>
            <td>{{$item->agency->name}}</td>
            <td>
                <a href="{{url('problem_type_delete/'.$item->id)}}" class="table-link text-info">
                   ลบ
                </a>

            </td>
            <td>
                 <a href="{{url('problem_type_form_edit/'.$item->id)}}" class="table-link danger">
                   แก้ไข
                </a>
            </td>
        </tr>
        @empty
            <tr>
            <td>ไม่มีข้อมูล</td>
            </tr>

        @endforelse
    </tbody>
</table> --}}
