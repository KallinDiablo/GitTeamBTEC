
@extends('admin.blocks.index') 

 

@section('content') 
<table class="table" style="width:50%;margin:auto">
  <thead class="table-dark">
  <tr>
        
        <th width="4%">STT</th>
        
        <th width="30%">Name</th>
        
        <th>Description</th>
        
        <th width="20%">Action</th>
        
        </tr>
  </thead>
  <tbody>
  @foreach ($categories as $key => $value)
        
        <tr>
        
        <td>{{ $key+1 }}</td>
        
        <td>{{ $value->CategoryName }}</td>
        
        <td>{{ $value->CategoryDescription}}</td>
        
        <td>
        
        <a href="{{asset('category/edit/'.$value->CategoryID)}}" class="btn btn-primary edit"><span class="glyphicon glyphicon-edit"> </span> Edit</a>
        
        <a href="{{asset('category/delete/'.$value->CategoryID)}}" onclick="return confirm('Bạn có chắc muốn xóa?')" class="btn btn-danger"><span class="glyphicon glyphicon-trash"> </span>Delete</a>
        
        </td>
        
        </tr>
  </tbody>
        @endforeach
        
        </table>
        <div class="d-flex justify-content-center">
                {{$categories->links() }}
            </div>

@endsection 