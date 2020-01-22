@extends('layouts.nav')

@section('title', 'Home')

@section('content')
<!-- Card Form -->
    
<div class="container">
    <div class="row my-5">

    @foreach ($products as $product)

        <div class="col-md-4">
            <form action="/detailproduct" method="POST">
                @csrf
            <input type="hidden" name="id" value="{{ $product->id }}">    
            <div class="card" style="width: 20rem;">
                <div class="card-body">
                  <h5 class="card-title">{{ $product->name }}</h5>
                  <p class="card-text">{{ $product->description }}</p>
                  <button type="submit" class="btn btn-primary">Show More</button>
                </div>
              </div>
            </form>
        </div>        
        
    @endforeach  

    </div>
</div>

@endsection