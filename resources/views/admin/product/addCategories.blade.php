@extends('admin.blocks.index') 
@section('content') 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>


<select id="inputState" class="form-control" name="CategoryID">
        
      @foreach ($categories as $category)
        <option value="{{$category->CategoryID}}">{{$category->CategoryName}}</option>
    @endforeach
      
      </select>
      <select class="select2 form-control " name="states[]" multiple="multiple">
      @foreach ($categories as $category)
        <option value="{{$category->CategoryID}}">{{$category->CategoryName}}</option>
    @endforeach
</select>

<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@endsection