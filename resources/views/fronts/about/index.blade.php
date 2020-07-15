@extends('fronts.appfront')

@section('content')

@foreach($abouts as $about)
<div class="main-wrapper">
  
	    <article class="about-section py-5">
		    <div class="container">
            <figure><img class="img-fluid" src="{{ $about->image }}" alt="image"></figure>
			    <h2 class="title mb-3">{{ $about->about_title }}</h2>
			    <p>{!! $about->about_body !!}</p>
			    <h2 class="mt-5">{{ $about->aboutBlog_title }}</h2>
			    <p>{!! $about->aboutBlog_body !!}</p>
            </div>
        </article>
</div>

@endforeach
@endsection

