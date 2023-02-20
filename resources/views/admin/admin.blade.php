<x-app-layout>
    @extends('layouts.bootstrap')

    <style>
        body {
            margin-top: 20px;
            background-color: #f2f6fc;
            color: #69707a;
        }

        .img-account-profile {
            height: 10rem;
        }

        .rounded-circle {
            border-radius: 50% !important;
        }

        .card {
            box-shadow: 0 0.15rem 1.75rem 0 rgb(33 40 50 / 15%);
        }

        .card .card-header {
            font-weight: 500;
        }

        .card-header:first-child {
            border-radius: 0.35rem 0.35rem 0 0;
        }

        .card-header {
            padding: 1rem 1.35rem;
            margin-bottom: 0;
            background-color: rgba(33, 40, 50, 0.03);
            border-bottom: 1px solid rgba(33, 40, 50, 0.125);
        }

        .form-control,
        .dataTable-input {
            display: block;
            width: 100%;
            padding: 0.875rem 1.125rem;
            font-size: 0.875rem;
            font-weight: 400;
            line-height: 1;
            color: #69707a;
            background-color: #fff;
            background-clip: padding-box;
            border: 1px solid #c5ccd6;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            border-radius: 0.35rem;
            transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
        }

        .nav-borders .nav-link.active {
            color: #0061f2;
            border-bottom-color: #0061f2;
        }

        .nav-borders .nav-link {
            color: #69707a;
            border-bottom-width: 0.125rem;
            border-bottom-style: solid;
            border-bottom-color: transparent;
            padding-top: 0.5rem;
            padding-bottom: 0.5rem;
            padding-left: 0;
            padding-right: 0;
            margin-left: 1rem;
            margin-right: 1rem;
        }

        .fa-2x {
            font-size: 2em;
        }

        .table-billing-history th,
        .table-billing-history td {
            padding-top: 0.75rem;
            padding-bottom: 0.75rem;
            padding-left: 1.375rem;
            padding-right: 1.375rem;
        }

        .table> :not(caption)>*>*,
        .dataTable-table> :not(caption)>*>* {
            padding: 0.75rem 0.75rem;
            background-color: var(--bs-table-bg);
            border-bottom-width: 1px;
            box-shadow: inset 0 0 0 9999px var(--bs-table-accent-bg);
        }

        .border-start-primary {
            border-left-color: #0061f2 !important;
        }

        .border-start-secondary {
            border-left-color: #6900c7 !important;
        }

        .border-start-success {
            border-left-color: #00ac69 !important;
        }

        .border-start-lg {
            border-left-width: 0.25rem !important;
        }

        .h-100 {
            height: 100% !important;
        }
    </style>


    <style>
        body {
            margin-top: 20px;
            background: #eee;
        }

        /* My Account */
        .payments-item img.mr-3 {
            width: 47px;
        }

        .order-list .btn {
            border-radius: 2px;
            min-width: 121px;
            font-size: 13px;
            padding: 7px 0 7px 0;
        }

        .osahan-account-page-left .nav-link {
            padding: 18px 20px;
            border: none;
            font-weight: 600;
            color: #535665;
        }

        .osahan-account-page-left .nav-link i {
            width: 28px;
            height: 28px;
            background: #535665;
            display: inline-block;
            text-align: center;
            line-height: 29px;
            font-size: 15px;
            border-radius: 50px;
            margin: 0 7px 0 0px;
            color: #fff;
        }

        .osahan-account-page-left .nav-link.active {
            background: #f3f7f8;
            color: #282c3f !important;
        }

        .osahan-account-page-left .nav-link.active i {
            background: #282c3f !important;
        }

        .osahan-user-media img {
            width: 90px;
        }

        .card offer-card h5.card-title {
            border: 2px dotted #000;
        }

        .card.offer-card h5 {
            border: 1px dotted #daceb7;
            display: inline-table;
            color: #17a2b8;
            margin: 0 0 19px 0;
            font-size: 15px;
            padding: 6px 10px 6px 6px;
            border-radius: 2px;
            background: #fffae6;
            position: relative;
        }

        .card.offer-card h5 img {
            height: 22px;
            object-fit: cover;
            width: 22px;
            margin: 0 8px 0 0;
            border-radius: 2px;
        }

        .card.offer-card h5:after {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-bottom: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            bottom: 0;
        }

        .card.offer-card h5:before {
            border-left: 4px solid transparent;
            border-right: 4px solid transparent;
            border-top: 4px solid #daceb7;
            content: "";
            left: 30px;
            position: absolute;
            top: 0;
        }

        .payments-item .media {
            align-items: center;
        }

        .payments-item .media img {
            margin: 0 40px 0 11px !important;
        }

        .reviews-members .media .mr-3 {
            width: 56px;
            height: 56px;
            object-fit: cover;
        }

        .order-list img.mr-4 {
            width: 70px;
            height: 70px;
            object-fit: cover;
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
            border-radius: 2px;
        }

        .osahan-cart-item p.text-gray.float-right {
            margin: 3px 0 0 0;
            font-size: 12px;
        }

        .osahan-cart-item .food-item {
            vertical-align: bottom;
        }

        .h1,
        .h2,
        .h3,
        .h4,
        .h5,
        .h6,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #000000;
        }

        .shadow-sm {
            box-shadow: 0 .125rem .25rem rgba(0, 0, 0, .075) !important;
        }

        .rounded-pill {
            border-radius: 50rem !important;
        }

        a:hover {
            text-decoration: none;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{Auth::user()->name}}
        </h2>
    </x-slot>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
        integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

    <div class="container card  px-4 mt-4">
        
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-lg-4 mb-4">
                <!-- Billing card 1-->
                <div class="card h-100 border-start-lg border-start-primary">
                    <div class="card-body">
                        <a class="nav-link ms-0 h3" href="{{ url('/problem_type') }}"
                        target="__blank">ข้อมูลประเภทข้อร้องเรียน</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 2-->
                <div class="card h-100 border-start-lg border-start-secondary">
                    <div class="card-body">
                        <a class="nav-link ms-0 h3" href="{{ url('/user') }}"
                        target="__blank">ข้อมูลพนักงาน</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <!-- Billing card 3-->
                <div class="card h-100 border-start-lg border-start-success">
                    <div class="card-body">
                        <a class="nav-link ms-0 h3" href="{{ url('/agency') }}"
                        target="__blank">ข้อมูลหน่วยงาน</a>

                    </div>
                </div>
            </div>
        </div>
        <!-- Payment methods card-->
        {{-- <div class="card card-header-actions mb-4">
            <div class="card-header">
                ตัวกรอกรายการ
                <button class="btn btn-sm btn-primary" type="button">รายงาน วัน/เดือน/ปี</button>
            </div>
            <div class="card-body px-0">
                <!-- Payment method 1-->
                <div class="d-flex align-items-center justify-content-between px-4">
                    <div class="d-flex align-items-center">

                        <div class="ms-4">
                            <div class="small">สรุปเดือน มกราคม</div>
                            <div class="text-xs text-muted">1/1/2023</div>
                        </div>
                    </div>
                    <div class="ms-4 small">
                        <a href="#!">ดู</a>
                    </div>
                </div>
                <hr>
                <!-- Payment method 2-->
                <div class="d-flex align-items-center justify-content-between px-4">
                    <div class="d-flex align-items-center">
                        <div class="ms-4">
                            <div class="small">สรุปเดือน กุมภาพันธ์</div>
                            <div class="text-xs text-muted">1/2/2023</div>
                        </div>
                    </div>
                    <div class="ms-4 small">
                        <a href="#!" class="text-primary">ใหม่</a>
                        <a href="#!" class="text-primary">ดู</a>

                    </div>
                </div>
                <hr>
                <!-- Payment method 3-->
            </div>
        </div> --}}
        <!-- Billing history card-->
       {{--  <div class="card mb-4">
            <div class="card-header">รายงานผล</div>
            <div class="card-body p-0">
                <!-- Billing history table-->
                <div class="table-responsive table-billing-history">
                    <table class="table mb-0">
                        <thead>
                            <tr>
                                <th class="border-gray-200" scope="col">ข้อมูลประเภทข้อร้องเรียน</th>
                                <th class="border-gray-200" scope="col">ดำเนินการเสร็จสิ้น</th>
                                <th class="border-gray-200" scope="col">คะเเนนการประเมิน</th>
                                <th class="border-gray-200" scope="col">สรุปเดือน</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>#39201</td>
                                <td>06/15/2021</td>
                                <td>$29.99</td>
                                <td><span class="badge bg-light text-dark">Pending</span></td>
                            </tr>
                            <tr>
                                <td>#38594</td>
                                <td>05/15/2021</td>
                                <td>$29.99</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>#38223</td>
                                <td>04/15/2021</td>
                                <td>$29.99</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                            <tr>
                                <td>#38125</td>
                                <td>03/15/2021</td>
                                <td>$29.99</td>
                                <td><span class="badge bg-success">Paid</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div> --}}
    </div>




