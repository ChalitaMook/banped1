
@extends('layouts.bootstrap')



<x-app-layout>
    <h1>ข้อมูลหน่วยงาน</h1>
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
    </table>
</x-app-layout>


