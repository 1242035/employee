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
                    <h2>Try It</h2>

                    <p>Enter a few characters in the Search Box in the upper right corner of the screen, and select an employee. In
                        the Employee view, you can navigate up and down the Org Chart by clicking either the Manager link,
                        or one of the Direct Reports in the sidebar on the right of the screen.</p>

                    <p><a class="btn btn-default" href="#">Show Me »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Get the Code</h2>

                    <p>The source code for this application is maintained in <a href="https://github.com/ccoenraets/backbone-directory">this GitHub repository</a>. The repository includes several adapters to use the application with different data persistence solutions: in-memory store, REST API, REST with JSONP, Node.js, MongoDB, etc.</p>

                    <p><a class="btn btn-default" href="#">Download »</a></p>
                </div>
                <div class="col-md-4">
                    <h2>Get More</h2>
                    <p>The Employee Directory use case is simple enough to be easily understandable. It's also not entirely trivial and provides a good playground to test frameworks in a real-life context. Other versions of the application built with other frameworks are available on the author's blog.</p><p>
                    </p><p><a class="btn btn-default" href="#">Visit the Blog</a></p>
                </div>
            </div>
        </div>
    </div>

    <hr>

</div>

@stop