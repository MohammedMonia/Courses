@extends('layouts.application')


@section('content')
    <div class="row">
        <div class="col-md-12">
        <img src="{{ asset($blog->image) }}" alt="" class="card-img-top">
        <br>
        <br>
            <h3><span style="color:blue;">{{ Auth::user()->name }}</span>|{{ $blog->title }}</h3>
            <hr>
            <p class="lead">
                {!! $blog->content !!}

                <form action="{{ route('comments.store' ) }}" method="POST" id="commentForm">
                    @csrf
                    <label for="comment_body">comment</label>
                    <div class="d-flex">
                    <input value="{{$blog->id}}" style="display:none;" type="text" name="blog_id" class="form-control">
                    <input type="text" name="comment_body" class="form-control @error('comment_body') is-invalid @enderror" placeholder="write a comment ...">
                    @error('comment_body')
                    <p class="text-danger">{{ $message }}</p>
                    @enderror
                    <p></p>

                    <button type="submit" class="btn btn-outline-primary">Comment</button>
                    </div>
                    
                </form> 
                <div class="cc">
                @foreach($blog->comments as $comment) 
                <p>{{ $comment->comment_body }}</p> 
                @endforeach 
                </div>
                         
                
                         
            </p>
            <a class="btn btn-outline-secondary" href="{{ route('blogs_path') }}">Back</a>
            <a class="btn btn-outline-info" href="{{ route('edit_blogs_path', [$blog->id]) }}">Edit</a>
            <form action="{{ route('delete_blogs_path', [$blog->id]) }}" method="POST">
                @csrf
                @method('DELETE')
            <button class="btn btn-outline-danger mt-1" type="submit">Delete</button>
            </form>
        </div>
       
    </div>



@endsection

@section('js')


<script>

    $(document).ready(function(){

        $('#commentForm').submit(function(e){
            
            e.preventDefault();

            let data = $(this).serialize();

            $.ajax({
                url : "{{ route('comments.store' ) }}",
                type: 'POST',
                data: data,
                success: function(res){
                    $('.cc').prepend('<p>'+res+'</p>');
                    $('input[name=comment_body]').text('');
                }
            });

        })

    });

</script>


@endsection
