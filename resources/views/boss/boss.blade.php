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

<x-app-layout>

    <div class="container card mt-3">
        <div class="d-flex justify-content-center mt-4 mb-4 ">
            <img src="{{ asset('/image/logo1.png') }}" width="500" alt="">
        </div>
    </div>

    <div class="container card mt-2">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css"
            integrity="sha256-2XFplPlrFClt0bIdPgpz8H7ojnk10H69xRqd9+uTShA=" crossorigin="anonymous" />

        <div class="container-xl px-4 mt-4">
            <!-- Account page navigation-->
            <nav class="nav nav-borders">
                <a class="nav-link active ms-0" href="https://www.bootdey.com/snippets/view/bs5-edit-profile-account-details"
                    target="__blank">รายงาน</a>
                <a class="nav-link " href="https://www.bootdey.com/snippets/view/bs5-profile-billing-page"
                    target="__blank">ข้อร้องเรียน</a>
                <a class="nav-link" href="https://www.bootdey.com/snippets/view/bs5-profile-security-page"
                    target="__blank">เเบบประเมิน</a>
            </nav>
            <hr class="mt-0 mb-4">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 1-->
                    <div class="card h-100 border-start-lg border-start-primary">
                        <div class="card-body">
                            <div class="small text-muted">สรุปผลรายงาน</div>
                            <div class="h3">การประเมิน:การทำงาน</div>
                            <a class="btn btn-outline-dark" href="#" role="button">ดูรายงาน</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 2-->
                    <div class="card h-100 border-start-lg border-start-secondary">
                        <div class="card-body">
                            <div class="small text-muted">สรุปข้อร้องเรียน</div>
                            <div class="h3">ดูข้อร้องเรียน</div>
                            <a class="btn btn-outline-dark" href="#" role="button">ดูรายงาน</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <!-- Billing card 3-->
                    <div class="card h-100 border-start-lg border-start-success">
                        <div class="card-body">
                            <div class="small text-muted">สรุปผลการจัดการ</div>
                            <div class="h3 d-flex align-items-center">ดูการจัดการ</div>
                            <a class="btn btn-outline-dark" href="#" role="button">ดูรายงาน</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Payment methods card-->
            <div class="card card-header-actions mb-4">
                <div class="card-header">
                    ข้อร้องเรียน:สถานะ
                </div>
                <div class="card-body px-0">
                    <!-- Payment method 1-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-cc-visa fa-2x cc-color-visa"></i>
                            <div class="ms-4">
                                <div class="small">Visa ending in 1234</div>
                                <div class="text-xs text-muted">Expires 04/2024</div>
                            </div>
                        </div>
                        <div class="ms-4 small">
                            <div class="badge bg-light text-dark me-3">Default</div>
                            <a href="#!">Edit</a>
                        </div>
                    </div>
                    <hr>
                    <!-- Payment method 2-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-cc-mastercard fa-2x cc-color-mastercard"></i>
                            <div class="ms-4">
                                <div class="small">Mastercard ending in 5678</div>
                                <div class="text-xs text-muted">Expires 05/2022</div>
                            </div>
                        </div>
                        <div class="ms-4 small">
                            <a class="text-muted me-3" href="#!">Make Default</a>
                            <a href="#!">Edit</a>
                        </div>
                    </div>
                    <hr>
                    <!-- Payment method 3-->
                    <div class="d-flex align-items-center justify-content-between px-4">
                        <div class="d-flex align-items-center">
                            <i class="fab fa-cc-amex fa-2x cc-color-amex"></i>
                            <div class="ms-4">
                                <div class="small">American Express ending in 9012</div>
                                <div class="text-xs text-muted">Expires 01/2026</div>
                            </div>
                        </div>
                        <div class="ms-4 small">
                            <a class="text-muted me-3" href="#!">Make Default</a>
                            <a href="#!">Edit</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Billing history card-->
            <div class="card mb-4">
                <div class="card-header">Billing History</div>
                <div class="card-body p-0">
                    <!-- Billing history table-->
                    <div class="table-responsive table-billing-history">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="border-gray-200" scope="col">Transaction ID</th>
                                    <th class="border-gray-200" scope="col">Date</th>
                                    <th class="border-gray-200" scope="col">Amount</th>
                                    <th class="border-gray-200" scope="col">Status</th>
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
            </div>
        </div>
    </div>


</x-app-layout>
