@extends('layouts.bootstrap')


{{-- css เมนูรายการ  --}}
<style>
    body {
        background: #eee;
    }

    .card-box {
        position: relative;
        color: #fff;
        padding: 20px 10px 40px;
        margin: 20px 0px;
    }

    .card-box:hover {
        text-decoration: none;
        color: #f1f1f1;
    }

    .card-box:hover .icon i {
        font-size: 100px;
        transition: 1s;
        -webkit-transition: 1s;
    }

    .card-box .inner {
        padding: 5px 10px 0 10px;
    }

    .card-box h3 {
        font-size: 27px;
        font-weight: bold;
        margin: 0 0 8px 0;
        white-space: nowrap;
        padding: 0;
        text-align: left;
    }

    .card-box p {
        font-size: 15px;
    }

    .card-box .icon {
        position: absolute;
        top: auto;
        bottom: 5px;
        right: 5px;
        z-index: 0;
        font-size: 72px;
        color: rgba(0, 0, 0, 0.15);
    }

    .card-box .card-box-footer {
        position: absolute;
        left: 0px;
        bottom: 0px;
        text-align: center;
        padding: 3px 0;
        color: rgba(255, 255, 255, 0.8);
        background: rgba(0, 0, 0, 0.1);
        width: 100%;
        text-decoration: none;
    }

    .card-box:hover .card-box-footer {
        background: rgba(0, 0, 0, 0.3);
    }

    .bg-blue {
        background-color: #00c0ef !important;
    }

    .bg-green {
        background-color: #00a65a !important;
    }

    .bg-orange {
        background-color: #f39c12 !important;
    }

    .bg-red {
        background-color: #d9534f !important;
    }
</style>

