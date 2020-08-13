
@extends('fronts.appfront')



@section('content')
@include('fronts._alert')
    
    <div class="main-wrapper">
	    <section class="cta-section theme-bg-light py-5">
		    <div class="container text-center">
			    <h2 class="heading">Welcome To<a href="#" style="text-decoration-line: none;"> Courses Profile</a>, I Hope To You Best Time</h2>
			    <div class="intro">Subscribe and get notification of my latest courses in your inbox.</div>
			    <form action="{{ route('subscribe.store' ) }}" method="POST" class="signup-form form-inline justify-content-center pt-3">
				@csrf                                  
                    <div class="form-group">                  
                        <label class="sr-only" for="name">Your name</label>
                        <input type="text" id="semail" name="name" class="form-control mr-md-1 semail" placeholder="Enter your name" value="{{ old('name') }}">
						          
                        <label class="sr-only" for="email">Your email</label>
						<input type="email" id="semail" name="email" class="form-control mr-md-1 semail @error('email') is-invalid @enderror"" placeholder="Enter your email" value="{{ old('email') }}">
						                       
                		<button type="submit" class="btn btn-primary ml-auto " >Subscribe</button>
					</div>
					@error('email')
						<p class="text-danger ml-auto mr-5 mr-5">{{ $message }}</p>
						@enderror
				</form>
               
		    </div><!--//container-->
	    </section>
	    <section class="blog-list px-3 py-5 p-md-5">
		@foreach($blogs as $blog)
		    <div class="container">
			    <div class="item mb-5">
				    <div class="media">
					    <img class="mr-3 img-fluid post-thumb d-none d-md-flex" src="{{$blog->image}}" alt="image">
					    <div class="media-body">
						    <h3 class="title mb-1"><a href="{{ route('blog_path', [$blog->id]) }}">{{ $blog->title }}</a></h3>
						    <div class="meta mb-1"><span class="date">Published {{ $blog->created_at->diffForHumans() }}</span></div>
						    <div class="intro">{!! $blog->content !!}</div>
						    <a class="more-link" href="{{ route('blog_path', [$blog->id]) }}">Read more &rarr;</a>
					    </div><!--//media-body-->
				    </div><!--//media-->
				</div><!--//item-->
			</div>
			
			@endforeach
			    
			    
			    <nav class="blog-nav nav nav-justified my-5">
				{{ $blogs->links() }}	
				</nav>
				
		    </div>
        </section>
        
@endsection
	    

<script>
	function myFunction(){
		if (confirm(onclick)){
			alert('Welcome... Your subscribe is succesfully!');
		}
		
	}
        	
</script>
