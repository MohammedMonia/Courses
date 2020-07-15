@extends('layouts.admin')

@section('title', 'Posts')

@section('content')

@include('admin._alert')

<div class="d-flex">
  <h1 class="h3 mb-4 text-gray-800">Posts</h1>
  <div class="ml-auto">
    <a href="{{ route('create_blogs_path') }}" class="btn btn-sm btn-outline-success">Create new</a>
  </div>
  
</div>

<table class="table">
  <thead>
    <tr>
      <th>Image</th>
      <th>ID</th>
      <th>UserId</th>
      <th>Title</th>
      <th>Content</th>
      <th>Created At</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($blogs as $blog)
    <tr>
      <td><img height="60" src="{{ $blog->image }}"></td>
      <td>{{ $blog->id }}</td>
      <td>{{ $blog->user_id }}</td>
      <td>{{ $blog->title }}</td>
      <td>{!! $blog->content !!}</td>
      <td>{{ $blog->created_at }}</td>
      <td>
        <div class="d-flex">
          <a class="btn btn-outline-primary btn-sm mr-1" href="{{ route('edit_blogs_path', [$blog->id]) }}">Edit</a>
          <form method="post" action="{{ route('delete_blogs_path', [$blog->id]) }}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn-outline-danger btn-sm delete">Delete</button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $blogs->links() }}

@endsection