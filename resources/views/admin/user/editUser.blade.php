@extends('admin.blocks.index')
@section('content')
<meta name="csrf-token" content="content">
<meta name="csrf-token" content="{{ csrf_token() }}">

<form action="" method="post" enctype="multipart/form-data">
  @csrf
  <div class="row d-flex justify-content-center align-items-center h-100">
    <div class="col-12">
      <div class="card card-registration card-registration-2" style="border-radius: 15px;">
        <div class="card-body p-0">
          <div class="row g-0">
            <div class="col-lg-6">
              <div class="form-row">
                <div class="form-outline">
                  <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="fullname" value="{{$cate->uName}}"/>
                  <label class="form-label" for="form3Examplev2">Fullname</label>
                </div>
              </div>


              <div class="mb-4 pb-2">
                <div class="form-outline">
                  <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="username" value="{{$cate->uUsername}}"/>
                  <label class="form-label" for="form3Examplev4">Username</label>
                </div>
              </div>
              <div class="mb-4 pb-2">
                <div class="form-outline">
                  <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="password" value="{{$cate->uPassword}}"/>
                  <label class="form-label" for="form3Examplev4">Password</label>
                </div>
              </div>
              <div class="mb-4 pb-2">

                <input class="form-control" type="file" id="formFileDisabled" name="uImage" value="{{$cate->uImage}}"/>
                <label class="form-label" for="form3Examplev4">Avatar</label>
              </div>
            </div>
            <div class="col-lg-6">

              <div class="mb-4 pb-2">
                <div class="form-outline">
                  <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="email" value="{{$cate->uEmail}}"/>
                  <label class="form-label" for="form3Examplev4">Email</label>
                </div>
              </div>
              <div class="mb-4 pb-2">
                <div class="form-outline form-white">
                  <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="phonenumber" value="{{$cate->uPhoneNumber}}"/>
                  <label class="form-label" for="form3Examplea2">Phone</label>
                </div>
              </div>
              <div class="mb-4 pb-2">
                <div class="form-outline form-white">

                  <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="number" value="{{$cate->number}}"/>
                  <label class="form-label" for="form3Examplea2">Apartment</label>
                </div>
              </div>

              <div class="mb-4 pb-2">
                <div class="form-outline form-white">
                  <label class="form-label" for="form3Examplea3">Address</label>
                  <select id="province-dd" class="form-control" name="provinceid">
                    @foreach($province as $data)
                    <option value="{{$data->provinceid}}">{{$data->name}}</option>
                    @endforeach
                  </select>
                  <br>
                  <select id="district-dd" class="form-control" name="districtid">
                  </select>
                  <br>
                  <select id="ward-dd" class="form-control" name="wardid">
                  </select>
                  <br>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- cần đưa ra pID ngay sau khi ấn button -->
  <button type="submit" class="btn btn-primary">Add User</button>

</form>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function() {
    $('#province-dd').on('change', function() {
      var idProvince = this.value;
      $("#district-dd").html('');
      $.ajax({
        url: "{{url('api/fetch-districts')}}",
        type: "POST",
        data: {
          provinceid: idProvince,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(result) {
          // $('#district-dd').html('<option value="">Select District</option>');
          $.each(result.district, function(key, value) {
            $("#district-dd").append('<option value="' + value
              .districtid + '">' + value.type + " " + value.name + '</option>');
          });
          // $('#ward-dd').html('<option value="">Select Ward</option>');
        }
      });
    });
    $('#district-dd').on('change', function() {
      var idDistrict = this.value;
      $("#ward-dd").html('');
      $.ajax({
        url: "{{url('api/fetch-wards')}}",
        type: "POST",
        data: {
          districtid: idDistrict,
          _token: '{{csrf_token()}}'
        },
        dataType: 'json',
        success: function(res) {
          // $('#ward-dd').html('<option value="">Select Ward</option>');
          $.each(res.ward, function(key, value) {
            $("#ward-dd").append('<option value="' + value
              .wardid + '">' + value.type + " " + value.name + '</option>');
          });
        }
      });
    });
  });
</script>


@endsection