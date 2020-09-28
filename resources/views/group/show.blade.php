@extends('layouts.admin.master')
@section('css')
{{-- DataTables --}}
<link href="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
{{-- Responsive datatable examples --}}
<link href="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.css')}}" rel="stylesheet" type="text/css" />
<link href="{{asset('assets/plugins/ion-rangeslider/ion.rangeSlider.skinModern.css')}}" rel="stylesheet"
    type="text/css" />

@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <h4 class="page-title">Students</h4>
            </div>
        </div>
    </div>
    <div class="row">
        {{-- group details --}}
        <div class="col-6">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Group Details</h4>
                    <p class="text-muted m-b-30 font-14">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Group Name</label>
                        <div class="col-sm-10">
                            <input disabled class="form-control" type="text" value="{{$group->name}}" id="example-text-input">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="example-text-input" class="col-sm-2 col-form-label">Group Description</label>
                        <div class="col-sm-10">
                            <textarea class="form-control" disabled cols="30" rows="10">{{$group->description}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- group members --}}
        <div class="col-6">
            <div class="card m-b-20">
                <div class="card-body">

                    <h4 class="mt-0 header-title">Buttons example</h4>
                    <p class="text-muted m-b-30 font-14">The Buttons extension for DataTables
                        provides a common set of options, API methods and styling to display
                        buttons on a page that will interact with a DataTable. The core library
                        provides the based framework upon which plug-ins can built.
                    </p>

                    <table id="datatable-buttons" class="table table-striped table-bordered dt-responsive nowrap"
                        style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Student ID</th>
                                <th>Options</th>
                            </tr>
                        </thead>


                        <tbody>
                            @foreach ($group->users as $student)
                            <tr>
                                <td>{{$student->name}}</td>
                                <td>{{$student->student_id}}</td>
                                <td><a href="#" class="btn btn-block btn-primary">edit</a></td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

@section('script')
{{-- Required datatable js --}}
<script src="{{asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/dataTables.bootstrap4.min.js')}}"></script>
{{-- Buttons examples --}}
<script src="{{asset('assets/plugins/datatables/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/jszip.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/pdfmake.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/vfs_fonts.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.html5.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.print.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/buttons.colVis.min.js')}}"></script>
{{-- Responsive examples --}}
<script src="{{asset('assets/plugins/datatables/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('assets/plugins/datatables/responsive.bootstrap4.min.js')}}"></script>

{{-- Datatable init js --}}
<script src="{{asset('assets/pages/datatables.init.js')}}"></script>

@endsection
