@extends('blog.master')

@section('content')

  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">

        <h1>{{ config('blog.title') }}</h1>
        <h5>Page {{ $posts->currentPage() }} of {{ $posts->lastPage() }}</h5>
        <hr>
         <ul>
            @foreach ($posts as $post)
                <li>
                    <a href="/blog/{{ $post->slug }}">{{ $post->title }}</a>
                    <em>({{ $post->published_at->format('M jS Y g:ia') }})</em>
                    <p>
                        {{ str_limit($post->content) }}
                    </p>
                </li>
            @endforeach
        </ul>
        <hr>
        {!! $posts->render() !!}
      </div>
    </div>
  </div>

@stop