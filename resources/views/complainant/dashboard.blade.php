@extends('layouts.bootstrap')

<style>
    body {
        background: #f3f3f3;
        margin-top: 20px;
        color: #616f80;
    }

    .card {
        border: none;
        margin-bottom: 24px;
        -webkit-box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
        box-shadow: 0 0 13px 0 rgba(236, 236, 241, .44);
    }

    .avatar-xs {
        height: 2.3rem;
        width: 2.3rem;
    }
</style>

<x-complainant-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ Auth::guard('complainant')->user()->name }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                {{-- <div class="p-6 text-gray-900">
                    <br>
                    <a href="{{ url('/profile1') }}">โปรไฟล์</a>
                    <br>
                    <a href="{{ url('/complaint_form') }}">ร้องเรียนปัญหา</a>
                    <br>
                    <a href="{{ url('/complaint_table') }}">ดูรายการร้องเรียน</a>
                    <br>
                    <a href="{{ url('/rate_table') }}">ประเมิน</a>
                </div> --}}


                <div class="container mt-3">
                    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
                        rel="stylesheet">

                    <div class="container d-flex justify-content-center mt-3">
                        <img src="https://www.banped.go.th/uploaded/banner/14/4dabbed400110084229b5cb8b548840f.png" alt="" width="500">
                    </div>
                    


                    <div class="container mt-3">
                        <div class="container card ">
                            <div class="row mt-3">
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-pattern">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="fa fa-user text-primary h4 ml-3"></i>
                                            </div>
                                            <a href="{{ url('/profile1') }}">โปรไฟล์</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-pattern">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="fa fa-file text-primary h4 ml-3"></i>
                                            </div>
                                            <a href="{{ url('/complaint_form') }}">ร้องเรียนปัญหา</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-md-6">


                                    
                                    <div class="card bg-pattern">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="fa fa-file text-primary h4 ml-3"></i>
                                            </div>
                                            <a href="{{ url('/complaint_table') }}">ดูรายการร้องเรียน</a>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="col-xl-3 col-md-6">
                                    <div class="card bg-pattern">
                                        <div class="card-body">
                                            <div class="float-right">
                                                <i class="fa fa-file text-primary h4 ml-3"></i>
                                            </div>
                                            <a href="{{ url('/rate_table') }}">ประเมิน</a>
                                        </div>
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
                                                        <th scope="col">Projects</th>
                                                        <th scope="col">Start Date</th>
                                                        <th scope="col">Status</th>
                                                        <th scope="col">Team</th>
                                                        <th scope="col">Progress</th>
                                                        <th scope="col">Action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <th scope="row">1</th>
                                                        <td>New admin Design</td>
                                                        <td>02/5/2019</td>
                                                        <td>
                                                            <span class="text-success font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Completed</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Reggie James">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Gerald Mayberry">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">100%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-success" role="progressbar"
                                                                    style="width: 100%;" aria-valuenow="100"
                                                                    aria-valuemin="0" aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">2</th>
                                                        <td>Landing page Design</td>
                                                        <td>04/6/2019</td>
                                                        <td>
                                                            <span class="text-primary font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Pending</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Deborah Mixon">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Scott Jessie">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">78%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-primary"
                                                                    role="progressbar" style="width: 78%;"
                                                                    aria-valuenow="78" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">3</th>
                                                        <td>Multipurpose Landing Template</td>
                                                        <td>06/6/2019</td>
                                                        <td>
                                                            <span class="text-success font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Completed</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Neil Wing">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Stanley Barber">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Jack Krier">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">100%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 100%;"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">4</th>
                                                        <td>Blog Template Design</td>
                                                        <td>07/5/2019</td>
                                                        <td>
                                                            <span class="text-success font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Completed</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Reggie James">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar8.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Gerald Mayberry">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">100%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 100%;"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">5</th>
                                                        <td>Brand logo design</td>
                                                        <td>08/6/2019</td>
                                                        <td>
                                                            <span class="text-primary font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Pending</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Deborah Mixon">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Scott Jessie">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">54%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-primary"
                                                                    role="progressbar" style="width: 54%;"
                                                                    aria-valuenow="54" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">6</th>
                                                        <td>Redesign - Landing page</td>
                                                        <td>10/6/2019</td>
                                                        <td>
                                                            <span class="text-primary font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Pending</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Neil Wing">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Stanley Barber">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Jack Krier">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">41%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-primary"
                                                                    role="progressbar" style="width: 41%;"
                                                                    aria-valuenow="41" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <th scope="row">7</th>
                                                        <td>Redesign - Dashboard</td>
                                                        <td>12/5/2019</td>
                                                        <td>
                                                            <span class="text-success font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Completed</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar6.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Reggie James">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar7.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">100%</span></p>
                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 100%;"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">8</th>
                                                        <td>Landing page Design</td>
                                                        <td>13/6/2019</td>
                                                        <td>
                                                            <span class="text-primary font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Pending</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Deborah Mixon">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Scott Jessie">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar1.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">84%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-primary"
                                                                    role="progressbar" style="width: 84%;"
                                                                    aria-valuenow="84" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <tr>
                                                        <th scope="row">9</th>
                                                        <td>Multipurpose Landing Template</td>
                                                        <td>15/6/2019</td>
                                                        <td>
                                                            <span class="text-success font-12"><i
                                                                    class="mdi mdi-checkbox-blank-circle mr-1"></i>
                                                                Completed</span>
                                                        </td>
                                                        <td>
                                                            <div class="team">
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Neil Wing">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>

                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title=""
                                                                    data-original-title="Stanley Barber">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                                <a href="javascript: void(0);" class="team-member"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Roger Drake">
                                                                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png"
                                                                        class="rounded-circle avatar-xs"
                                                                        alt="" />
                                                                </a>
                                                            </div>
                                                        </td>
                                                        <td>
                                                            <p class="mb-0">Progress<span
                                                                    class="float-right">100%</span></p>

                                                            <div class="progress mt-2" style="height: 5px;">
                                                                <div class="progress-bar bg-success"
                                                                    role="progressbar" style="width: 100%;"
                                                                    aria-valuenow="100" aria-valuemin="0"
                                                                    aria-valuemax="100"></div>
                                                            </div>
                                                        </td>

                                                        <td>
                                                            <div class="action">
                                                                <a href="#" class="text-success mr-4"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Edit"> <i
                                                                        class="fa fa-pencil h5 m-0"></i></a>
                                                                <a href="#" class="text-danger"
                                                                    data-toggle="tooltip" data-placement="top"
                                                                    title="" data-original-title="Close"> <i
                                                                        class="fa fa fa-remove h5 m-0"></i></a>
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
                                                <li class="page-item active"><a class="page-link"
                                                        href="#">2</a></li>
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

            </div>
        </div>
    </div>





</x-complainant-layout>