{{-- ccs ตาราง --}}
<style>
    body {
        background: #dcdcdc;
        margin-top: 20px;
    }

    .widget-26 {
        color: #3c4142;
        font-weight: 400;
    }

    .widget-26 tr:first-child td {
        border: 0;
    }

    .widget-26 .widget-26-job-emp-img img {
        width: 35px;
        height: 35px;
        border-radius: 50%;
    }

    .widget-26 .widget-26-job-title {
        min-width: 200px;
    }

    .widget-26 .widget-26-job-title a {
        font-weight: 400;
        font-size: 0.875rem;
        color: #3c4142;
        line-height: 1.5;
    }

    .widget-26 .widget-26-job-title a:hover {
        color: #68CBD7;
        text-decoration: none;
    }

    .widget-26 .widget-26-job-title .employer-name {
        margin: 0;
        line-height: 1.5;
        font-weight: 400;
        color: #3c4142;
        font-size: 0.8125rem;
        color: #3c4142;
    }

    .widget-26 .widget-26-job-title .employer-name:hover {
        color: #68CBD7;
        text-decoration: none;
    }

    .widget-26 .widget-26-job-title .time {
        font-size: 12px;
        font-weight: 400;
    }

    .widget-26 .widget-26-job-info {
        min-width: 100px;
        font-weight: 400;
    }

    .widget-26 .widget-26-job-info p {
        line-height: 1.5;
        color: #3c4142;
        font-size: 0.8125rem;
    }

    .widget-26 .widget-26-job-info .location {
        color: #3c4142;
    }

    .widget-26 .widget-26-job-salary {
        min-width: 70px;
        font-weight: 400;
        color: #3c4142;
        font-size: 0.8125rem;
    }

    .widget-26 .widget-26-job-category {
        padding: .5rem;
        display: inline-flex;
        white-space: nowrap;
        border-radius: 15px;
    }

    .widget-26 .widget-26-job-category .indicator {
        width: 13px;
        height: 13px;
        margin-right: .5rem;
        float: left;
        border-radius: 50%;
    }

    .widget-26 .widget-26-job-category span {
        font-size: 0.8125rem;
        color: #3c4142;
        font-weight: 600;
    }

    .widget-26 .widget-26-job-starred svg {
        width: 20px;
        height: 20px;
        color: #fd8b2c;
    }

    .widget-26 .widget-26-job-starred svg.starred {
        fill: #fd8b2c;
    }

    .bg-soft-base {
        background-color: #e1f5f7;
    }

    .bg-soft-warning {
        background-color: #fff4e1;
    }

    .bg-soft-success {
        background-color: #d1f6f2;
    }

    .bg-soft-danger {
        background-color: #fedce0;
    }

    .bg-soft-info {
        background-color: #d7efff;
    }


    .search-form {
        width: 80%;
        margin: 0 auto;
        margin-top: 1rem;
    }

    .search-form input {
        height: 100%;
        background: transparent;
        border: 0;
        display: block;
        width: 100%;
        padding: 1rem;
        height: 100%;
        font-size: 1rem;
    }

    .search-form select {
        background: transparent;
        border: 0;
        padding: 1rem;
        height: 100%;
        font-size: 1rem;
    }

    .search-form select:focus {
        border: 0;
    }

    .search-form button {
        height: 100%;
        width: 100%;
        font-size: 1rem;
    }

    .search-form button svg {
        width: 24px;
        height: 24px;
    }

    .search-body {
        margin-bottom: 1.5rem;
    }

    .search-body .search-filters .filter-list {
        margin-bottom: 1.3rem;
    }

    .search-body .search-filters .filter-list .title {
        color: #3c4142;
        margin-bottom: 1rem;
    }

    .search-body .search-filters .filter-list .filter-text {
        color: #727686;
    }

    .search-body .search-result .result-header {
        margin-bottom: 2rem;
    }

    .search-body .search-result .result-header .records {
        color: #3c4142;
    }

    .search-body .search-result .result-header .result-actions {
        text-align: right;
        display: flex;
        align-items: center;
        justify-content: space-between;
    }

    .search-body .search-result .result-header .result-actions .result-sorting {
        display: flex;
        align-items: center;
    }

    .search-body .search-result .result-header .result-actions .result-sorting span {
        flex-shrink: 0;
        font-size: 0.8125rem;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select {
        color: #68CBD7;
    }

    .search-body .search-result .result-header .result-actions .result-sorting select option {
        color: #3c4142;
    }

    @media (min-width: 768px) and (max-width: 991.98px) {
        .search-body .search-filters {
            display: flex;
        }

        .search-body .search-filters .filter-list {
            margin-right: 1rem;
        }
    }

    .card-margin {
        margin-bottom: 1.875rem;
    }

    @media (min-width: 992px) {
        .col-lg-2 {
            flex: 0 0 16.66667%;
            max-width: 16.66667%;
        }
    }

    .card-margin {
        margin-bottom: 1.875rem;
    }

    .card {
        border: 0;
        box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -webkit-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -moz-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
        -ms-box-shadow: 0px 0px 10px 0px rgba(82, 63, 105, 0.1);
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #ffffff;
        background-clip: border-box;
        border: 1px solid #e6e4e9;
        border-radius: 8px;
    }
</style>



<x-app-layout>
    <div class="container card mt-3">
        <div class="d-flex justify-content-center mt-4 mb-4 ">
            <img src="{{ asset('/image/logo1.png') }}" width="500" alt="">
        </div>
    </div>

    <div class="container card mt-2">

        <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <div class="card-box rounded bg-blue">
                        <div class="inner">
                            <h3 class="text-center"> ร้องเรียนปัญหา </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-graduation-cap" aria-hidden="true"></i>
                        </div>
                        <a href="{{ url('/complaint_form') }}" class="card-box-footer">ร้องเรียน <i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-box rounded bg-green">
                        <div class="inner">
                            <h3 class="text-center"> ดูรายการร้องเรียน </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">ดูรายการร้องเรียน<i
                                class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-box rounded bg-orange">
                        <div class="inner">
                            <h3 class="text-center"> ประเมิน </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-user-plus" aria-hidden="true"></i>
                        </div>
                        <a href="#" class="card-box-footer">ประเมิน <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <div class="card-box rounded bg-red">
                        <div class="inner">
                            <h3 class="text-center"> ติดต่อเรา </h3>
                        </div>
                        <div class="icon">
                            <i class="fa fa-users"></i>
                        </div>
                        <a href="#" class="card-box-footer">ติดต่อ <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>

            {{-- <div class="row">
                <div class="col-lg-3 col-sm-6">
                    <a href="#">ตารางข้อมูลข้อร้องเรียน</a>
                </div>
            </div> --}}


            {{-- ส่วนเเสดงข้อมูล table --}}
            <div class="container card mt-3">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 card-margin">
                            <div class="card search-form">
                                <div class="card-body p-0">
                                    <form id="search-form">
                                        <div class="row">
                                            <div class="col-12">
                                                <div class="row no-gutters">
                                                    <div class="col-lg-3 col-md-3 col-sm-12 p-0">
                                                        <select class="form-control" id="exampleFormControlSelect1">
                                                                <option value="ทั้งหมด">ทั้งหมด</option>
                                                            @foreach ($item1 as $item1)
                                                                <option value="{{ $item1->id }}">{{ $item1->name }}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-lg-8 col-md-6 col-sm-12 p-0">
                                                        <input type="text" placeholder="Search..."
                                                            class="form-control" id="search" name="search">
                                                    </div>
                                                    <div class="col-lg-1 col-md-3 col-sm-12 p-0">
                                                        <button type="submit" class="btn btn-base">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="24"
                                                                height="24" viewBox="0 0 24 24" fill="none"
                                                                stroke="currentColor" stroke-width="2"
                                                                stroke-linecap="round" stroke-linejoin="round"
                                                                class="feather feather-search">
                                                                <circle cx="11" cy="11" r="8">
                                                                </circle>
                                                                <line x1="21" y1="21" x2="16.65"
                                                                    y2="16.65"></line>
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-12">
                            <div class="card card-margin">
                                <div class="card-body">
                                    <div class="row search-body">
                                        <div class="col-lg-12">
                                            <div class="search-result">
                                                <div class="result-header">
                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="records">ข้อมูลร้องเรียน: <b>1-20</b> of
                                                                <b>200</b>
                                                                ทั้งหมด</div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="result-actions">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>



                                                <div class="result-body">
                                                    <div class="table-responsive">
                                                        <table class="table widget-26">
                                                            <tbody>
                                                                <tr>
                                                                    <td>
                                                                        <div class="widget-26-job-emp-img">
                                                                            <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                                alt="Company" />
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="widget-26-job-title">
                                                                            <a href="#">Senior Software Engineer
                                                                                / Developer</a>
                                                                            <p class="m-0"><a href="#"
                                                                                    class="employer-name">Axiom
                                                                                    Corp.</a> <span
                                                                                    class="text-muted time">1 days
                                                                                    ago</span></p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="widget-26-job-info">
                                                                            <p class="type m-0">Full-Time</p>
                                                                            <p class="text-muted m-0">in <span
                                                                                    class="location">London, UK</span>
                                                                            </p>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="widget-26-job-salary">$ 50/hr</div>
                                                                    </td>
                                                                    <td>
                                                                        <div
                                                                            class="widget-26-job-category bg-soft-base">
                                                                            <i class="indicator bg-base"></i>
                                                                            <span>Software Development</span>
                                                                        </div>
                                                                    </td>
                                                                    <td>
                                                                        <div class="widget-26-job-starred">
                                                                            <a href="#">
                                                                                <svg xmlns="http://www.w3.org/2000/svg"
                                                                                    width="24" height="24"
                                                                                    viewBox="0 0 24 24" fill="none"
                                                                                    stroke="currentColor"
                                                                                    stroke-width="2"
                                                                                    stroke-linecap="round"
                                                                                    stroke-linejoin="round"
                                                                                    class="feather feather-star">
                                                                                    <polygon
                                                                                        points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2">
                                                                                    </polygon>
                                                                                </svg>
                                                                            </a>
                                                                        </div>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <nav class="d-flex justify-content-center">
                                        <ul class="pagination pagination-base pagination-boxed pagination-square mb-0">
                                            <li class="page-item">
                                                <a class="page-link no-border" href="#">
                                                    <span aria-hidden="true">«</span>
                                                    <span class="sr-only">Previous</span>
                                                </a>
                                            </li>
                                            <li class="page-item active"><a class="page-link no-border"
                                                    href="#">1</a></li>
                                            <li class="page-item"><a class="page-link no-border" href="#">2</a>
                                            </li>
                                            <li class="page-item"><a class="page-link no-border" href="#">3</a>
                                            </li>
                                            <li class="page-item"><a class="page-link no-border" href="#">4</a>
                                            </li>
                                            <li class="page-item">
                                                <a class="page-link no-border" href="#">
                                                    <span aria-hidden="true">»</span>
                                                    <span class="sr-only">Next</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>


    </div>





</x-app-layout>
