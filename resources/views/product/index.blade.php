@extends('layouts.app')

@section('content')

<h1 class="text-center mt-2">All Products</h1>
<hr>
<br>


<div class="container">
    <div class="row">
        <div class="col-md-6 " style="display:flex">
            @foreach ($products as $product)
            <div class="card m-2 p-2 bg-success text-white" style="width: 18rem;">
                <!-- <img src="images/{{ $product->picture }}" class="card-img-top" alt="..."> -->
                <div class="card-body">
                  <h5 class="card-title">Name :{{ $product->name }}</h5>
                  <h5 class="card-title">Price: ${{ $product->price }}</h5>
                  <hr>
                  <button class="btn btn-warning">Edit</button>
                  <button class="btn btn-danger">Delete</button>
                  
                </div>
              </div>
            @endforeach
        </div>
    </div>
</div>


@endsection