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
            @foreach ($users as $key => $value)

            <tr>

                  <td>{{ $key+1 }}</td>

                  <td>{{ $value->uName}}</td>

                  @if($value->uName=='default-avatar-user.jpg')
                  <td><img src="storage/Default/default-avatar-user.jpg" class="img-thumbnail" alt=""></td>
                  @else
                  <td><img src="storage/users/{{$value->uImage}}" class="img-thumbnail" alt=""></td>
                  @endif
                  <td>{{ $value->uUsername}}</td>

                  
                  <td>

                        <a href="{{asset('admin/user/edit/'.$value->uID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Detail</a>

                        <a href="{{asset('admin/user/delete/'.$value->uID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>

                  </td>

            </tr>
      </tbody>
      @endforeach

</table>
<div class="d-flex justify-content-center">
      {{$users->links() }}
</div>
@endsection