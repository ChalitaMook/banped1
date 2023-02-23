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

    <div class="container card rounded mt-3">
        <div class="container-fluid">

            @forelse ( $item as $item )
                <div class="container">
                    <!-- Title -->
                    <div class="d-flex justify-content-between align-items-lg-center py-3 flex-column flex-lg-row">
                        <h2 class="h5 mb-3 mb-lg-0"><a href="../../pages/admin/customers.html" class="text-muted"><i
                                    class="bi bi-arrow-left-square me-2"></i></a> <b>รายละเอียด เรื่องร้องเรียน : {{$item->complaint->topic}}</b> </h2>

                    </div>


                    <!-- Main content -->
                    <div class="row rounded">
                        <div class="col-lg-8">
                            <div class="card mb-4">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <div class="mb-3">
                                                    <label class="form-label"><b>รายละเอียด: </b> </label>
                                                    <br>
                                                    {{$item->detail}}
                                                </div>
                                                <label class="form-label"><b>รูปภาพ :</b> </label>
                                                <br>
                                                @if($item->pic_op== null)
                                                    --
                                                @else
                                                    <a href="{{asset($item->pic_op)}}">คลิกดูรูป</a>
                                                @endif
                                                    <br>

                                            </div>
                                            <div class="mb-3">
                                                <label class="form-label"> <b>เจ้าหน้าที่ดำเนินการ :</b> </label>
                                                 {{$item->user->name}}
                                            </div>


                                        </div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                </div>
            @empty
                no data

            @endforelse
        </div>
    </div>

</x-app-layout>









