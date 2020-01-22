@extends('layouts.nav3')

@section('title', 'Edit Product')

@section('content')
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <form action="/edit/product/{{ $product->id }}" method="POST" enctype="multipart/form-data">
                @method('patch')
                @csrf
                <div class="form-group">
                    <label for="icon">Icon Product</label>

                    <div class="col-md-3">
                        <img id="icon" class="img-thumbnail" width="100" height="100" src="{{ $product->icon }}"/>
                        <input type="file" onchange="document.getElementById('icon').src = window.URL.createObjectURL(this.files[0])" name="icon">
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Icon Product</label>

                    <div class="col-md-3">
                        <img id="image" class="img-thumbnail" width="100" height="100" src="{{ $product->image }}"/>
                        <input type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="image">
                    </div>
                </div>
                {{-- <div class="form-group row">
                    <label for="image2" class="col-md-4 col-form-label text-md-right">Image 2</label>

                    <div class="col-md-3">
                        <img id="image2" class="rounded-circle" width="100" height="100"/>
                        <input type="file" onchange="document.getElementById('image2').src = window.URL.createObjectURL(this.files[0])" name="image2" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image3" class="col-md-4 col-form-label text-md-right">Image 3</label>

                    <div class="col-md-3">
                        <img id="image3" class="rounded-circle" width="100" height="100"/>
                        <input type="file" onchange="document.getElementById('image3').src = window.URL.createObjectURL(this.files[0])" name="image3" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="image4" class="col-md-4 col-form-label text-md-right">Image 4</label>

                    <div class="col-md-3">
                        <img id="image4" class="rounded-circle" width="100" height="100"/>
                        <input type="file" onchange="document.getElementById('image4').src = window.URL.createObjectURL(this.files[0])" name="image4" required>
                    </div>
                </div> --}}


                <div class="form-group">
                    <label for="exampleInputName">Name Produk</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" required name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="platform">Platform</label>
                    <div class="input-group-prepend" id="platform">
                        <select class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" name="platform">
                            <div class="dropdown-menu">
                                <option class="dropdown-item" {{ $product->platform == "Application" ? 'selected': "" }} value="Application">Application</option>
                                <option class="dropdown-item" {{ $product->platform == "Website" ? 'selected': "" }} value="Website">Website</option>
                                <option class="dropdown-item" {{ $product->platform == "Games" ? 'selected': "" }} value="Games">Games</option>
                            </div>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description">{{ $product->description }}</textarea>
                </div>
                <div class="modal-footer">
                    <a href="homepage.html" class="btn btn-secondary">Back</a>
                    <input type="submit" class="btn btn-success" value="Edit">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection