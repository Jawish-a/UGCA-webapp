@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    {{-- page title --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Dashboard</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        Welcome to UGCA Dashboard
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->

    {{-- cards --}}
    <div class="row">
        {{-- students --}}
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-account-multiple float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Students</h6>
                        <h4 class="mb-4">1,587</h4>
                        <span class="badge badge-info"> +11% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- groups --}}
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-buffer float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Groups</h6>
                        <h4 class="mb-4">$46,782</h4>
                        <span class="badge badge-danger"> -29% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- chats --}}
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-wechat float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Average Price</h6>
                        <h4 class="mb-4">$15.9</h4>
                        <span class="badge badge-warning"> 0% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
        {{-- admins --}}
        <div class="col-xl-3 col-md-6">
            <div class="card mini-stat bg-primary">
                <div class="card-body mini-stat-img">
                    <div class="mini-stat-icon">
                        <i class="mdi mdi-briefcase-check float-right"></i>
                    </div>
                    <div class="text-white">
                        <h6 class="text-uppercase mb-3">Product Sold</h6>
                        <h4 class="mb-4">1890</h4>
                        <span class="badge badge-info"> +89% </span> <span class="ml-2">From previous period</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end row -->


</div>
@endsection
