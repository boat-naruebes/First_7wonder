<?php 
error_reporting(0);
  if ($_GET["page"] == "") { 
    header( "location: home.php?page=firstpage" );
  } 
?>

<html lang="en">
  <head>
  <meta http-equiv=Content-Type content="text/html; charset=utf-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/hakko.css">
    <link rel="stylesheet" href="assets/css/mdb.min.css">
    <link rel="stylesheet" href="assets/css/mdb.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap.css">

    <link rel="shortcut icon" href="favicon.ico"/>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
    <title>7สิ่งมหัศจรรย์ของโลก</title>


    <style>
      @import url('https://fonts.googleapis.com/css?family=Kanit');

      body {
        font-family: 'Kanit', sans-serif;
      }

      h4 {
        font-family: 'Kanit', sans-serif;
      }

      h5 {
        font-family: 'Kanit', sans-serif;
      }
      
      .navbar-nav.navbar-center {
    position: absolute;
    left: 50%;
    transform: translatex(-50%);
}

      .animation {
        -webkit-animation: mover 1s infinite  alternate;
        animation: mover 1s infinite  alternate;
    }
    
    @-webkit-keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-10px); }
    }
    @keyframes mover {
        0% { transform: translateY(0); }
        100% { transform: translateY(-10px); }
    }

    h6 {
  font-size: 10px;
}
.swal2-styled {
	border-radius: 0px !important;
}
      </style>
  </head>


  <body>

  <nav class="navbar navbar-expand-lg navbar-light light-color">
<div class="container">

  <a class="navbar-brand" href="#"><img src="https://basdysaler0.files.wordpress.com/2014/11/p1.png" width="30" height="30" aria-hidden="true"> สิ่งมหัศจรรย์ของโลก</a>

  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item <?php if($_GET["page"] == "firstpage") { echo "active"; } ?>">
        <a class="nav-link" href="?page=firstpage"><i class="fa fa-home"></i> หน้าแรก</a>
      </li>

      <li class="nav-item <?php if($_GET["page"] == "pageold") { echo "active"; } ?>">
        <a class="nav-link" href="?page=pageold"><i class="fas fa-place-of-worship"></i> ยุคเก่า</a>
      </li>
      <li class="nav-item <?php if($_GET["page"] == "pagemiddle") { echo "active"; } ?>">
        <a class="nav-link" href="?page=pagemiddle"><i class="fa fa-star"></i> ยุคกลาง</a>
      </li>
      <li class="nav-item <?php if($_GET["page"] == "pagenew") { echo "active"; } ?>">
        <a class="nav-link" href="?page=pagenew"><i class="fas fa-map-marker-alt"></i> ยุคใหม่</a>
      </li>
    </ul>
  </div>

  </div>
</nav>

<br>
<div class="hakko-animate-top">

<div class="container">
  <div class="card" style="padding: 10px;">
		<marquee>| ยินดีต้อนรับเข้าสู่เว็บไซต์ |</marquee>
	</div>
<br>

<?php
  switch ($_GET["page"]) {
	case 'firstpage': require("page/firstpage.php"); break;
	case 'pageold': require("page/pageold.php"); break;
	case 'pagemiddle': require("page/pagemiddle.php"); break;
  case 'pagenew': require("page/pagenew.php"); break;

	default: require("page/firstpage.php"); break;
  }
?>

    



</div>

 <?php 
include("page/footer.php"); ?>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/i.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/i.js"></script>
    <script src="assets/js/mdb.js"></script>
    <script src="assets/js/mdb.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
 </body>
</html>