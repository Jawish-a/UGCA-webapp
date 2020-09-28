@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    {{-- page title --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Groups</h4>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item active">
                        List of all Groups
                    </li>
                </ol>
            </div>
        </div>
    </div>
    <!-- end row -->
    <div class="row">
        @foreach ($groups as $group)
        <div class="col-md-6 col-lg-6 col-xl-3">
            <div class="card m-b-30">
                <div class="card-body">
                    <h4 class="card-title font-16 mt-0 text-center">{{$group->name}}</h4>
                </div>
                <img class="img-fluid" src="assets/images/small/img-4.jpg" alt="Card image cap">
                <div class="card-body">
                    <p class="card-text">{{$group->description}}</p>
                    <a href="{{route('group.show',$group->id)}}" class="btn btn-primary btn-block waves-effect waves-light">Manage</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection
