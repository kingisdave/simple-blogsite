@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-11 mx-auto">
                <a href="\blogs" class="btn btn-primary btn-sm">Back</a>
                @if ($blog)
                    <div class="card shadow m-2">
                        <div class="card-body">
                            <h1>{{$blog->title}}</h1>
                            <small>{{$blog->created_at}}</small>
                            <p>{{$blog->body}}</p>
                        </div>
                    </div>
                @endif
                <div class="clearfix">
                    <a href="/blogs/{{$blog->blog_id}}/edit" class="btn btn-secondary float-left">Edit</a>
                    {{-- <a href="{{route('blogs.destroy', $blog->blog_id)}}" class="btn btn-danger float-right">Delete Post</a> --}}
                    <span class="btn btn-sm btn-outline-dark" onclick="var a = <?php echo 'deleting'.$blog->blog_id ?>; a.submit() ">Delete Post</span>
                        <form method="POST" id="{{'deleting'.$blog->blog_id}}" action="{{route('blogs.destroy', $blog->blog_id)}}">
                            @csrf
                            @method('DELETE')
                        </form>
                </div>
            </div>
        </div>
    </div>
@endsection