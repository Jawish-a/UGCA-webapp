@extends('layouts.admin.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Roles</h4>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- create role form --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Create a new Role</h4>
                    <p class="text-muted m-b-30">Use the form below to create a role and then you can set the permission
                        and assign users to the new role</p>
                    <form action="{{action('RoleController@store')}}" method="post">
                        @csrf
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" name="name" type="text" value="" id="name">
                            </div>
                        </div>
                        <div class="form-group row mb-0 pt-3">
                            <div class="col-md-6">
                                <button type="submit" class="btn btn-primary btn-block waves-effect waves-light mr-1">
                                    Submit
                                </button>
                            </div>
                            <div class="col-md-6">
                                <a class="btn btn-secondary btn-block waves-effect text-light">
                                    Cancel
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        {{-- list of roles  --}}
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="mt-0 header-title">Striped rows</h4>
                    <p class="text-muted m-b-30">Use <code>.table-striped</code> to add zebra-striping to any table row
                        within the <code>&lt;tbody&gt;</code>.</p>

                    <div class="table-responsive">
                        <table class="table table-striped mb-0">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Role Name</th>
                                    <th>Number of users</th>
                                    <th>Options</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $role)
                                <tr>
                                    <th scope="row">{{$role->id}}</th>
                                    <td>{{$role->name}}</td>
                                    <td>778</td>
                                    <td>
                                        <a class="btn btn-outline-primary btn-block" href="">Permissions</a>
                                        <a class="btn btn-outline-info btn-block" href="">List of users</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
