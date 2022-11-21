<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">



  <meta name="csrf-token" content="content">
  <meta name="csrf-token" content="{{ csrf_token() }}">



  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register</title>
  <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    @media (min-width: 1025px) {
      .h-custom {
        height: 100vh !important;
      }
    }

    .card-registration .select-input.form-control[readonly]:not([disabled]) {
      font-size: 1rem;
      line-height: 2.15;
      padding-left: .75em;
      padding-right: .75em;
    }

    .card-registration .select-arrow {
      top: 13px;
    }

    .gradient-custom-2 {
      /* fallback for old browsers */
      background: #a1c4fd;

      /* Chrome 10-25, Safari 5.1-6 */
      background: -webkit-linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1));

      /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      background: linear-gradient(to right, rgba(161, 196, 253, 1), rgba(194, 233, 251, 1))
    }

    .bg-indigo {
      background-color: #4835d4;
    }

    @media (min-width: 992px) {
      .card-registration-2 .bg-indigo {
        border-top-right-radius: 15px;
        border-bottom-right-radius: 15px;
      }
    }

    @media (max-width: 991px) {
      .card-registration-2 .bg-indigo {
        border-bottom-left-radius: 15px;
        border-bottom-right-radius: 15px;
      }
    }
  </style>
</head>

<body>

  <form action="" method="post" enctype="multipart/form-data">
    @csrf

    <section class="h-100 h-custom gradient-custom-2">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12">
            <div class="card card-registration card-registration-2" style="border-radius: 15px;">
              <div class="card-body p-0">
                <div class="row g-0">
                  <div class="col-lg-6">
                    <div class="p-5">
                      <h3 class="fw-normal mb-5" style="color: #4835d4;">General Infomation</h3>

                      <div class="row">
                        <div class="col-md-12 mb-8 pb-4">

                          <div class="form-outline">
                            <input type="text" id="form3Examplev2" class="form-control form-control-lg" name="fullname" />
                            <label class="form-label" for="form3Examplev2">Fullname</label>
                          </div>
                        </div>
                      </div>

                      <div class="mb-4 pb-2">
                        <div class="form-outline">
                          <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="username" />
                          <label class="form-label" for="form3Examplev4">Username</label>
                        </div>
                      </div>
                      <div class="mb-4 pb-2">
                        <div class="form-outline">
                          <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="password" />
                          <label class="form-label" for="form3Examplev4">Password</label>
                        </div>
                      </div>
                      <div class="mb-4 pb-2">

                        <input class="form-control" type="file" id="formFileDisabled" name="uImage" />
                        <label class="form-label" for="form3Examplev4">Avatar</label>
                      </div>

                    </div>
                  </div>
                  <div class="col-lg-6 bg-indigo text-white">
                    <div class="p-5">
                      <h3 class="fw-normal mb-5">Contact Details</h3>
                      <div class="mb-4 pb-2">
                        <div class="form-outline">
                          <input type="text" id="form3Examplev4" class="form-control form-control-lg" name="email" />
                          <label class="form-label" for="form3Examplev4">Email</label>
                        </div>
                      </div>
                      <div class="mb-4 pb-2">
                        <div class="form-outline form-white">
                          <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="phonenumber" />
                          <label class="form-label" for="form3Examplea2">Phone</label>
                        </div>
                      </div>
                      <div class="mb-4 pb-2">
                        <div class="form-outline form-white">

                          <input type="text" id="form3Examplea2" class="form-control form-control-lg" name="number" />
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

                      <br>
                      <br>
                      <br>
                      <br>
                      <br>



                      <button type="submit" class="btn btn-light btn-lg" data-mdb-ripple-color="dark">Register</button>

                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </form>
  </section>
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
                .districtid + '">' + value.type+" "+value.name + '</option>');
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
                .wardid + '">' +value.type+" "+ value.name + '</option>');
            });
          }
        });
      });
    });
  </script>
</body>

</html>