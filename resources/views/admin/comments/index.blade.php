@extends('layouts.admin')

@section('title', 'Comments')

@section('content')

@include('admin._alert')



<div class="d-flex">
  <h1 class="h3 mb-4 text-gray-800">Comments Page</h1>
  
  
</div>

<table class="table">
  <thead>
    <tr>
      <th>ID</th>
      <th>Blog Id</th>
      <th>Comment Body</th>
      <th>Created At</th>        
    </tr>
  </thead>
  <tbody>
    @foreach ($comments as $comment)
    <tr>
      
      <td>{{ $comment->id }}</td>
      <td>{{ $comment->blog_id }}</td>
      <td>{{ $comment->comment_body }}</td>
      <td>{{ $comment->created_at }}</td>
      
      <td>
        <div class="d-flex">
          <form method="post" action="{{ route('comments.destroy', [$comment->id]) }}">
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


@endsection