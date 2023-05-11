@extends('adminPanelmaster')


@section('content')

<div class="container">
    <div class="row justify-content-center">
      <div class="col-md-6">
        <h3>Add Category</h3>
        <form method="POST" action="">
          @csrf
          <div class="form-group">
            <label for="category_id">Category ID</label>
            <input type="number" class="form-control" id="category_id" name="category_id" required>
          </div>
          <div class="form-group">
            <label for="name">Category Name</label>
            <input type="text" class="form-control" id="name" name="name" required>
          </div>
          <div class="form-group">
            <label for="status">Status</label>
            <select class="form-control" id="status" name="status" required>
              <option value="">-- Select --</option>
              <option value="active">Active</option>
              <option value="inactive">Inactive</option>
            </select>
          </div>
          <button type="submit" class="btn btn-primary">Add</button>
        </form>
      </div>
    </div>
  </div>
  
  

@endsection