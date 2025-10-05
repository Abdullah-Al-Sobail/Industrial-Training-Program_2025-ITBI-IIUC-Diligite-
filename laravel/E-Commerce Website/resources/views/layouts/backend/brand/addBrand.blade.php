@extends('home')

@section('content')

  <div class="row">
    <div class="col-md-8">
        <table class="table">
            <thead>
                <th>SL</th>
                <th>Name</th>
                <th>Slug</th>
                <th>Image</th>
                <th>Action</th>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Razor</td>
                    <td>razo-brand</td>
                    <td>image</td>
                    <td>
                        <div class="btn-group">
                            <a href="" class="btn btn-sm btn-warning">Edit</a>
                            <a href="" class="btn btn-sm btn-danger">Delete</a>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
      <div class="card col-md-4">
        <div class="card-header h5">
            Add new brand
        </div>
        <div class="card-body">
            <form action="{{route('brand.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <label for="">Name</label>
                <input type="text" class="form-control my-2" name="name">
                @error('name')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <label for="">Slug</label>
                <input type="text" class="form-control my-2" name="slug">
                 @error('slug')
                    <p class="text-danger">{{$message}}</p>
                @enderror
                <label for="">Brand Image</label>
                <input type="file" class="form-control my-2" name="brandImage">
                <button type="submit" class="btn btn-primary w-100 my-2">Submit</button>

            </form>
        </div>
    </div>
  </div>
@endsection
