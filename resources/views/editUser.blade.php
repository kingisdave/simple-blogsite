@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-10 col-md-8 mx-auto">
                <h1>Edit Blog Page</h1>
                <div class="card border-none shadow">
                    <div class="card-body">
                        <form class="form" method="POST" action="{{route('users.update', Auth::user()->id)}}" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                            <input type="text" name="name" value="{{ Auth::user()->name}}" class="form-control" placeholder="Blog Title"/>
                            </div>
                            <div class="form-group">
                                <input type="file" name="profileImage" class="form-control" placeholder="Blog Image"/>
                            </div>
                            <button type="submit" class="btn btn-primary">Update Profile</button>
                        </form>
                        <img src="/storage/profilepics/.{{ Auth::user()->profileImage}}" alt="profile" width="30" >
                        {{-- {!! Form::open([['url' => 'user/update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
                            {{-- {!! Form::open(['action' => ['HomeController@update', $user->id], 'method' => 'POST', 'enctype' => 'multipart/form-data']) !!} --}}
                            {{-- <div class="form-group">
                                {{Form::label('title', 'Name')}}
                                {{Form::text('name', $user->name, ['class' => 'form-control', 'placeholder' => 'Name'])}}
                            </div>
                        
                            <div class="form-group">
                                {{Form::file('profileImage')}}
                            </div>
                            {{Form::hidden('_method','PUT')}}
                            {{Form::submit('Submit', ['class' => 'btn btn-success'])}}
                        {!! Form::close() !!} --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection