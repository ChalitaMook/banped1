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

    .border-start-warning {
        border-left-color: #fbe462 !important;
    }

    .border-start-lg {
        border-left-width: 0.25rem !important;
    }

    .h-100 {
        height: 100% !important;
    }
</style>

<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Welcome {{Auth::user()->name}} หน่วยงานที่ดูแล : {{Auth::user()->agency->name}}
        </h2>
    </x-slot>
    <div class="container card mt-2">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
            integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <hr class="mt-0 mb-4">
            <div class="row">

                    <div class="col-lg-4 mb-12">
                            <div class="card h-100 border-start-lg border-start-primary">
                                <div class="card-body">
                                    <div class="h4">รายการที่รับเรื่องแล้ว</div>
                                    <div class="h3">{{$itemscount1}}</div>
                                    <div class="h3">เรื่อง</div>
                                </div>
                            </div>
                    </div>
                    <div class="col-lg-4 mb-12">
                        <div class="card h-100 border-start-lg border-start-warning">
                            <div class="card-body">
                                <div class="h4">รายการที่กำลังดำเนินการ</div>
                                <div class="h3">{{$itemscount2}}</div>
                                <div class="h3">เรื่อง</div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-12">
                        <div class="card h-100 border-start-lg border-start-success">
                            <div class="card-body">
                                <div class="h4">รายการที่ดำเนินการเสร็จสิ้น</div>
                                <div class="h3">{{$itemscount3}}</div>
                                <div class="h3">เรื่อง</div>
                            </div>
                        </div>
                </div>





            </div>
        <br>


        </div>
    </div>


</x-app-layout>


