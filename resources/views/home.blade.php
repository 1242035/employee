@extends('admin.layout')

@section('content')

<div class="container">

    <div class="row">
        <div class="col-md-12">
            <div class="hero-unit" style="padding-bottom: 20px;">
                <div class="row">
                    <div class="col-md-5">
                        <img src="images/logo.png">
                    </div>

                    <div class="col-md-7">
                        <h2>Welcome to Employee Directory</h2>
                        <p>Employee Directory is a sample app that demonstrates how to build modern web applications using different frameworks. This version is built with <a href="http://laravel.com">Laravel</a> and
                        <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</p>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <h2>Author Information</h2>

                    <p>Name: Hoang Manh Cam</p>
                    <p>Student ID: 13020523</p>
                    <p>Email: cam@foobla.com</p>
                    <a href="http://facebook.com/saddest.of.sunday"><button class="btn btn-default"><i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook »</button></a>
                </div>
                <div class="col-md-4">
                    <h2>Get the Code</h2>

                    <p>The source code for this application is maintained in <a href="https://github.com/HoangLaravel/employee">this GitHub repository</a>. You can also find the Instructions for Downloading and Installing there. And any Issues and Pull Requests are greatly appreciated</p>

                    <p><a class="btn btn-default" href="https://github.com/HoangLaravel/employee">Download »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>App Info</h2>
                    <p>The Employee Directory use case is simple enough to be easily understandable. This app take very much effort to complete. So I hope I like it. If there are any errors during execution, please send me a message! Thanks!<p>
                    </p><p><a class="btn btn-default" href="#">Cheer! »</a></p>
                </div>
            </div>
        </div>
    </div>

    <hr>

</div>

@stop