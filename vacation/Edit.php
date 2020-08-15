<?php 
session_start();
include("connect.php");

if(isset($_GET['edit_id'])){
	$id=$_GET['edit_id'];

$sql="SELECT * FROM staff where EmpId=:id";
$stmt=$conn->prepare($sql);
$res=$stmt->execute(array(
"id"=>$id



));
$res=$stmt->fetch(PDO::FETCH_ASSOC);
$eid=$res['EmpId'];
$name=$res['name'];
$email=$res['email'];
$date=$res['DOB'];
$phone=$res['phone'];
$uname=$res['username'];
$pass=$res['password'];
$role=$res['role'];

}
if (isset($_POST['edit'])) {

	$sql="UPDATE staff set name=:name,email=:email,DOB=:dob,phone=:phone,username=:username,password=:password,role=:role where EmpId=:id";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array(
    'name'=>$_POST['name'],
    'email'=>$_POST['Email'],
    'dob'=>$_POST['date'],
    'phone'=>$_POST['Phone'],
    'username'=>$_POST['username'],
    'password'=>$_POST['Password'],
    'role'=>$_POST['role'],
    'id'=>$_POST['EmpId']

	));
	header('location:View.php');
	# code...
}

 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
 	<title>edit</title>
 </head>
 <body>
 	<div class="container">
 	<form target="blank" method="post" >
      
        <div class="form-group">
          <label >Employement Id</label>
          <input type="text" name="EmpId"class="form-control" value="<?php echo($eid) ?>" required="">
        </div>
        
        
          <div class="form-group">
            
            <label>Name</label>
          <input type="text" id="name" name="name" class="form-control" value="<?php echo($name) ?>" required><br>
          <span id="validname" style="color: red"></span>
          </div>

        <div class="form-group">
          

          <label>Email</label>
          <input type="Email" name="Email" class="form-control" value="<?php echo($email) ?>" required>

        
        
        </div>
        
        <div class="form-group">
          
          <label>Date Of Birth</label>
         <input type="date" name="date" class="form-control" value="<?php echo($date) ?>" required>

       
        </div>
        <div class="form-group">
          
          <label>Phone Number</label>
          <input type="text" name="Phone" class="form-control" value="<?php echo($phone) ?>" required>

       
        </div>
        <div class="form-group">
          
          <label>User Name</label>
          <input type="" name="username" class="form-control" value="<?php echo($uname) ?>" required>

        
        </div>
         <div class="form-group">
          
          <label>Password</label>
          <input type="Password" name="Password" class="form-control"value="<?php echo($pass) ?>" required>

        
        </div>
        <div class="form-group">
          
          <label>Role</label>
          <input type="text" name="role" class="form-control" value="<?php echo($role) ?>" required>

        
        </div>
          
         
          
       
       
         <input type="submit" class="btn btn-primary" value="Edit" name="edit" onclick="return confirm('Are you sure you want to edit')">
        
            <input type="reset" class="btn btn-primary" value="Reset" name="reset">
        
      
    </form>
</div>
<!-- <script type="text/javascript">
	
	function validate() {
		var name=document.getElementById('name');
		var vnam=document.getElementById('validname');


		if(name.value==""){
			vnam.innerHTML="name must be filled";
		}
		// 
		return false;
	}
</script> -->

 
 </body>
 </html>