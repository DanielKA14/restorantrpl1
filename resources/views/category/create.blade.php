@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class = "alert alert-succses">
            {{Session::get('message')}} 
            @endif
            <form action="{{ route('category.store') }}" method="post">
                @csrf   
            <div class="card">
                <div class="card-header">Manage Food Category</div>
                
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">nama</label>
                        <input type="text" name="name" class="from-control @error ('name') is-invalid @enderror">
                        @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    </div>
                    <br>
                    <div class="from-group">
                        <button class="btn-brn-outline=primary">Submit</button>
                    </div>
                </div>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
