@extends('admin.blocks.index')
@section('content')

<form action="" method="post" enctype="multipart/form-data" style="width:50%;margin:auto" >
  @csrf
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">Product Name</label>
      <input type="text" class="form-control" id="inputEmail4" placeholder="Name" name="pName" value="{{$cate->pName}}">
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">Description</label>
      <input type="text" class="form-control" id="inputPassword4" placeholder="Description" name="pDescription" value="{{$cate->pDescription}}">
    </div>
  </div>

  <div style="display:inline-block">
    <label for="formFileDisabled" class="form-label">Image 1</label>
    <input class="form-control" type="file" id="formFileDisabled" name="pImage1" value="storage/products/{{$cate->pImage1}}" />
    <img src="storage/products/{{$cate->pImage1}}" class="img-thumbnail" alt="">
  </div>
  <div style="display:inline-block">
    <label for="formFileDisabled" class="form-label">Image 2</label>
    <input class="form-control" type="file" id="formFileDisabled" name="pImage2" value="storage/products/{{$cate->pImage2}}" />
    <img src="storage/products/{{$cate->pImage2}}" class="img-thumbnail" alt="">
  </div>
  <div class="form-row" >
    <div class="form-group col-md-6">
      <label for="inputCity">Price</label>
      <input type="text" class="form-control" id="inputCity" name="pPrice" placeholder="VND" value="{{$cate->pPrice}}">
    </div>
    @if($countries != null)
    <div class="form-group col-md-6">
      <label for="inputState">Country</label>
      <select id="inputState" class="form-control" name="cID">
        @foreach($countries as $country)
        <option value="{{$country->cID}}">{{$country->cName}}</option>
        @endforeach
      </select>
    </div>
    @endif

    <div class="form-group col-md-6">
      <label for="inputZip">Quantity</label>
      <input type="text" class="form-control" id="inputZip" name="pQuantity" placeholder="Number" value="{{$cate->pQuantity}}">
    </div>
  </div>
  <div class="mx-auto">
  <div class="form-group col-md-6">
  @foreach ($productcategories as $p)
      <p style="display:inline-block">{{$p->CategoryName}}</p>
      @endforeach
    <select class=" select2 form-control" name="CategoryIDs[]" multiple="multiple">
      @foreach ($categories as $category)
      <option value="{{$category->CategoryID}}">{{$category->CategoryName}}</option>
      @endforeach
      <span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="2" style="width: 383.75px;">
      <span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
        
    </select>
      
  </div>
  <!-- cần đưa ra pID ngay sau khi ấn button -->
  <button type="submit" class="btn btn-primary" >Update Product</button>
  </div>

</form>
<br>
<br>
<br>
<br>
<br>


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