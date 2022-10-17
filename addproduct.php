<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>

    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Add Product</title>
    <style>
      html, body {
      min-height: 100%;
      }
      body, div, form, input, select, textarea, label, p { 
      padding: 0;
      margin: 0;
      outline: none;
      font-family: Roboto, Arial, sans-serif;
      font-size: 14px;
      color: #666;
      line-height: 22px;
      }
      h1 {
      position: absolute;
      margin: 0;
      font-size: 40px;
      color: #fff;
      z-index: 2;
      line-height: 83px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .testbox {
      display: flex;
      justify-content: center;
      align-items: center;
      height: inherit;
      padding: 20px;
      }
      .item form {
      width: 100%;
      padding: 20px;
      border-radius: 6px;
      background: #fff;
      box-shadow: 0 0 8px  #669999; 
      }
      .banner {
      position: relative;
      height: 300px;
      background-image: url("/uploads/media/default/0001/02/2d2ed84e0a2678357d5885b627ccd03a35d3c54c.jpeg");  
      background-size: cover;
      display: flex;
      justify-content: center;
      align-items: center;
      text-align: center;
      }
      .banner::after {
      content: "";
      background-color: rgba(0, 0, 0, 0.2); 
      position: absolute;
      width: 100%;
      height: 100%;
      }
      .item input, select, textarea {
      margin-bottom: 10px;
      border: 1px solid #ccc;
      border-radius: 3px;
      }
      .item input {
      width: calc(100% - 10px);
      padding: 5px;
      }
      input[type="date"] {
      padding: 4px 5px;
      }
      textarea {
      width: calc(100% - 12px);
      padding: 5px;
      }
      .item:hover p, .item:hover i, .question:hover p, .question label:hover, input:hover::placeholder {
      color:  #669999;
      }
      .item input:hover, .item select:hover, .item textarea:hover {
      border: 1px solid transparent;
      box-shadow: 0 0 3px 0  #669999;
      color: #669999;
      }
      .item {
      position: relative;
      margin: 10px 0;
      }
      .item span {
      color: red;
      }
      .week {
      display:flex;
      justfiy-content:space-between;
      }
      .colums {
      display:flex;
      justify-content:space-between;
      flex-direction:row;
      flex-wrap:wrap;
      }
      .colums div {
      width:48%;
      }
      .item input[type="date"]::-webkit-inner-spin-button {
      display: none;
      }
      .item i, input[type="date"]::-webkit-calendar-picker-indicator {
      position: absolute;
      font-size: 20px;
      color:  #a3c2c2;
      }
      .item i {
      right: 1%;
      top: 30px;
      z-index: 1;
      }
      .item input[type=radio], input[type=checkbox]  {
      display: none;
      }
      label.radio {
      position: relative;
      display: inline-block;
      margin: 5px 20px 15px 0;
      cursor: pointer;
      }
      .question span {
      margin-left: 30px;
      }
      .question-answer label {
      display: block;
      }
      label.radio:before {
      content: "";
      position: absolute;
      left: 0;
      width: 17px;
      height: 17px;
      border-radius: 50%;
      border: 2px solid #ccc;
      }
      .item input[type=radio]:checked + label:before, label.radio:hover:before {
      border: 2px solid  #669999;
      }
      label.radio:after {
      content: "";
      position: absolute;
      top: 6px;
      left: 5px;
      width: 8px;
      height: 4px;
      border: 3px solid  #669999;
      border-top: none;
      border-right: none;
      transform: rotate(-45deg);
      opacity: 0;
      }
      .item input[type=radio]:checked + label:after {
      opacity: 1;
      }
      .flax {
      display:flex;
      justify-content:space-around;
      }
      .submit {
      margin-top: 10px;
      text-align: center;
      }
      .submit input {
      width: 150px;
      padding: 10px;
      border: none;
      border-radius: 5px; 
      background:  #669999;
      font-size: 16px;
      color: #fff;
      cursor: pointer;
      }
      .submit input:hover {
      background:  #a3c2c2;
      }
      @media (min-width: 568px) {
      .name-item, .city-item {
      display: flex;
      flex-wrap: wrap;
      justify-content: space-between;
      }
      .name-item input, .name-item div {
      width: calc(50% - 20px);
      }
      .name-item div input {
      width:97%;}
      .name-item div label {
      display:block;
      padding-bottom:5px;
      }
      }
    </style>
</head>
<body>
  <?php
  $connect= mysqli_connect('localhost','root','','musicwebsite'); 
  ?>
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
                      <a class="dropdown-item" href="#">Add Music</a>
                      <a class="dropdown-item" href="Addsinger.php">Add Singer</a>
                      <div class="dropdown-divider"></div>
                      <a class="dropdown-item" href="songmanager.php">Song Manager</a>
                  </div>
              </li>
        </ul>

        <form class="col-12 col-lg-auto mb-3 mb-lg-0 me-lg-3">
          <input type="search" class="form-control" placeholder="Search..." aria-label="Search">
        </form>
        <!-- &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp -->
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
    <div class="testbox">
      <form action="" method="post">
        </div>
        <div class="banner">
          <h1>Add music</h1>
        </div>
        <br/>
        <p>
        </p>
        <br/>
        <div class="colums">
          <div class="item">
          
            <label for="fname"> Song Name<span>*</span></label>
            <input id="fname" type="text" name="song_name" />
          </div>
          <div class="item">
            <label for="visit">Song Description<span>*</span></label>
            <input id="visit" type="text" style="height:80px" name="song_description" />
          </div>
          <div class="item">
            <label for="lname"> Song Price (VNĐ)<span>*</span></label>
            <input id="lname" type="text" name="song_price" />
          </div>
          <div class="item">
            <label for="title">Song Audio (mp3)<span>*</span></label>
            <input id="title" type="file" name="song_audio" />
          </div>
          <div class="item">
            <label for="org">Song Image<span>*</span></label>
            <input id="org" type="file"   name="song_img" />
          </div>
          <div class="item">
            <label for="org">Singer<span>*</span></label>
            <select name='singer_id'>
							<?php 
								
								$sql3 = 'select * from singer';
								$result3 = mysqli_query($connect, $sql3);
								while($row_singer =  mysqli_fetch_array($result3)){
									$singer_id =$row_singer['singer_id'];
									$singer_name =$row_singer['singer_name'];
									echo "<option value='$singer_id'>$singer_name</option>";		
								}
							?>
						</select>

          
          </div>
        </div>
        <h3 >Category</h3>
        <div class="week">
          
          <div class="question">
          <h4>Pop</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_1" name="Pop"/>
                <label for="radio_1" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_2" name="Pop"/>
                <label for="radio_2" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          
          <div class="question">
            <h4>Hip hop &nbsp&nbsp</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_3" name="Hip_hop"/>
                <label for="radio_3" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_4" name="Hip_hop"/>
                <label for="radio_4" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Rock</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_5" name="Rock"/>
                <label for="radio_5" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_6" name="Rock"/>
                <label for="radio_6" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Rhythm &nbsp&nbsp</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_7" name="Rhythm"/>
                <label for="radio_7" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_8" name="Rhythm"/>
                <label for="radio_8" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Funk</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_9" name="Funk"/>
                <label for="radio_9" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_10" name="Funk"/>
                <label for="radio_10" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Jazz</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_11" name="Jazz"/>
                <label for="radio_11" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_12" name="Jazz"/>
                <label for="radio_12" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Disco</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_13" name="Disco"/>
                <label for="radio_13" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_14" name="Disco"/>
                <label for="radio_14" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Classical &nbsp&nbsp </h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_15" name="Classical"/>
                <label for="radio_15" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_16" name="Classical"/>
                <label for="radio_16" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Electronic &nbsp&nbsp </h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_17" name="Electronic"/>
                <label for="radio_17" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_18" name="Electronic"/>
                <label for="radio_18" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Traditional &nbsp&nbsp</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_19" name="Traditional"/>
                <label for="radio_19" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_20" name="Traditional"/>
                <label for="radio_20" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
          <div class="question">
            <h4>Independent</h4>
            <div class="question-answer">
              <div>
                <input type="radio" value="1" id="radio_21" name="Independent"/>
                <label for="radio_21" class="radio"><span>Yes</span></label>
              </div>
              <div>
                <input  type="radio" value="0" id="radio_22" name="Independent"/>
                <label for="radio_22" class="radio"><span>No</span></label>
              </div>
            </div>
          </div>
        </div>
          <!-- Search -->
          <!-- <select>
            <option selected value="" disabled selected></option>
            <option value="b" >Beef</option>
            <option value="ch">Chicken</option>
            <option value="v">Vegetarian</option>
            <option value="n">None</option>
          </select> -->
        
        <div class="submit">
          <input type="submit" name="add_product" id="" value="Add Product">
        </div>
        <?php
          if(isset($_POST['add_product'])){
            $song_name = $_POST['song_name'];
            $song_description = $_POST['song_description'];
            $song_price = $_POST['song_price'];
            $song_audio = $_POST['song_audio'];
            $song_img = $_POST['song_img'];
            $Pop = $_POST['Pop'];
            $Hip_hop = $_POST['Hip_hop'];
            $Rock = $_POST['Rock'];
            $Rhythm = $_POST['Rhythm'];
            $Funk = $_POST['Funk'];
            $Jazz = $_POST['Jazz'];
            $Disco = $_POST['Disco'];
            $Classical = $_POST['Classical'];
            $Electronic = $_POST['Electronic'];
            $Traditional = $_POST['Traditional'];
            $Independent = $_POST['Independent'];
            $singer_id=$_POST['singer_id'];
            $sql = "INSERT INTO song VALUES('','$song_name','$song_description','$song_price','$song_audio','$song_img','$Pop','$Hip_hop','$Rock','$Rhythm','$Funk','$Jazz','$Disco','$Classical','$Electronic','$Traditional','$Independent','$singer_id')";
            $result = mysqli_query($connect,$sql);
            if($result){
              ?> <script>
                  alert("Add successful");
              </script>
              <?php
            }else{
              echo"This product was existed";
            }
          }
          
          ?>
      </form>
    </div>

</body>
</html>
