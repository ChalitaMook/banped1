
@extends('layouts.bootstrap')



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


