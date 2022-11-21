<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <!-- Custom fonts for this template-->
  <link href="assets/admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="assets/admin/css/sb-admin-2.min.css" rel="stylesheet">
</head>

<body>
  @if (count($errors) >0)
  <ul>
    @foreach($errors->all() as $error)
    <li class="text-danger"> {{ $error }}</li>
    @endforeach
  </ul>
  @endif
  @if (session('status'))
  <ul>
    <li class="text-danger"> {{ session('status') }}</li>
  </ul>
  @endif
  <form action="{{ route('getLogin') }}" method="post">
    @csrf
    <section class="vh-100" style="background-color: #508bfc;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-5">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
              <div class="card-body p-5 text-center">

                <h3 class="mb-5">Sign in</h3>

                <div class="form-outline mb-4">
                  <input type="text" id="typeEmailX-2" class="form-control form-control-lg" name="txtUsername" />
                  <label class="form-label" for="typeEmailX-2">Username</label>
                </div>

                <div class="form-outline mb-4">
                  <input type="password" id="typePasswordX-2" class="form-control form-control-lg" name="txtPassword" />
                  <label class="form-label" for="typePasswordX-2">Password</label>
                </div>

                <!-- Checkbox -->


                <!-- lưu user bỏ qua token expire -->
                <div class="form-check d-flex justify-content-start mb-4">
                  <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                  <label class="form-check-label" for="form1Example3"> Remember password </label>
                </div>

                <button class="btn btn-primary btn-lg btn-block" type="submit">Login</button>

                <hr class="my-4">

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </form>
</body>

</html>