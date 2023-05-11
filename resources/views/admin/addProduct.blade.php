@extends('adminPanelmaster')


@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3>Add Product</h3>
        <form method="POST" action="" enctype="multipart/form-data">
          @csrf
          <div class="form-group my-2">
            <label for="name">Product Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group my-2">
            <label for="description">Description</label>
            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
          </div>
          <div class="form-group my-2">
            <label for="category">Category</label>
            <select class="form-control" id="status" name="status" required>
                <option value="">-- Select --</option>
                <option value="available">Men</option>
                <option value="unavailable">Women</option>
                <option value="unavailable">Other</option>
            </select>
          </div>
          <div class="form-group my-2">
            <label for="brand">Brand</label>
            <input type="text" class="form-control" id="brand" name="brand" required>
          </div>
          <div class="form-group my-2">
            <label for="price">Price</label>
            <input type="number" class="form-control" id="price" name="price" required>
          </div>
          <div class="form-group my-2">
            <label for="image">Image</label>
            <div class="custom-file">
              <input type="file" class="custom-file-input" id="image" name="image" required>
              <label class="custom-file-label" for="image"></label>
            </div>
          </div>

          <button type="submit" class="btn btn-primary my-2">Add</button>
        </form>
      </div>
    </div>
  </div>
  
  

@endsection