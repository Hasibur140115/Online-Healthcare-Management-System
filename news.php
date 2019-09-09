<!DOCTYPE html>
<?php include("func.php");?>
<html>
<head>

<title>News Center</title>
<meta charset="utf-8"> 
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

<link href='https://fonts.googleapis.com/css?family=Alfa Slab One' rel='stylesheet'>

<link href="doc.css" rel="stylesheet" />

</head>
<body>

<!-- Menu Bar -->
<nav class="navbar navbar-expand-lg navbar navbar-light " style="background-color: #23415C;">
  <a class="navbar-brand" href="#" style="color: white;"><h3>E_Hospital BD</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent" style="padding: 6px;">
    <ul class="navbar-nav mr-auto" style=" padding-right: 5px;">
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="color: #fff;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          About Us
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #232827;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #232827;">Goal & Objective</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Message For You </a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Future Plan</a>
          <a class="dropdown-item" href="#"style="color: #fff;background-color: #222827;">Our Purpose</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color: #fff; ">
          Our srevice
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown" style="background-color: #222829;">
          <a class="dropdown-item" href="sr.php"style="color: #fff;background-color: #222829;">Service Center</a>
          <a class="dropdown-item" href="test_center.php"style="color: #fff;background-color: #222829;">Test & Charges </a>
          <a class="dropdown-item" href="medicine_center.php"style="color: #fff;background-color: #222829;">Medicine Center</a>
          <a class="dropdown-item" href="blood_center.php"style="color: #fff;background-color: #222829;">Blood Center</a>
          <a class="dropdown-item" href="ambulance.php"style="color: #fff;background-color: #222829;">Ambulance Service</a>
        </div>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="dr.php"style="color: #fff;">Doctors</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="branch.php"style="color: #fff;">Branches</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="gallery.php"style="color: #fff;">Gallery</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="news.php"style="color: #fff;">News</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="contact.php" style="color: #fff;">Contact</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php"style="color: #fff;">LogIn</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" style="padding-right: 6px;">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-primary my-2 my-sm-0" type="submit" >Search</button>
    </form>
  </div>
</nav>

<!-- Fixed Font -->

<div id="home">
    <div class="landing-text">
      <h1>HOSPITAL</h1>
      <h3>The E_hospital is Only for You.</h3>
      <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">learn More</a></button>
      <h2><b>Get A Doctor Appoinment</b></h2>
    <button type="button" class="btn btn-outline-secondary "><a class="btn btn-default btn-sm" href="">appoinment</a></button>  
    </div>
 </div>
<!-- Fixed Body -->


<!-- Find Doctor -->
<div class="container-fluid" style="margin-top: 25px;">
 
    <div class="col"> 
      <center>
        <h2 style="font-family:'Alfa Slab One';"><marquee behavior="scroll" direction="right">Our News Center</marquee></h2>
      </center>
       </div>

</div><br><br>
<!-- Alignment -->
<div class="container" >
  <!-- Button to Open the Modal -->
    <div class="row">
    	<div class="col-sm-8">
    		 <button type="button" class="btn btn-outline-dark btn-block" data-toggle="modal" data-target="#myModal1" ><marquee behavior="scroll" direction="right">
   <?php display_news_heading1(); ?></marquee>
  </button><br>
 
      <button type="button" class="btn btn-outline-primary btn-block" data-toggle="modal" data-target="#myModal2">
    <marquee behavior="scroll" direction="right"><?php display_news_heading2(); ?></marquee>
  </button><br>
  <button type="button" class="btn btn-outline-warning btn-block" data-toggle="modal" data-target="#myModal3">
    <marquee behavior="scroll" direction="right"><?php display_news_heading3(); ?></marquee>
  </button><br>


      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal4">
    <marquee behavior="scroll" direction="right"><?php display_news_heading4(); ?></marquee>
  </button><br>

      <button type="button" class="btn btn-outline-secondary btn-block" data-toggle="modal" data-target="#myModal5">
    <marquee behavior="scroll" direction="right"><?php display_news_heading5(); ?></marquee>
  </button><br>


      <button type="button" class="btn btn-outline-success btn-block" data-toggle="modal" data-target="#myModal6">
    <marquee behavior="scroll" direction="right"><?php display_news_heading6(); ?></marquee>
  </button><br>

      <button type="button" class="btn btn-outline-danger btn-block" data-toggle="modal" data-target="#myModal7">
    <marquee behavior="scroll" direction="right"><?php display_news_heading7(); ?></marquee>
  </button><br>
    	</div>
    	<div class="col-sm-4 text-center" style="padding: 25px;">
    		<div style="position: center;">
    			<h3>Our News Center</h3>
    		<p style="text-align: justify;">We are always get the update massage in this secter. and the all hospital news are available here.</p>
    		
    		</div>		
    	</div>   
   </div>
</div>

<div class="container-fluid" >
	<div class="card-deck" style="margin:50px;">
		<div class="card">
			<img src="images/a5.jpg" style="width: 100%;height: 300px;">
			<div class="card-body">
				Our internal News for People....
			</div>
		</div>
		<div class="card">
			<img src="images/a19.jpg" style="width: 100%; height: 300px;">
			<div class="card-body">
				our external News for People....
			</div>
		</div>

		
	</div>
</div>

<!-- dr profile-->
<div class="modal fade" id="myModal1">
    <?php display_news1(); ?>
  </div>
<div class="modal fade" id="myModal2">
    <?php display_news2(); ?>
  </div>
  <div class="modal fade" id="myModal3">
    <?php display_news3(); ?>
  </div>
<div class="modal fade" id="myModal4">
    <?php display_news4(); ?>
  </div>
  <div class="modal fade" id="myModal5">
    <?php display_news5(); ?>
  </div>
<div class="modal fade" id="myModal6">
    <?php display_news6(); ?>
  </div>
  <div class="modal fade" id="myModal7">
    <?php display_news7(); ?>
  </div>



<!-- Alignment -->



<!-- Alignment -->

<!-- Alignment -->

<!-- drr -->

<!-- footer -->

<footer class="container-fluid text-center">
    <div class="row">
      <div class="col-sm-4">
        <h4>Contact</h4>
        <br>
        <p>House #48/5, Road # 5, Dakkhin Bishil, Mirpur-1, Dhaka-1216, Bangladesh </p>
        <p>Phone : +880 1754001091</p>
        <p>E-mail : hasibur140115@gmail.com</p>
      </div>
      <div class="col-sm-4">
        <h4>Our Social Link</h4>
        <br>
        <div class="icon-bar text-center" id="s-n" >
  <a class="active" href="#"><i class="fab fa-facebook"></i></a> 
  <a href="#"><i class="fab fa-google" ></i></a> 
  <a href="#"><i class="fab fa-twitter" ></i></a>
  <a href="#"><i class="fab fa-youtube" ></i></a>
</div>
      </div>
      <div class="col-sm-4">
        <h4>WE ARE </h4>
        <br>
        <img src="images/m1.jpg" class="rounded-circle" style="height: 120px; width: 120px;" >
      </div>
    </div><br>
  <div>
       <center><p style="font-size: 13px;color: white;">@Copyright By Hasibur Rahman </p></center>
  </div>
  </footer>

<!-- jquary in body -->



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

<link rel='stylesheet' href='https://use.fontawesome.com/releases/v5.7.0/css/all.css' integrity='sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ' crossorigin='anonymous'>

</body>
</html>