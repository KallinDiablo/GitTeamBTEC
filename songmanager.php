<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Song manager</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/headers/">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
      <title>Add Product</title>
      <style>
    .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    .b-example-divider {
  height: 3rem;
  background-color: rgba(0, 0, 0, .1);
  border: solid rgba(0, 0, 0, .15);
  border-width: 1px 0;
  box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
}

.form-control-dark {
  color: #fff;
  background-color: var(--bs-dark);
  border-color: var(--bs-gray);
}
.form-control-dark:focus {
  color: #fff;
  background-color: var(--bs-dark);
  border-color: #fff;
  box-shadow: 0 0 0 .25rem rgba(255, 255, 255, .25);
}

.bi {
  vertical-align: -.125em;
  fill: currentColor;
}

.text-small {
  font-size: 85%;
}

.dropdown-toggle {
  outline: 0;
}
.dropdown-content ul ,li{
text-align: center;
}

  </style>
</head>
<body>
<header class="p-3 mb-3 border-bottom">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-dark text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="menu.php" class="nav-link px-2 link-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Cart</a></li>
          <li><a href="#" class="nav-link px-2 link-dark">Support</a></li>
          <li class="nav-item dropdown">
                  <a class="nav-link px-2 link-dark" href="#" id="navbarDropdown">
                      Manager
                  </a>
                  <div class="dropdown-content">
                      <a class="dropdown-item" href="addproduct.php">Add Music</a>
                      <a class="dropdown-item" href="Addsinger.php">Add Singer</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="#">Song manager</a>
                  </div>
              </li>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp
        <div class="dropdown text-end">
          <a href="#" class="d-block link-dark text-decoration-none dropdown-toggle" id="dropdownUser1" data-bs-toggle="dropdown" aria-expanded="false">
            
          <img src="https://github.com/mdo.png" alt="mdo" width="32" height="32" class="rounded-circle"> 
            

          </a>
          <ul class="dropdown-content text-small" aria-labelledby="dropdownUser1" style="list-style: none; ">
            <li><a class="dropdown-item" href="#">Settings</a></li>
            <li><a class="dropdown-item" href="#">Profile</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="index.php">Sign out</a></li>
          </ul>
        </div>
      </div>
    </div>
  </header>
<?php
  $connect= mysqli_connect('localhost','root','','musicwebsite');
?>
<table border="1" style="margin:auto">
    <tr>
        <th>Song Id</th>
        <th>Song Name </th>
        <th>Price </th>
        <th>Images </th>
        <th>Singer Name </th>
        <th>Action </th>
     </tr>

     
         <?php
         $sql = "SELECT * FROM song,singer WHERE song.singer_id = singer.singer_id";
        $result = mysqli_query($connect, $sql);
        while($row= mysqli_fetch_array($result)){
               $song_id = $row['song_id'];
               $song_name = $row['song_name'];
               $song_price = $row['song_price'];
               $song_img = $row['song_img'];
               $singer_name = $row['singer_name'];

            ?>
        <tr>
            <td> <?php echo $song_id ?></td>

            <td> <?php echo $song_name ?></td>
            <td> <?php echo $song_price ?></td>
            <td> <img src="song_img/<?php echo $song_img ?>" style ="width: 100px;"></td>
            <td> <?php echo $singer_name ?></td>
            <td> <a href="editsong.php?id=<?php echo $song_id ?>">Update Song </a></td>
            <td> <a href="?id=<?php echo $song_id ?>">Delete Song </a></td>
             </tr>
             <?php
             }
             ?>

     
</table>
<?php
if(isset($_GET["id"])){
    $id = $_GET["id"];
    $sql="DELETE FROM song where song_id = $id";
    $result=mysqli_query($connect,$sql);
    if($result) {
        echo "<script> alert ('Xóa thành công!')</script>";
    }
} else{
    
}
?>

</body>

</html>