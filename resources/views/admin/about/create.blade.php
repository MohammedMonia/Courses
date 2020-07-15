@extends('layouts.admin')

@section('content')
    <form action="{{ route('about.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf

        <h3 class="mt-2">Create About</h3>

        <div class="form-group">
            <label for="about_title">About Title</label>
            <input type="text" name="about_title" class="form-control @error('about_title') is-invalid @enderror">
            @error('about_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="about_body">About Body</label>
            <textarea id="about_body" name="about_body" rows="5" class="form-control @error('about_body') is-invalid @enderror"></textarea>
            @error('about_body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="aboutBlog_title">About Blog Title</label>
            <input type="text" name="aboutBlog_title" class="form-control @error('aboutBlog_title') is-invalid @enderror">
            @error('aboutBlog_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="aboutBlog_body">About Blog Body</label>
            <textarea id="aboutBlog_body" name="aboutBlog_body" rows="5" class="form-control @error('aboutBlog_body') is-invalid @enderror"></textarea>
            @error('aboutBlog_body')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <input type="file" name="files" class="form-control @error('files') is-invalid @enderror">
            @error('files')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="formgroup">
            <button type="submit" class="btn btn-outline-primary">Add About</button>
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