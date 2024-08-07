@extends('layouts.admin_main')


@section('main-section')

<h1 class="text-secondary text-center">Insert Product</h1>
<div class="container w-50">
    <form action="/pages/insertproduct" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="" class="form-label">Product Name</label>
            <input class="form-control" type="text" name="name" id="">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Product Description</label>
            <input class="form-control" type="text" name="desc" id="">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Product Price</label>
            <input class="form-control" type="text" name="price" id="">
        </div>
        <div class="form-group">
            <label for="" class="form-label">Product Image</label>
            <input class="form-control" type="file" name="image" id="">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary w-100">Insert</button>
        </div>
    </form>
</div>


@endsection
