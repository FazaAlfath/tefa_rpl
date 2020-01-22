@extends('layouts.nav2')

@section('title', 'Home')

@section('content')
<!-- Card Form -->
<div class="row m-3">
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Show more</a>
                    <a href="" class="btn btn-danger" data-toggle=" modal" data-target="#logoutModal"><i
                            class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Chirza</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Show more</a>
                    <a href="" class="btn btn-danger" data-toggle=" modal" data-target="#logoutModal"><i
                            class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-4">
        <div class="card">
            <div class="card-body">
                <h5 class="card-title">Bima</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additionalcontent.</p>
                <div class="modal-footer">
                    <a href="#" class="btn btn-primary">Show more</a>
                    <a href="" class="btn btn-danger" data-toggle=" modal" data-target="#logoutModal"><i
                            class="fa fa-trash"></i> Delete</a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Delete" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-danger" href="index.html"> Delete</a>
            </div>
        </div>
    </div>
</div>
@endsection