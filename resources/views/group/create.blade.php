@extends('layouts.admin.master')
@section('content')

<div class="container-fluid">

    {{-- page title --}}
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Create New Group</h4>
            </div>
        </div>
    </div>
    {{-- Cards --}}
    <form action="{{action('GroupController@store')}}" method="post">
        @csrf
        <div class="row">
            {{-- form --}}
            <div class="col-md-9">
                <div class="card m-b-20">
                    <div class="card-body">
                        <h4 class="mt-0 header-title">Group Details</h4>
                        <div class="form-group row">
                            <label for="name" class="col-sm-2 col-form-label">Name</label>
                            <div class="col-sm-10">
                                <input class="form-control" type="text" name="name" value="" required id="name">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="description" class="col-sm-2 col-form-label">description</label>
                            <div class="col-sm-10">
                                <textarea id="description" required class="form-control" required name="description" rows="5"></textarea>
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
