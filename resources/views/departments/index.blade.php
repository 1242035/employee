@extends('admin.layout')

@section('content')

<div class="container">
    <div class="row">
        <div class="col-md-6">
            <a href="/department/create"><button class="btn btn-success">New Department</button></a>
        </div>
    </div>
    <hr/>
    <h2>Departments</h2>
    <div class="row">
        <div class="col-md-12">
            <table class="table table-striped">
                <thead>
                <td><strong>Name</strong></td>
                <td><strong>Office Number</strong></td>
                <td><strong>Manager</strong></td>
                <td></td>
                </thead>
                <tbody>
                @foreach ($departments as $department)
                    <tr>
                        <td><a href="{{url('department/'.$department->id)}}" >{{$department->name}}</a></td>
                        <td>{{$department->office_number}}</td>
                        <td>{{$department->manager}}</td>
                        <td>
                            <a href="/department/{{$department->id}}"><button class="btn btn-danger">Del</button></a>
                            <a href="/department/{{$department->id}}/edit"><button class="btn btn-success">Edit</button></a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

@stop