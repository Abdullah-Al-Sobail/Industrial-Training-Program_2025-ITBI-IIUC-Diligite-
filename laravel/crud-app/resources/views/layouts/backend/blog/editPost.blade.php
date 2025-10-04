@extends('layouts.app')
@section('content')
    <div class="card col-md-6 mx-auto">

        <div class="card-header">
           Edit post
        </div>
        <div class="card-body">
            @if (session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
  <strong>Successfull!</strong> {{session('success')}}
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            @endif
            <form action="{{route('blog.update',$post->id)}}" method="POST">
                @csrf
                @method('PUT')
                <label for="">Name</label>
                <input type="text" class="form-control my-2" name="name" value="{{$post->name}}">
                @error('name')
                    <p class="text-danger fw-bold">{{$message}}</p>
                @enderror

                <label for="">Description</label>
                <textarea name="description" class="form-control my-2" >{{$post->description}}</textarea>
                 @error('description')
                    <p class="text-danger fw-bold">{{$message}}</p>
                @enderror
                <button type="submit" class="btn btn-primary w-100 my-1">Update</button>
            </form>
        </div>
    </div>
@endsection
