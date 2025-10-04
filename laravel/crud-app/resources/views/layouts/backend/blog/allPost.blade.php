@extends('layouts.app')
@section('content')
<div class="card col-md-6 mx-auto">
    <div class="card-header">
        All Post
    </div>
    <div class="card-body">
        <table class="table">

            <thead>
                <th>SL</th>
                <th>Name</th>
                <th>Description</th>
                <th>Slug</th>
                <th>Action</th>
            </thead>
            <tbody>
                @forelse ($allPost as $key=>$post)
                <tr>
                    <td>{{++$key}}</td>
                    <td>{{$post->name}}</td>
                    <td>{{$post->description}}</td>
                    <td>{{$post->slug}}</td>
                    <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-sm btn-primary">Status</a>
                            <a href="{{route('blog.edit',$post->id)}}" class="btn btn-sm btn-warning">Edit</a>
                            <a href="{{route('blog.delete',$post->id)}}" class="btn btn-sm btn-danger"  onclick="event.preventDefault();
                                                     document.getElementById('delete').submit();">Delete</a>
                        </div>
                            <form id="delete" action="{{route('blog.delete',$post->id)}}" method="POST" class="d-none">
                                        @csrf
                                        @method('delete')
                         </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="text-info text-center">No Record Found</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection
