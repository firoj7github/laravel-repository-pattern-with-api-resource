@extends('layouts.app')

@section('content')


<div class="container mt-5 mb-5">

    <h2>Create Product</h2>
    <hr>

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="picture" class="form-label">Choose Picture</label>
            <input class="form-control" type="file" name="picture" id="picture">
          </div>

        <div class="mb-3">
            <label for="title" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>

          <div class="mb-3">
            <label for="price" class="form-label">Price</label>
            <input type="text" class="form-control" name="price" id="price" placeholder="Enter price">
          </div>

          

          <button type="submit" class="btn btn-primary">Create Product</button>

    </form>

</div>



@endsection