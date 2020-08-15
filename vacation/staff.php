<?php
session_start();
if(!isset($_SESSION['user'])){
	 header('location:logout.php');
}
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/styl.css">
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
	
	<title>staff</title>
</head>
<body>
	<div class="header">
		<h2>VACATION MANAGEMENT SYSTEM</h2>
		<?php 
		
		include("connect.php");
        if (isset($_SESSION['user'])) {

        	echo"WELCOME MR ".$_SESSION['user'];
        	# code...
        }
        if(isset($_POST['apply'])){
        	$choose=$_POST['choosev'];
        	$desc=$_POST['desc'];
        	echo($choose);
        	echo($desc);
        	$_SESSION['success']="successeful inserted";
        	$sql="INSERT INTO vacation(type,title,EmpId)values(:type,:title,:EmpId)";
        	$stmt=$conn->prepare($sql);
        	$res=$stmt->execute(array(
           'type'=>$_POST['choosev'],
           'title'=>$_POST['desc'],
           'EmpId'=> $_SESSION['id']

        	));
        	if($res){
        		echo "inserted";
        	}
        	else{
        		echo "not inserted";
        	}
        }

         ?>
		<img src="images/logo2.png" style="width: 150px;
    	height: 150px;
    	float: left;margin-top: -100px;">
	</div>
	<ul style="background-color: #333;">
		<li><a href="profileview.php">Profile</a></li>
		
		<li><a href="viewnote.php">View Notification</a></li>
		<li style="float: right;"><a href="logout.php" class="active" >SignOut</a></li>
		
           

		</li>
	</ul>
	
		<div class="col-sm-9">
			
			<div style="min-height: 100%;width: 100%;">
				<h3 style="margin-left: 45%;margin-top: 50px">Apply Vacation Here</h3>
				
				
					
					<form method="post" style="border: 1px solid;width: 50%;margin-top: 50px;border-radius: 5px;padding: 16px 8px;margin-left: 35%" action="">
  <div class="form-group">
    <label>Vacation Type</label>
    <select class="form-control" id="choose" name="choosev" >
    	<option value="">Select Vacation Type...</option>
    	<option value="with payment">width payment</option>
    	<option value="No payment">No payment</option>
    </select>
  </div>
  <div class="form-group">
    <label>Description</label>
    <textarea class="form-control"cols="10" name="desc" id="desc" placeholder="Why you need this vacation"></textarea>
  </div>
  
  <button type="submit" class="btn btn-primary" name="apply" style="color: white">Apply</button>
</form> 
				
			</div>
		</div>
	

      <div class="footer">
		<p>Copyright&copy Khalid Bakar Ally</p>
	 </div>
</body>
</html>