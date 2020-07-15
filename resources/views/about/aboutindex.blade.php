@extends('layouts.application')


@section('content')
@foreach($abouts as $about)

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="{{$about->image}}" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      
      <h1 class="w3-center">{{$about->about_title}}</h1><br>
      
      <p class="w3-large w3-text-grey w3-hide-medium">{!!$about->about_body!!}</p>
    </div>
  </div>
  
  <hr>
@endforeach

@endsection
  
@section('csss')
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
@endsection

</body>
</html>
