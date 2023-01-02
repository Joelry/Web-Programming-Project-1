@extends('layouts.app')

@section('content')


<div class="container">
<a type="button" href="home" class="btn btn-secondary mb-2">Back</a>
<div class="card">
                <div class="card-header">{{ __('Add Product') }}</div>
                <div class="card-body">
<form>
  <div class="form-group">
    <label for="nameProduct">Name</label>
    <input type="nameProduct" class="form-control" id="nameProduct">
  </div>
  <div class="form-group">
    <label for="categoryProduct">Category</label>
    <select class="form-control" id="categoryProduct">
    <option selected>Select A Category</option>
      <option>Beauty</option>
      <option>Camera</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="detailProduct">Detail</label>
    <textarea class="form-control" id="detailProduct" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="productPrice">Price</label>
    <input type="productPrice" class="form-control" id="productPrice">
  </div>
  <div class="form-group">
    <label for="photoProduct">Photo</label>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="photoProducts">
  <label class="custom-file-label" for="photoProduct">No File Choosen</label>
</div>
</div>
<button type="button" class="btn btn-outline-secondary">Add</button>
</form>

</div>
</div>
</div>

</div>
@endsection