@extends('admin.blocks.index')

@section('content')
<table class="table" style="width:40%;margin:auto">
  <thead class="table-dark">
  <tr>
        
        <th>STT</th>
        
        <th>Name</th>

        <th width="25%">Action</th>
        
        </tr>
  </thead>
  <tbody>
  @foreach ($roles as $key => $value)
        
        <tr>
        
        <td>{{ $key+1 }}</td>
        
        <td>{{ $value->cName }}</td>
        
        <td>
        
        
        <a href="{{asset('role/delete/'.$value->cID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
        
        </td>
        
        </tr>
        @endforeach
  </tbody>
        </table>
        <div class="d-flex justify-content-center">
                {{$roles->links() }}
            </div>
@endsection