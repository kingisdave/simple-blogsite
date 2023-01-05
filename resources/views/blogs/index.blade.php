@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Blogs Dashboard</h1>
        <div class="row">
            @if($blogs)
                @if(count($blogs) > 0)
                    @foreach ($blogs as $blog)
                        <div class="col-12">
                            <div class="card m-2 shadow">
                                <div class="card-body">
                                    <a href="/blogs/{{$blog->blog_id}}" class="text-dark"><h4>{{$blog->title}}</h4></a>
                                    <p>{{$blog->body}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12">
                        <div class="card m-2 shadow">
                            <div class="card-body">
                                <p>Nothing</p>
                            </div>
                        </div>
                    </div>
                @endif
            @endif   
        </div>
        {{-- <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        blog Holder Name
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        Total blog Balance
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        Main blog Balance
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        blog Title
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix">
                    <button class="float-left">blog Statement</button>
                    <button class="float-right">Check Details</button>
                </div>
            </div>
        </div> --}}
    </div>
@endsection