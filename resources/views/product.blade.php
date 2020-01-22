@extends('layouts.nav')

@section('title', 'List Product')

@section('content')
<div class="row m-3">
    @foreach ($products as $product)
    <div class="card m-3" style="max-width: 450px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="{{ $product->icon }}" class="card-img" width="400px">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <p class="card-text"><small class="text-muted">{{ $product->updated_at }}</small></p>
                    <a href="/edit/{{ $product->id }}" class="btn btn-primary">Edit</a>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection