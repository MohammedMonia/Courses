@extends('layouts.application')
@section('content')
@include('blogs._alert')

<h1>This is my blog</h1>
              


<div class="row mt-5">
@foreach($blogs as $blog)
    
    <div class="col-md-4 mb-3">
        <div class="card">


            <div class="card-header">
                <a href="{{ route('blog_path', [$blog->id]) }}"> {{ Auth::user()->name }}|{{ $blog->title }} </a>
            </div>
            <div class="card-body">
                <a href="{{ route('blog_path' , [$blog->id]) }}">
                <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
                </a>
                {!! $blog->content !!} 
               
                
                
                
                
                            
                <br>
                <br>
                <br>
                <p class="lead">
                    Posted
                    {{ $blog->created_at->diffForHumans() }}
                </p>
                <a class="btn btn-outline-primary" href="{{ route('blog_path', [ $blog->id]) }}">View Post</a>
                
            </div>

        </div>
    </div>
    @endforeach
</div>

@endsection