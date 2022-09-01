@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">All Category
                    
                </div>

                <div class="card-body">
                   
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif -->
                    @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <strong>{{session('success')}}</strong>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    <table class="table table-bordered">
                    <thead>
                        <tr>
                        <th scope="col">SL</th>
                        <th scope="col">NAME</th>
                        <th scope="col">EMAIL</th>
                        <th scope="col">CREATE AT</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                    </tbody>
                    </table>
                </div>
               
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Add Category
                    
                </div>

                <div class="card-body">
                   
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                         @endif -->
            <form method="POST" action="{{route('add_category')}}">
                @csrf
                <div class="form-grupe">
                    <label>All Category</label></br></br>
                    <input type="text" class="form-control @error('category_name') is-invalid @enderror" name="category_name" placeholder="Add Category"/></br></br>
                    <button type="submit" class="btn btn-primary">Add</button>
                    @error('category_name')
                    <span class="text-danger">{{$message}}</span>
                    @enderror
                </div>
		    </form>
            
                </div>
               
            </div>
        </div>
    </div>
</div>
@endsection
