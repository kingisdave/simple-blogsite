@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Account Dashboard</h1>
        <div class="row">
            <div class="col-12">
                <a href="/accounts" class="btn btn-primary shadow" >Back to Accounts</a>
            </div>
        </div>
        <div class="row">
            @if($account)
                <div class="col-lg-6 col-md-6 col-12">
                    <a href="/accounts/{{$account->id}}">
                        <div class="card m-2 shadow">
                            <div class="card-body">
                                <h5>{{$account->type}}</h5>
                                <h2 class="text-right">${{$account->balance}}</h2>
                            </div>
                        </div>
                    </a>
                </div>
            @endif   
        </div>
       
    </div>
@endsection