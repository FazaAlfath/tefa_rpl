@extends('layouts.nav3')

@section('title', 'Profile')

@section('content')
<div class="modal-dialog mx-auto" role="document">
    <div class="modal-content">
        <div class="modal-body justify-content-center">
            <form action="homepage.html">
                <div class="card" style="width: 18rem;">
                    <img src="{{ asset('img/default.png') }}" class="card-img-top">
                    <div class="card-body">
                        <p class="card-text">{{ Auth::user()->name }}</p>
                        <p class="card-text">{{ Auth::user()->email }}</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="{{ url('/home') }}" class="btn btn-secondary">Back</a>
                    <input type="submit" class="btn btn-success" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection