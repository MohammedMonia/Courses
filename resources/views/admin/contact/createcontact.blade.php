@extends('layouts.application')

@section('content')
    <form action="{{ route('contact.store') }}" method="POST" enctype="multipart/form-data" >
    @csrf

        <h3 class="mt-2">Create Contact</h3>
        <div class="form-group">
            <label for="country">Adderss</label>
            <input type="text" name="country" class="form-control @error('country') is-invalid @enderror">
            @error('country')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
        <label for="email">Email address</label>
        <input type="email" name="email" class="form-control" id="email" placeholder="name@example.com">
            @error('email')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>

        <div class="form-group">
            <label for="phone">Phone</label>
            <input type="phone" name="phone" class="form-control @error('phone') is-invalid @enderror">
            @error('phone')
            <p class="text-danger">{{ $message }}</p>
            @enderror
        </div>


        <div class="formgroup">
            <button type="submit" class="btn btn-outline-primary">Add Contact</button>
        </div>
    </form>
@endsection




