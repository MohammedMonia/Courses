@extends('layouts.admin')

@section('title', 'edit')

@section('content')

    <div class="d-flex">
    <h1 class="h3 mb-4 text-gray-800">Edit About</h1>
    
    </div>
    <form action="{{ route('about.update', [$about->id]) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="about_title">About Title</label>
            <input type="text" name="about_title" class="form-control @error('about_title') is-invalid @enderror" value="{{$about->about_title}}">
            @error('about_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="about_body">About Body</label>
            <textarea id="about_body" name="about_body" rows="5" class="form-control @error('about_body') is-invalid @enderror" >{{ $about->about_body }}</textarea>
            @error('about_body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="aboutBlog_title">About Blog Title</label>
            <input type="text" name="aboutBlog_title" class="form-control @error('aboutBlog_title') is-invalid @enderror" value="{{$about->aboutBlog_title}}">
            @error('aboutBlog_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="aboutBlog_body">About Blog Body</label>
            <textarea id="aboutBlog_body" name="aboutBlog_body" rows="5" class="form-control @error('aboutBlog_body') is-invalid @enderror" >{!! $about->aboutBlog_body !!}</textarea>
            @error('aboutBlog_body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="formgroup">
            <button type="submit" class="btn btn-outline-primary">Edit About</button>
        </div>

    </form>
@endsection




@section('js')
<script src="{{ asset('js/Trumbowyg/trumbowyg.min.js') }}"> </script>
<script>
    $('#about_body').trumbowyg();
    $('#aboutBlog_body').trumbowyg();
</script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('js/trumbowyg/ui/trumbowyg.min.css') }}">
@endsection