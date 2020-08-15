<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript">
		
		function validate(){
			var name=document.getElementById('uname');
			var pass=document.getElementById('pass');
			if(name.value==""){
				name.style.border="1px solid red";
				name.focus();
			}
			else if(pss.value.lenght<2){
				document.getElementById('passvalid').innerHTML="password can not be less tnan";

			}
			return false;

		}
	</script>

	
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<title>vacation</title>
</head>
<body>
	
	<div class="header">
		<h2>VACATION MANAGEMENT SYSTEM</h2>
		<img src="images/logo2.png" style="width: 150px;
    	height: 150px;
    	float: left;margin-top: -130px;">
	</div>
	<ul style="background-color: #333;">
		
		<li style="float: right;"><a type="button" class="active"  data-toggle="modal" data-target="#myModal">Sign In</a></li>
		
           

		</li>
	</ul>
	<div class="container">
		<div class="box">
			<img width="200px" height="290px" src="images/vacation1.jpeg">
			<p>Some where for a wonder full vacation ever</p>

		</div>
		<div class="box" style="margin: 5px;">
			<img width="200px" height="290px" src="images/vacation2.jpeg">
			<p>A beatfull sea for your vacation you must go</p>
		</div>
	
	</div>
	</div>

	<div class="footer">
		<p>Copyright&copy Khalid Bakar Ally</p>
	</div>
	<div class="container"> <!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Sign In Here</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          <form name="login" target="blank"  method="post" action="loginHendler.php" onsubmit="return validate();">
      <div class="form-group">
    <label>User Name</label>
    <input type="text" class="form-control" id="uname" name="username" placeholder="User Name" required="">
   <!--  <span id="validuser" sty></span> -->
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required=""><br><span id="passvalid"></span>
  </div>
   <button type="submit" class="btn btn-primary" name="login">Login</button>
    </form>
        </div>
        
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>
  </div>
	<?php include("regmodal.php");  ?>

</body>
</html>