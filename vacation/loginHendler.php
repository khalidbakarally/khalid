<?php 
session_start();  
include("connect.php");
if(isset($_POST['login'])){

  

   $username = $_POST['username'];
   $password = $_POST['password'];
    $sql="SELECT * from staff where username=:username and password=:password";
    $stmt=$conn->prepare($sql);
    $stmt->execute(array(
   'username'=>$_POST['username'],
   'password'=>$_POST['password']));
    $count=$stmt->rowCount();
    $data=$stmt->fetch();
    if ($count==1) {
      $_SESSION['user']=$username;
       $_SESSION['pass']=$password;
       $_SESSION['id']=$data['EmpId'];
      $_SESSION['role']=$data['role'];
      if($data['role']=="admin"){
        header('location:Superviser.php');
      }
      else if($data['role']=="staff"){
        header('location:staff.php');
      }
      else if($data['role']=="director"){
        header('location:director.php');
      }

      
          }
          else{
        header('location:logout.php');
      }
}

 ?>