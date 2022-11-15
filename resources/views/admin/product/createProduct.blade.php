@extends('admin.blocks.index')
@section('content')

<form action="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Product Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="pName">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Description" name="pDescription">
    </div>
  </div>
  <label for="formFileDisabled" class="form-label">Image 1</label>
  <input class="form-control" type="file"  id="formFileDisabled" name="pImage1" />
  <label for="formFileDisabled" class="form-label">Image 2</label>
  <input class="form-control" type="file"  id="formFileDisabled" name="pImage2" />
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputCity">Price</label>
      <input type="text" class="form-control" id="inputCity" name="pPrice" placeholder="VND">
    </div>
    @if($countries != null)
    <div class="form-group col-md-4">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control" name="cID">
        @foreach($countries as $country)
        <option value="{{$country->cID}}">{{$country->cName}}</option>
        @endforeach
      </select>
    </div>
    @endif

    <div class="form-group col-md-2">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="inputZip" name="pQuantity" placeholder="Number">
    </div>
  </div>
  <div class="form-group col-md-12">
    <select class=" select2 form-control" name="CategoryIDs[]" multiple="multiple">
      @foreach ($categories as $category)
      <option value="{{$category->CategoryID}}">{{$category->CategoryName}}</option>
      @endforeach
    </select>
  </div>
  <!-- cần đưa ra pID ngay sau khi ấn button -->
  <button type="submit" class="btn btn-primary">Add Product</button>

</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.8/js/select2.min.js" defer></script>
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
<script>
  $(document).ready(function() {
    $('.select2').select2();
  });
</script>
@endsection