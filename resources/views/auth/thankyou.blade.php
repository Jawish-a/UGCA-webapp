@extends('layouts.auth.master')

@section('content')
<div class="wrapper-page">

    <div class="card">
        <div class="card-body">

            <h3 class="text-center m-0">
                <a href="index" class="logo logo-admin"><img src="{{URL::asset('assets/images/logo.png')}}" height="160"
                        alt="logo"></a>
            </h3>

            <div class="p-3">
                <h4 class="text-muted font-18 m-b-5 text-center">Thank you !</h4>
                <p class="text-muted text-center">if you are a student or a tutor please use the app to login</p>

            </div>
        </div>
    </div>

    <div class="m-t-40 text-center">
        <p>© {{date('Y')}} UGCA. Crafted with <i class="mdi mdi-heart text-danger"></i> by UGCA Team</p>
    </div>

</div>
@endsection
