@extends('layouts.nav')

@section('title', 'Home')

@section('content')
    
<div class="col-md-6 my-5 mx-auto">
    <div class="card" >
    @foreach( $products as $product )
    <img class="card-img-top" src="{{ $product->image }}" alt="Card image cap">
    <div class="card-body">
        <h5 class="card-title">{{ $product->name }}</h5>
        <p class="card-text">{{ $product->description }}</p>
        <button class="btn btn-primary">Buat Apa</button>
    </div>
    @endforeach
</div>

@stop