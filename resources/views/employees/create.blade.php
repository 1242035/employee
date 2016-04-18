@extends('admin.layout')

@section('content')
    <div class="container">
        <div class="row page-title-row">
            <div class="col-md-12">
                <h3>Employees <small>&raquo; Create New Employee</small></h3>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">New Employee</h3>
                    </div>
                    <div class="panel-body">

                        @include('admin.partials.errors')
                        @include('admin.partials.success')

                        <form class="form-horizontal" enctype="multipart/form-data" role="form" method="POST" action="/employees">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">

                            <div class="form-group">
                                <label for="name" class="col-md-3 control-label">Employee Name</label>
                                <div class="col-md-8">
                                    <input type="text" class="form-control" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="department" class="col-md-3 control-label">Department</label>
                                <div class="col-md-8">
                                    <select class="form-control" id="department" name="department">
                                        @foreach ($departments as $department)
                                            <option value="{{ $department->id }}">{{ $department->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="job_title" class="col-md-3 control-label">Job Title</label>
                                <div class="col-md-8">
                                    <input type="text" id="job_title" class="form-control" name="job_title">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="cellphone" class="col-md-3 control-label">CellPhone</label>
                                <div class="col-md-8">
                                    <input type="text" id="cellphone" class="form-control" name="cellphone">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email" class="col-md-3 control-label">Email</label>
                                <div class="col-md-8">
                                    <input type="text" id="email" class="form-control" name="email">
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="col-md-3 control-label">Photo</label>
                                <div class="col-md-8">
                                    <input type="file" id ="photo" class="form-control" name="photo">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary btn-md">
                                    <i class="fa fa-plus-circle"></i>
                                    &nbsp; Add New Department
                                </button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

@stop