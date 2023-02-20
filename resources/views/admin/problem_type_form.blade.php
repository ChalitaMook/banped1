{{-- extends('layouts.bootstrap')

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
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-box no-header clearfix">
                        <div class="main-box-body clearfix">
                            <div class="table-responsive">
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
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/user_1.jpg" alt="">
                                                <a href="#" class="user-link">สมชาย รักดี</a>
                                                <span class="user-subhead">Member</span>
                                            </td>
                                            <td>2013/08/12</td>
                                            <td class="text-center">
                                                <span class="label label-default">pending</span>
                                            </td>
                                            <td>
                                                <a href="#">marlon@brando.com</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link text-warning">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link text-info">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/user_3.jpg" alt="">
                                                <a href="#" class="user-link">สมหมาย</a>
                                                <span class="user-subhead">Admin</span>
                                            </td>
                                            <td>2013/08/12</td>
                                            <td class="text-center">
                                                <span class="label label-success">Active</span>
                                            </td>
                                            <td>
                                                <a href="#">marlon@brando.com</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link  text-warning">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link  text-info">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <img src="https://bootdey.com/img/Content/user_2.jpg" alt="">
                                                <a href="#" class="user-link">สมมี</a>
                                                <span class="user-subhead">Member</span>
                                            </td>
                                            <td>2013/08/12</td>
                                            <td class="text-center">
                                                <span class="label label-danger">inactive</span>
                                            </td>
                                            <td>
                                                <a href="#">marlon@brando.com</a>
                                            </td>
                                            <td style="width: 20%;">
                                                <a href="#" class="table-link  text-warning">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-search-plus fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link  text-info">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-pencil fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                                <a href="#" class="table-link danger">
                                                    <span class="fa-stack">
                                                        <i class="fa fa-square fa-stack-2x"></i>
                                                        <i class="fa fa-trash-o fa-stack-1x fa-inverse"></i>
                                                    </span>
                                                </a>
                                            </td>
                                        </tr>
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



{{-- ฟอร์มเพิ่มข้อมูลประเภทปัญหา
<a href="{{url('/problem_type')}}">กลับ</a>

<form action="{{url('/problem_type_form_save')}}" method="post">
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

    <label for="name">ชื่อประเภท</label>
    <input type="text" name="name" id="name" value="{{old('name')}}">
    <br>
    <label for="ag_id">หน่วยงานที่ดูแล</label>
        <select class="form-select" aria-label="ag_id" id="ag_id" name="ag_id">
                @foreach ($items as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
        </select>
    <br>


    <br>
    <input type="submit" value="บันทึก">

</form> --}} 


