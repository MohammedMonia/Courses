@extends('layouts.admin')

@section('title', 'Edit')

@section('content')
    <div class="d-flex">
    <h1 class="h3 mb-4 text-gray-800">Edit Post</h1>
    
    </div>
    <form action="{{ route('update_blogs_path', [$blog->id]) }}" method="POST">
    @csrf
    @method('PUT')

        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror" value="{{$blog->title}}">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="contentt" name="content" rows="5" class="form-control @error('Content') is-invalid @enderror" >{{ $blog->content }}</textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content_description">Content Description</label>
            <textarea id="content_description" name="content_description" rows="5" class="form-control @error('content_description') is-invalid @enderror" >{{ $blog->content_description }}</textarea>
            @error('content_description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="video_title">video_title</label>
            <input type="text" name="video_title" class="form-control @error('video_title') is-invalid @enderror" value="{{$blog->video_title}}">
            @error('video_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="video_content">Content</label>
            <textarea id="video_content" name="video_content" rows="5" class="form-control @error('video_content') is-invalid @enderror" >{{ $blog->video_content }}</textarea>
            @error('video_content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="formgroup">
            <button type="submit" class="btn btn-outline-primary">Edit Blog Post</button>
        </div>

    </form>
@endsection




@section('js')
<script src="{{ asset('js/Trumbowyg/trumbowyg.min.js') }}"> </script>
<script>
    $('#contentt').trumbowyg();
    $('#video_content').trumbowyg();
    $('#content_description').trumbowyg();
</script>
@endsection

@section('css')
<link rel="stylesheet" href="{{ asset('js/trumbowyg/ui/trumbowyg.min.css') }}">
@endsection