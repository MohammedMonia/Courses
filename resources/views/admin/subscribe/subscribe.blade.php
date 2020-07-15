@extends('layouts.admin')

@section('title', 'Subscribe')


@section('content')

@include('admin._alert')
<div class="d-flex">
    <h1 class="h3 mb-4 text-gray-800">Subscribes Page</h1>
    
    </div>

<table class="table">
  <thead>
    <tr>
      
      <th>ID</th>
      <th>Name</th>
      <th>Email</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($subscribes as $subscribe)
    <tr>
      
      <td>{{ $subscribe->id }}</td>
      <td>{{ $subscribe->name }}</td>
      <td>{{ $subscribe->email }}</td>
      <td>
        <div class="d-flex">
          <form method="post" action="{{ route('subscribe.destroy', [$subscribe->id]) }}">
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