</x-app-layout>


{{-- <div class="container card border mt-5">
        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">

        <div class="container mt-5">
            <div class="row">
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-archive text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">24</h5>
                            <p class="text-muted mb-0">ข้อมูลพนักงาน</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-th text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">18</h5>
                            <p class="text-muted mb-0">ข้อมูลประเภทข้อร้องเรียน</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-file text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">06</h5>
                            <p class="text-muted mb-0">ข้อมูลหน่วยงาน</p>
                        </div>
                    </div>
                </div>

                <div class="col-xl-3 col-md-6">
                    <div class="card bg-pattern">
                        <div class="card-body">
                            <div class="float-right">
                                <i class="fa fa-file text-primary h4 ml-3"></i>
                            </div>
                            <h5 class="font-size-20 mt-0 pt-1">06</h5>
                            <p class="text-muted mb-0">จัดการสถานะข้อร้องเรียน</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- end row -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive project-list">
                                <table class="table project-table table-centered table-nowrap">
                                    <thead>
                                        <tr>
                                            <th scope="col">#</th>
                                            <th scope="col">หัวข้อ</th>
                                            <th scope="col">หัวข้อที่ร้องเรียน</th>
                                            <th scope="col">สถานะ</th>
                                            <th scope="col">จัดการ</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <th scope="row">1</th>
                                            <td>เก็บขยะ</td>
                                            <td>02/5/2019</td>
                                            <td>
                                                <span class="text-success font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i>ดำเนินการเสร็จสิ้น</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Reggie James">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member" data-toggle="tooltip"
                                                        data-placement="top" title=""
                                                        data-original-title="Gerald Mayberry">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">100%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit"> <i
                                                            class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">2</th>
                                            <td>ไฟฟ้าดับมาดูด่วน</td>
                                            <td>04/6/2019</td>
                                            <td>
                                                <span class="text-primary font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> กำลังดำเนินการ</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Deborah Mixon">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Scott Jessie">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">78%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 78%;" aria-valuenow="78" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">3</th>
                                            <td>Multipurpose Landing Template</td>
                                            <td>06/6/2019</td>
                                            <td>
                                                <span class="text-success font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Completed</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Neil Wing">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Stanley Barber">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Jack Krier">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">100%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">4</th>
                                            <td>Blog Template Design</td>
                                            <td>07/5/2019</td>
                                            <td>
                                                <span class="text-success font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Completed</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Reggie James">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Gerald Mayberry">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">100%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">5</th>
                                            <td>Brand logo design</td>
                                            <td>08/6/2019</td>
                                            <td>
                                                <span class="text-primary font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Pending</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Deborah Mixon">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Scott Jessie">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">54%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 54%;" aria-valuenow="54" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">6</th>
                                            <td>Redesign - Landing page</td>
                                            <td>10/6/2019</td>
                                            <td>
                                                <span class="text-primary font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Pending</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Neil Wing">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Stanley Barber">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Jack Krier">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">41%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 41%;" aria-valuenow="41" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <th scope="row">7</th>
                                            <td>Redesign - Dashboard</td>
                                            <td>12/5/2019</td>
                                            <td>
                                                <span class="text-success font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Completed</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Reggie James">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">100%</span></p>
                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">8</th>
                                            <td>Landing page Design</td>
                                            <td>13/6/2019</td>
                                            <td>
                                                <span class="text-primary font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Pending</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Deborah Mixon">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Scott Jessie">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">84%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-primary" role="progressbar"
                                                        style="width: 84%;" aria-valuenow="84" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>

                                        <tr>
                                            <th scope="row">9</th>
                                            <td>Multipurpose Landing Template</td>
                                            <td>15/6/2019</td>
                                            <td>
                                                <span class="text-success font-12"><i
                                                        class="mdi mdi-checkbox-blank-circle mr-1"></i> Completed</span>
                                            </td>
                                            <td>
                                                <div class="team">
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Neil Wing">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>

                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Stanley Barber">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                    <a href="javascript: void(0);" class="team-member"
                                                        data-toggle="tooltip" data-placement="top" title=""
                                                        data-original-title="Roger Drake">
                                                        <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                            class="rounded-circle avatar-xs" alt="" />
                                                    </a>
                                                </div>
                                            </td>
                                            <td>
                                                <p class="mb-0">Progress<span class="float-right">100%</span></p>

                                                <div class="progress mt-2" style="height: 5px;">
                                                    <div class="progress-bar bg-success" role="progressbar"
                                                        style="width: 100%;" aria-valuenow="100" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </td>

                                            <td>
                                                <div class="action">
                                                    <a href="#" class="text-success mr-4" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Edit">
                                                        <i class="fa fa-pencil h5 m-0"></i></a>
                                                    <a href="#" class="text-danger" data-toggle="tooltip"
                                                        data-placement="top" title="" data-original-title="Close">
                                                        <i class="fa fa fa-remove h5 m-0"></i></a>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <!-- end project-list -->

                            <div class="pt-3">
                                <ul class="pagination justify-content-end mb-0">
                                    <li class="page-item disabled">
                                        <a class="page-link" href="#" tabindex="-1"
                                            aria-disabled="true">Previous</a>
                                    </li>
                                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item active"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#">Next</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end row -->
        </div>
    </div>
</div> --}}


{{-- <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                    hello admin
                    {{ Auth::user()->name }}
                    <br>
                    <a href="{{ url('/user') }}">ข้อมูลพนักงาน</a><br>
                    <a href="{{ url('/problem_type') }}">ข้อมูลประเภทข้อร้องเรียน</a><br>
                    <a href="{{ url('/agency') }}">ข้อมูลหน่วยงาน</a><br>

                </div>
            </div>
        </div>
    </div> --}}
