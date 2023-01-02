@extends('layouts.app')

@section('content')


<div class="container">
<a type="button" href="home" class="btn btn-secondary mb-2">Back</a>
<div class="card">
                <div class="card-header">{{ __('Update Product') }}</div>
                <div class="card-body">
<form>
  <div class="form-group">
    <label for="updateName">Name</label>
    <input type="updateName" class="form-control" id="updateName">
  </div>
  <div class="form-group">
    <label for="updateCategory">Category</label>
    <select class="form-control" id="updateCategory">
    <option selected>Select A Category</option>
      <option>Beauty</option>
      <option>Camera</option>
      <option>Other</option>
    </select>
  </div>
  <div class="form-group">
    <label for="updatedetail">Detail</label>
    <textarea class="form-control" id="updatedetail" rows="10"></textarea>
  </div>
  <div class="form-group">
    <label for="updatePrice">Price</label>
    <input type="updatePrice" class="form-control" id="updatePrice">
  </div>
  <div class="form-group">
    <label for="updatePhoto">Photo</label>
  <div class="custom-file">
  <input type="file" class="custom-file-input" id="updatePhoto">
  <label class="custom-file-label" for="updatePhoto">No File Choosen</label>
</div>
</div>
<button type="button" class="btn btn-outline-secondary">Update</button>
</form>

</div>
</div>
</div>

</div>
@endsection