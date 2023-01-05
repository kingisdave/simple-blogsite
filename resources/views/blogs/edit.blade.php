@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 mx-auto">
                <h1>Edit Blog Page</h1>
                <div class="card border-none shadow">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{route('blogs.update', $specificBlog->blog_id)}}">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <input type="text" name="title" value="{{$specificBlog->title}}" class="form-control" placeholder="Blog Title"/>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="body" placeholder="Insert Body">
                                    {{$specificBlog->body}}
                                </textarea>
                            </div>
                            <div class="form-group">
                                <input type="file" name="blogImage" value="{{$specificBlog->blogImage}}" class="form-control" placeholder="Blog Image"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Add Blog</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection