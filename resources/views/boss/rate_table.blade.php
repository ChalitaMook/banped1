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


            <h1>รายการประเมิน</h1>
            <hr>

            <div style="background-color: #fffbfb">
                <h4>คะแนนเฉลี่ยแต่ละด้าน</h4>
                <h5>คะแนนด้านที่1:{{$sec1}} คะแนน</h5>
                <h5>คะแนนด้านที่2:{{$sec2}} คะแนน</h5>
                <h5>คะแนนด้านที่3:{{$sec3}} คะแนน</h5>
                <h5>คะแนนด้านที่4:{{$sec4}} คะแนน</h5>
                <h5>คะแนนด้านที่5:{{$sec5}} คะแนน</h5>
            </div>
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
                                                        <th>ประเภทข้อร้องเรียน</th>
                                                        <th>คะแนนด้านที่1</th>
                                                        <th>คะแนนด้านที่2</th>
                                                        <th>คะแนนด้านที่3</th>
                                                        <th>คะแนนด้านที่4</th>
                                                        <th>คะแนนด้านที่5</th>
                                                        <th>ความคิดเห็นเพิ่มเติม</th>
                                                        </tr>
                                                    </tr>
                                    </thead>
                                    <tbody>

                                        @forelse ($items as $item )
                                        <tr>
                                            <td>{{$item->complaint->topic}}</td>
                                            <td>{{$item->complaint->problem_type->name}}</td>
                                            <td>{{$item->section1}}</td>
                                            <td>{{$item->section2}}</td>
                                            <td>{{$item->section3}}</td>
                                            <td>{{$item->section4}}</td>
                                            <td>{{$item->section5}}</td>
                                            <td>{{$item->comment}}</td>
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

