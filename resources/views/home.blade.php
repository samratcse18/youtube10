@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Hi,{{Auth::user()->name}}
                    <span class="badge bg-success">Active Now</span>
                    <b style="float:right;">Total Users: <span class="badge bg-danger">{{count($users)}}</span></b>
                </div>

                <div class="card-body">
                   
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif -->
                    
                    <table class="table table-dark">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CREATE AT</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @php ($sl = 1)
                        @foreach ($users as $user )
                        <tr>
                        <th scope="row">{{$sl++}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{Carbon\Carbon::parse($user->created_at)->diffForHumans()}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
