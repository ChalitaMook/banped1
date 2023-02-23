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
                            <li class="nav-item"><h2>รายการประเมิน</h2></li>
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
                                                        <th>รายละเอียดการดำเนินการ</th>
                                                        <th>ประเมิน</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($item as $item )
                                                    <tr>
                                                        <td>{{$item->topic}}</td>
                                                        <td> <a href="{{url('/complainant/operation/view/'.$item->id)}}" class="table-link text-info">
                                                            ดูรายละเอียด
                                                         </a></td>
                                                         <td> <a href="{{url('rate_form/'.$item->id)}}" class="table-link text-info">
                                                            ประเมิน
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

            <br>

        </div>



    </div>


<br>


</x-complainant-layout>

