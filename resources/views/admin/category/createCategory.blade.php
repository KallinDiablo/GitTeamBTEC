
@extends('admin.blocks.index') 
@section('content') 
<form action="" method="post" style="width:50%">
@csrf
  <div class="mb-3">
    <label for="CategoryName1" class="form-label">Name</label>
    <input type="text" class="form-control" id="CategoryName1" name="CategoryName" >
  </div>
  <div class="mb-3">
    <label for="CategoryDescription1" class="form-label">Description</label>
    <input type="text" class="form-control" id="CategoryDescription1" name="CategoryDescription">
  </div>
  <button type="submit" class="btn btn-primary">Add</button>
</form>
@endsection 
