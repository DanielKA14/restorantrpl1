@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            @if(Session::has('message'))
            <div class = "alert alert-succses">
            {{Session::get('message')}} 
            @endif
            <form action="{{ route('category.update',[$category->id]) }}" method="post">
                @csrf
                {{method_field('PUT')}}
                <div class="card">
                <div class="card-header"> Update Food Category</div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="name" class="from-control @error('name) is-invalid @enderror'" value="{{$category->name}}">
                        @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{$message}}</strong>
                    </span>
                    @enderror
                    </div>

                    <div class="from-group">
                        <button class="btn-brn-outline=primary">Update</button>
                    </div>
                </div>
                </form>   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
