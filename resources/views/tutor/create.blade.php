@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    {{-- page title --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Add New Tutor</h4>
            </div>
        </div>
    </div>
    {{-- Cards --}}
    <form action="{{action('TutorController@store')}}" method="post">
        @csrf
        <div class="row">
            {{-- form --}}
            <div class="col-md-9">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">New Tutor Account</h4>
                        {{-- tutor name --}}
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="" required id="name">
                            </div>
                        </div>
                        {{-- tutor email --}}
                        <div class="form-group row">
                            <label for="email" class="col-sm-2 col-form-label">Email</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="email" name="email" value="" required id="email">
                            </div>
                        </div>
                        {{-- tutor password --}}
                        <div class="form-group row">
                            <label for="password" class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password" value="" required
                                    id="password">
                            </div>
                        </div>
                        {{-- verify password --}}
                        <div class="form-group row">
                            <label for="password-confirm" class="col-sm-2 col-form-label">retype password</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="password" name="password-confirm" value="" required
                                    id="password-confirm">
                            </div>
                        </div>
                        {{-- group admin --}}
                        <div class="form-group row">
                            <label for="groups" class="col-sm-2 col-form-label">Gorup Admin</label>
                            <div class="col-sm-10">
                                <select multiple class="form-control" name="groups[]" id="groups">
                                    @foreach ($groups as $group)
                                    <option value="{{$group->id}}">{{$group->name}}</option>
                                    @endforeach
=                                </select>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- save options --}}
            <div class="col-md-3">
                <div class="card m-b-30">
                    <h4 class="card-header font-16 mt-0">Featured</h4>
                    <div class="card-body">
                        <button class="btn btn-primary btn-block waves-effect" type="submit">Save</button>
                        <a href="#" class="btn btn-danger btn-block waves-effect">Cancel</a>
                    </div>
                </div>
            </div>
        </div>
    </form>

</div>
@endsection
