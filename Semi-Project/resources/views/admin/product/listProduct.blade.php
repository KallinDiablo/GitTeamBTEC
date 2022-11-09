@extends('admin.blocks.index')



@section('content')
<table class="table">
      <thead class="table-dark">
            <tr>

                  <th>STT</th>

                  <th>Name</th>

                  <th>Description</th>

                  <th width="280px">Action</th>

            </tr>
      </thead>
      <tbody>
            @foreach ($products as $key => $value)

            <tr>

                  <td>{{ $key+1 }}</td>

                  <td>{{ $value->pName }}</td>

                  <td>{{ $value->pDescription}}</td>

                  <td>

                        <a href="{{asset('product/edit/'.$value->pID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>

                        <a href="{{asset('product/delete/'.$value->pID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>

                  </td>

            </tr>
      </tbody>
      @endforeach

</table>
<div class="d-flex justify-content-center">
{{$products->links() }}
</div>
@endsection