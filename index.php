<?php
	session_start();
?>

# This a comment!
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<title>Document</title>
</head>
<body>
<!-- menu -->
<header class="p-3 bg-dark text-white">
    <div class="container">
      <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-md-between py-3 mb-4 border-bottom">
        <a href="/" class="d-flex align-items-center mb-2 mb-lg-0 text-white text-decoration-none">
          <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap"><use xlink:href="#bootstrap"/></svg>
        </a>

        <ul class="nav col-12 col-lg-auto me-lg-auto mb-2 justify-content-center mb-md-0">
          <li><a href="#" class="nav-link px-2 text-secondary">Home</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Features</a></li>
          <li><a href="#" class="nav-link px-2 text-white">Pricing</a></li>
          <li><a href="#" class="nav-link px-2 text-white">FAQs</a></li>
          <li><a href="#" class="nav-link px-2 text-white">About</a></li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control form-control-dark" placeholder="Search..." aria-label="Search">
        </form>

        <div class="text-end">
          <a href="log.php"><button type="button" class="btn btn-outline-light me-2">Login</button></a>
          <a href="reg.php"><button type="button" class="btn btn-warning">Sign-up</button></a>
        </div>
      </div>
    </div>
  </header>
<!-- end menu -->
<!-- slide -->
<div id="carouselExampleIndicators" class="carousel slide mt-1" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAASsAAACoCAMAAACPKThEAAAAZlBMVEUAAAD///9MTEwyMjLu7u6tra2hoaHx8fFiYmLCwsIjIyN2dnZERET29vadnZ0zMzPNzc24uLhubm6RkZFpaWmLi4vm5uZISEhYWFg6OjpAQECoqKgWFhYcHBza2toJCQkqKiqAgIBSQzbbAAABVElEQVR4nO3X226bMACAYTsnRhbnnB62Lm3f/yVHCAGCaNWbyVL3fVfGIpH5FSwnBAAAAAAAAAAAAAAAAAAAAAAAAAAAAIBvLB668T7N0jFsi1lPUYbT7G5ilW+xmcVYtuOfMcbjOt7bhsHEY8bV5lU9/MO0GV9a/ZgPW220atSPf7yO21ZPk87zr2ri96qbeMm74Iyuv5V5PW5b/enfsaomDqOf/d80L9b5NfRaLft3aHVz24XS5LNW2/XiZr386Ku+vSrE7lTXOn3Q6nGwtxe5lppdvBwaJukSodyPthqeGWKmleZXtwov5/o9HG/1vOhewLNWIdyOVSOt+uZahevGPnpmuLPT6uLtoW21mrY2b6+b7mqpVaP80n8crWqHqtVi2GqqVSMVadddPaV92BZ9qZymu4nZe77FAgAAAAAAAAAAAAAAAAAAAAAAAAAAAPx7fwE+awqfiurlxwAAAABJRU5ErkJggg==" style="width: 1920px; height:530px" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="data:image/jpeg;base64,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" style="width: 1920px; height:530px" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="https://i.ytimg.com/vi/VbmIL9HZNEs/maxresdefault.jpg" style="width: 1920px; height:530px" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!-- end slide -->
<!-- list product -->
<div class="container">
	<div class="row mt-5">
		<h2 class="list-product-title">New product</h2>
		<div class="list-product-subtitle">
			<p>List product description</p>
		</div>
		<div class="product-group">
			<div class="row">
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://cdn.discordapp.com/attachments/860460102996590612/989368104150794320/unknown.png "style="width: 280px; height:280px"  alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Lenka - Blue Skies (Revoke remix)</h5>
					    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="MyAudio(this)">
                            <source src="MyAudio/Lenka_-_Blue_Skies_REVOKE_Remix_(getmp3.pro).mp3" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function MyAudio(event){
                                    if(event.currentTime>30){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="https://cdn.discordapp.com/attachments/860460102996590612/989370077889581116/unknown.png" style="width: 280px; height:280px" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <audio controls controlsList="nodownload" style="width: 250px;" ontimeupdate="MyAudio(this)">
                            <source src="MyAudio/Speo_-_Make_A_Stand_feat_Budobo_(getmp3.pro).mp3" type="audio/mpeg">
                            </audio>          
                            <script type="text/javascript">
                                function MyAudio(event){
                                    if(event.currentTime>30){
                                        event.currentTime=0;
                                        event.pause();
                                        alert("Bạn phải trả phí để nghe cả bài")
                                    }
                                }
                            </script>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6 col-12">
					<div class="card card-product mb-3">
					  <img class="card-img-top" src="http://via.placeholder.com/280x280" alt="Card image cap">
					  <div class="card-body">
					    <h5 class="card-title">Product</h5>
					    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
					    <a href="#" class="btn btn-primary">Go somewhere</a>
					  </div>
					</div>
				</div>				
			</div>
		</div>
	</div>
</div>
<!-- end list product -->

<!-- Load jquery trước khi load bootstrap js -->
<script src="jquery-3.3.1.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
</body>

</html>
