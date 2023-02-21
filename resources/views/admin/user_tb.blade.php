@extends('layouts.bootstrap')

<style>
    body {
        background-color: #f6f6f6;
        margin-top: 20px;
    }

    .card {
        background-color: #fff;
        border-radius: 10px;
        border: none;
        position: relative;
        margin-bottom: 30px;
        box-shadow: 0 0.46875rem 2.1875rem rgba(90, 97, 105, 0.1), 0 0.9375rem 1.40625rem rgba(90, 97, 105, 0.1), 0 0.25rem 0.53125rem rgba(90, 97, 105, 0.12), 0 0.125rem 0.1875rem rgba(90, 97, 105, 0.1);
    }

    .card .card-header {
        border-bottom-color: #f9f9f9;
        line-height: 30px;
        -ms-grid-row-align: center;
        align-self: center;
        width: 100%;
        padding: 10px 25px;
        display: flex;
        align-items: center;
    }

    .card .card-header,
    .card .card-body,
    .card .card-footer {
        background-color: transparent;
        padding: 20px 25px;
    }

    .card-header:first-child {
        border-radius: calc(.25rem - 1px) calc(.25rem - 1px) 0 0;
    }

    .card-header {
        padding: .75rem 1.25rem;
        margin-bottom: 0;
        background-color: rgba(0, 0, 0, .03);
        border-bottom: 1px solid rgba(0, 0, 0, .125);
    }

    .table:not(.table-sm) thead th {
        border-bottom: none;
        background-color: #e9e9eb;
        color: #666;
        padding-top: 15px;
        padding-bottom: 15px;
    }

    .table .table-img img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
        border: 2px solid #bbbbbb;
        -webkit-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        -moz-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        -ms-box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        box-shadow: 5px 6px 15px 0px rgba(49, 47, 49, 0.5);
        text-shadow: 0 0 black;
    }

    .table .team-member-sm {
        width: 32px;
        -webkit-transition: all 0.25s ease;
        -o-transition: all 0.25s ease;
        -moz-transition: all 0.25s ease;
        transition: all 0.25s ease;
    }

    .table .team-member {
        position: relative;
        width: 30px;
        white-space: nowrap;
        border-radius: 1000px;
        vertical-align: bottom;
        display: inline-block;
    }

    .table .order-list li img {
        border: 2px solid #ffffff;
        box-shadow: 4px 3px 6px 0 rgba(0, 0, 0, 0.2);
    }

    .table .team-member img {
        width: 100%;
        max-width: 100%;
        height: auto;
        border: 0;
        border-radius: 1000px;
    }

    .rounded-circle {
        border-radius: 50% !important;
    }

    .table .order-list li+li {
        margin-left: -14px;
        background: transparent;
    }

    .avatar.avatar-sm {
        font-size: 12px;
        height: 30px;
        width: 30px;
    }

    .avatar {
        background: #6777ef;
        border-radius: 50%;
        color: #e3eaef;
        display: inline-block;
        font-size: 16px;
        font-weight: 300;
        margin: 0;
        position: relative;
        vertical-align: middle;
        line-height: 1.28;
        height: 45px;
        width: 45px;
    }

    .table .order-list li .badge {
        background: rgba(228, 222, 222, 0.8);
        color: #6b6f82;
        margin-bottom: 6px;
    }

    .badge {
        vertical-align: middle;
        padding: 7px 12px;
        font-weight: 600;
        letter-spacing: 0.3px;
        border-radius: 30px;
        font-size: 12px;
    }

    .progress-bar {
        display: -ms-flexbox;
        display: -webkit-box;
        display: flex;
        -ms-flex-direction: column;
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        flex-direction: column;
        -ms-flex-pack: center;
        -webkit-box-pack: center;
        justify-content: center;
        overflow: hidden;
        color: #fff;
        text-align: center;
        white-space: nowrap;
        background-color: #007bff;
        -webkit-transition: width .6s ease;
        transition: width .6s ease;
    }

    .bg-success {
        background-color: #54ca68 !important;
    }

    .bg-purple {
        background-color: #9c27b0 !important;
        color: #fff;
    }

    .bg-cyan {
        background-color: #10cfbd !important;
        color: #fff;
    }

    .bg-red {
        background-color: #f44336 !important;
        color: #fff;
    }

    .progress {
        -webkit-box-shadow: 0 0.4rem 0.6rem rgba(0, 0, 0, 0.15);
        box-shadow: 0 0.4rem 0.6rem rgba(0, 0, 0, 0.15);
    }
</style>


<x-app-layout>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />

    <div class="container rounded mt-5 ">
        <div class="row">
            <div class="col-12 col-sm-12 col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex">
                            <div class="p-2">
                                <h4> <b>ข้อมูลพนักงาน</b> </h4>
                            </div>
                            <div class="p-2">
                                <a class="btn btn-outline-primary rounded-pill" href="{{ url('/user_form') }}"
                                    role="button">เพิ่มข้อมูล</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive" id="proTeamScroll" tabindex="2"
                            style="height: 400px; overflow: hidden; outline: none;">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th><span>ไอดี</span></th>
                                        <th><span>ชื่อ</span></th>
                                        <th><span>อีเมล</span></th>
                                        <th><span>เบอร์โทร</span></th>
                                        <th><span>ตำแหน่ง</span></th>
                                        <th><span>แผนก</span></th>
                                        <th><span>ลบ</span></th>
                                        <th><span>แก้ไข</span></th>
                                        <th>&nbsp;</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($items as $item)
                                        <tr>
                                            <td>{{ $item->id }}</td>
                                            <td>{{ $item->name }}</td>
                                            <td>{{ $item->email }}</td>
                                            <td>{{ $item->phone_num }}</td>
                                            @if ($item->role == '0')
                                                <td>แอดมิน</td>
                                            @elseif($item->role == '1')
                                                <td>พนักงาน</td>
                                            @else
                                                <td>หัวหน้า</td>
                                            @endif
                                            </td>
                                            <td>{{ $item->agency->name }}</td>
                                            <td>
                                                <a href="{{ url('user_delete/' . $item->id) }}"
                                                    class="table-link text-info">
                                                    ลบ
                                                </a>

                                            </td>
                                            <td>
                                                <a href="{{ url('user_form_edit/' . $item->id) }}"
                                                    class="table-link danger">
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






    {{-- <h1>ข้อมูลพนักงาน</h1>
    <a href="{{ url('/user_form') }}">เพิ่มข้อมูล</a><br>
    <a href="{{ url('/redirects') }}">กลับ</a>
    <table class="table user-list">
        <thead>
            <tr class="table-primary">
                <th><span>ไอดี</span></th>
                <th><span>ชื่อ</span></th>
                <th><span>อีเมล</span></th>
                <th><span>เบอร์โทร</span></th>
                <th><span>ตำแหน่ง</span></th>
                <th><span>แผนก</span></th>
                <th><span>ลบ</span></th>
                <th><span>แก้ไข</span></th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone_num }}</td>
                    @if ($item->role == '0')
                        <td>แอดมิน</td>
                    @elseif($item->role == '1')
                        <td>พนักงาน</td>
                    @else
                        <td>หัวหน้า</td>
                    @endif
                    </td>
                    <td>{{ $item->agency->name }}</td>
                    <td>
                        <a href="{{ url('user_delete/' . $item->id) }}" class="table-link text-info">
                            ลบ
                        </a>

                    </td>
                    <td>
                        <a href="{{ url('user_form_edit/' . $item->id) }}" class="table-link danger">
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
</x-app-layout>
