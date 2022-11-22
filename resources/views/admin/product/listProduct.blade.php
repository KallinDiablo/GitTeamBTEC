@extends('admin.blocks.index')



@section('content')
<table class="table">
      <thead class="table-dark">
            <tr>

                  <th>STT</th>

                  <th>Name</th>
                  
                  <th>Image</th>

                  <th>Description</th>

                  <th>Status</th>

                  <th width="280px">Action</th>

            </tr>
      </thead>
      <tbody>
            @foreach ($products as $key => $value)

            <tr>

                  <td>{{ $key+1 }}</td>

                  <td>{{ $value->pName}}</td>

                  <td><img src="storage/products/{{$value->pImage1}}" class="img-thumbnail" alt=""></td>

                  <td>{{ $value->pDescription}}</td>

                  <td>@if($value->update_at == null)
                        <p>Updated at: null</p>
                        @else
                        <p>Updated at: {{ $value->update_at}}</p>
                        @endif
                        <p>Created at: {{ $value->create_at}}</p>
                  </td>
                  <td>

                        <a href="{{asset('admin/product/edit/'.$value->pID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Detail</a>

                        <a href="{{asset('admin/product/delete/'.$value->pID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>

                  </td>

            </tr>
      </tbody>
      @endforeach

</table>
<div class="d-flex justify-content-center">
      {{$products->links() }}
</div>
@endsection