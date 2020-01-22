@extends('layouts.nav3')

@section('title', 'Add Product')

@section('content')
<div class="modal-dialog" role="document">
    <div class="modal-content">
        <div class="modal-body">
            <form action="/add/product" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="icon">Icon Product</label>

                    <div class="col-md-3">
                        <img id="icon" class="img-thumbnail" width="100" height="100"/>
                        <input type="file" onchange="document.getElementById('icon').src = window.URL.createObjectURL(this.files[0])" name="icon" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="image">Image</label>

                    <div class="col-md-3">
                        <img id="image" class="img-thumbnail" width="100" height="100"/>
                        <input type="file" onchange="document.getElementById('image').src = window.URL.createObjectURL(this.files[0])" name="image" required>
                    </div>
                </div>

                <div class="form-group">
                    <label for="exampleInputName">Name Produk</label>
                    <input type="text" class="form-control" id="exampleInputName" aria-describedby="nameHelp" required name="name">
                </div>
                <div class="form-group">
                    <label for="platform">Platform</label>
                    <div class="input-group-prepend" id="platform">
                        <select class="btn btn-outline-secondary dropdown-toggle" type="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false" name="platform">
                            <div class="dropdown-menu">
                                <option class="dropdown-item" href="#" value="Application">Application</option>
                                <option class="dropdown-item" href="#" value="Website">Website</option>
                                <option class="dropdown-item" href="#" value="Games">Games</option>
                            </div>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Description</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                </div>
                <div class="modal-footer">
                    <a href="homepage.html" class="btn btn-secondary">Back</a>
                    <input type="submit" class="btn btn-success" value="Tambah">
                </div>
            </form>
        </div>
    </div>
</div>

@endsection