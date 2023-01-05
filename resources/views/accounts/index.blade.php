@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <h1>Account Dashboard</h1>
        <div class="row">
            @if($accounts)
                @if(count($accounts) > 0)
                    @foreach ($accounts as $account)
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
                    @endforeach
                @else
                    <div class="col-lg-6 col-md-6 col-12">
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
                        Account Holder Name
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        Total Account Balance
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        Main Account Balance
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="card m-2 shadow">
                    <div class="card-body">
                        Account Title
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="clearfix">
                    <button class="float-left">Account Statement</button>
                    <button class="float-right">Check Details</button>
                </div>
            </div>
        </div> --}}
    </div>
@endsection