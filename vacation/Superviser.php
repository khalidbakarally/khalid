 <?php 
session_start();


if(!isset($_SESSION['user'])){
   header('location:logout.php');
}

include("regmodal.php");

  ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <style type="text/css">
        html
        {
            height: 100%;
        }
        body{

    font-family: 'Roboto',san-serif;
     margin: 0;
    padding: 0;
    min-height: 100%;
    display: flex;
    flex-direction: column;

}
*{

    margin: 0;
    padding: 0;
    list-style: none;
    text-decoration: none;

}
.sidebar{

    position: fixed;
    left: 0;
    width: 250px;
    height: 100%
    background-color:#042331;
    margin-top: 0px

}
.sidebar header{

    font-size: 22px;
    color: white;
    text-align: center;
    line-height: 70px;
    background:#063146;
    user-select: none;
}
.sidebar ul a{

    display: block;
    height: 100%;
    width: 100%;
    line-height: 65px;
    font-size: 20px;
    color: white;
    padding-left: 40px;
    box-sizing: border-box;
    border-top: 1px solid rgba(255,255,255,.1);
    border-bottom: 1px solid black;
    transition: .4s;
    list-style: none;
    text-decoration: none;
    background-color:#042331;

   
}
ul li:hover a{

    padding-left: 50px;

}
.sidebar ul a i{
    margin-right: 16px;
}
.footer {
    background-color: black;
    text-align: center;
    padding: 10px;
    margin-top: auto;
    color: white;
}
#check{
    display: none;
}
label #btn,label #cancel{
    position: absolute;
    cursor: pointer;
    background:#042331;
}
label #btn{
    left: 40px;
    top: 25px;
    font-size: 35px;
    color: white;
}
    </style>

	<title>Supervisor</title>
</head>
<body>
  <?php
  include("header.php");
  include("nav.php");

  
  ?>
    
   
<!-- <input type="checkbox" id="check">
<label for="check">
    <i class="fas fas-bars" id="btn"></i>
    <i class="fas fas-times" id="cancel"></i>
</label> -->

    <div class="container">
    <div class="sidebar" style="">
         
         <header>vacation</header>
         <ul>
             
             <li><a href="Superviser.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
             <li><a href="profileview.php"><i class="fas fa-link"></i>Profile</a></li>
             <li><a href="#"><i class="fas fa-stream "></i>Vacation</a></li>
             <li><a href="viewnote.php"><i class="fas fa-calender-week"></i>Aprove Request</a></li>
             <li><a href="View.php"><i class="fas fa-question-circle"></i>View Staff</a></li>
             <li><a href="#"><i class="fas fa-slider-h"></i>About</a></li>
             <li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li>
         </ul>
     </div>
  
     

     
         
         
           <!-- <a href="add.php" style="margin-left: 260px">Add New</a> -->
     
 </div>
	<?php include("footer.php"); ?>
			
        </body>
        </html>