@extends('layouts.admin')

@section('title', 'About')

@section('content')

@include('admin._alert')

<div class="d-flex">
  <h1 class="h3 mb-4 text-gray-800">About Page</h1>
  <div class="ml-auto">
    <a href="{{ route('about.create') }}" class="btn btn-sm btn-outline-success">Create About</a>
  </div>
  
</div>

<table class="table">
  <thead>
    <tr>
      <th>Image</th>
      <th>ID</th>
      <th>About Me Title</th>
      <th>About Me Body</th>
      <th>About Blog Title</th>
      <th>About Blog Body</th>
      <th>Created At</th>
      <th></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($abouts as $about)
    <tr>
      <td><img height="60" src="{{ $about->image }}"></td>
      <td>{{ $about->id }}</td>
      <td>{{ $about->about_title }}</td>
      <td>{!! $about->about_body !!}</td>
      <td>{{ $about->aboutBlog_title }}</td> 
      <td>{!! $about->aboutBlog_body !!}</td>
      <td>{{ $about->created_at }}</td>
      <td>
        <div class="d-flex">
          <a class="btn btn-outline-primary btn-sm mr-1" href="{{ route('about.edit', [$about->id]) }}">Edit</a>
          <form method="post" action="{{ route('about.destroy', [$about->id]) }}">
            @method('delete')
            @csrf
            <button type="submit" class="btn btn btn-outline-danger btn-sm delete"><i class="fa fa-trash"></i></button>
          </form>
        </div>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection