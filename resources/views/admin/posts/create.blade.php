@extends('layouts.admin')

@section('content')
    <form action="{{ route('store_blogs_path') }}" method="POST" enctype="multipart/form-data" >
    @csrf

        <h3 class="mt-2">Create blog post</h3>
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control @error('title') is-invalid @enderror">
            @error('title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content">Content</label>
            <textarea id="contentt" name="content" rows="5" class="form-control @error('content') is-invalid @enderror"></textarea>
            @error('content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="content_description">Content Description</label>
            <textarea id="content_description" name="content_description" rows="5" class="form-control @error('content_description') is-invalid @enderror"></textarea>
            @error('content_description')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="form-group">
            <label for="video_title">Video Title</label>
            <input type="text" name="video_title" class="form-control @error('video_title') is-invalid @enderror">
            @error('video_title')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="video_content">Video Content</label>
            <textarea id="video_content" name="video_content" rows="5" class="form-control @error('video_content') is-invalid @enderror"></textarea>
            @error('video_content')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="video_path">Video Path</label>
            <input type="text" name="video_path" class="form-control @error('video_path') is-invalid @enderror">
            @error('video_title')
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
            <button type="submit" class="btn btn-outline-primary">Add Blog Post</button>
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