<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
  <?php
  $connect= mysqli_connect('3.132.234.157','hduc2502','123@123a','musicwebsite');
  ?>
    <!-- Section: Design Block -->
<section class="text-center text-lg-start">
  <style>
    .cascading-right {
      margin-right: -50px;
    }

    @media (max-width: 991.98px) {
      .cascading-right {
        margin-right: 0;
      }
    }
  </style>

  <!-- Jumbotron -->
  <div class="container py-4">
    <div class="row g-0 align-items-center">
      <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="card cascading-right" style="
            background: hsla(0, 0%, 100%, 0.55);
            backdrop-filter: blur(30px);
            ">
          <div class="card-body p-5 shadow-5 text-center">
            <h2 class="fw-bold mb-5">Sign up now</h2>
            <form action="" method="POST">
              <!-- 2 column grid layout with text inputs for the first and last names -->
              <div class="row">
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="text" id="form3Example1" name="fullname" class="form-control" />
                    <label class="form-label" for="form3Example1">Fullname</label>
                  </div>
                </div>
                <div class="col-md-6 mb-4">
                  <div class="form-outline">
                    <input type="file" id="form3Example2"name="image" class="form-control" />
                    <label class="form-label" for="form3Example2">Image</label>
                  </div>
                </div>
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" id="form3Example3" name="username" class="form-control" />
                <label class="form-label" for="form3Example3">Username</label>
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" id="form3Example4" name="password" class="form-control" />
                <label class="form-label" for="form3Example4">Password</label>
              </div>

              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-center mb-4">
                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                <label class="form-check-label" for="form2Example33">
                  Subscribe to our newsletter
                </label>
              </div>

              <!-- Submit button -->
              <input type="submit" name="register" class="btn btn-primary btn-block mb-4" value="Sign up"/>

              <!-- Register buttons -->
              <div class="text-center">
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-facebook-f"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-google"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-twitter"></i>
                </button>

                <button type="button" class="btn btn-link btn-floating mx-1">
                  <i class="fab fa-github"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0">
        <img src="https://mdbootstrap.com/img/new/ecommerce/vertical/004.jpg" class="w-100 rounded-4 shadow-4"
          alt="" />
      </div>
    </div>
  </div>
  <!-- Jumbotron -->
</section>
<!-- Section: Design Block -->
<?php
if(isset($_POST['register'])){
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
  $image = $_POST['image'];
	$sql = "INSERT INTO users VALUES('','$username','$password','$fullname','$image')";
	$result = mysqli_query($connect,$sql);
	if($result){
		?> <script>
        alert("register successful");
        window.location.href = "log.php";
    </script>
    <?php
	}else{
		echo"This account is already existed";
	}
}
    ?>
</body>
</html>