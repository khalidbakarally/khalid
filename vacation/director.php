
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
    min-height: 100vh;
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
    margin-top: 0px;

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
	<title>Director</title>
</head>
<body>
	<div class="header" style="text-align: center;height: 82px;padding: 16px;">
        <h3>WELCOME TO MY SYSREM</h3>
    </div>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      
      <li class="nav-item">
        <a type="button" class="nav-link" data-toggle="modal" data-target="#regModal">Add Staff</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="logout.php">SignOut</a>
      </li>    
    </ul>
  </div>  
</nav>
<br>
<div class="container">
  <div style="margin-left: 20%">
  <?php 
            
            include("connect.php");
            
            $user=$_SESSION['user'];
            $pass=$_SESSION['pass'];
            echo('<table class="table table-bordered  table-stripp table-hover" style="margin-top:20px";margin-left:45%>'."\n");
            echo('<tr>');
            echo('<thead class="table-success"><th>VacationId</th><th>Staff Name</th><th>Type</th><th>Title</th><th>Status</th><th>Approve<th>Deny</th></th></thead>');
            echo('</tr>');
             $sql="SELECT * from staff,vacation where staff.EmpId=vacation.EmpId ";
             $stmt=$conn->prepare($sql);
             $stmt->execute();
             
             while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['vac_id']));
    echo("</td><td>");
    echo(htmlentities($row['name']));
    echo("</td><td>");
    echo(htmlentities($row['type']));
    echo("</td><td>");
    echo(htmlentities($row['title']));
    echo("</td><td>");
    echo(htmlentities($row['status']));
    echo("</td><td>");
    echo('<a class="btn btn-info" href="?approve_id='.$row['vac_id'].'">Approve</a>');
    echo("</td><td>");
    echo('<a class="btn btn-danger" href="?deny_id='.$row['vac_id'].'">Deny</a>');
    echo("</td></tr>\n");
  }

if(isset($_GET['approve_id'])){
  $apid=$_GET['approve_id'];
  $sql="UPDATE vacation set status='Accepted',ready='Not readed'";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
if(isset($_GET['deny_id'])){
  $apid=$_GET['deny_id'];
  $sql="UPDATE vacation set status='Reject',ready='Not readed'";
  $stmt=$conn->prepare($sql);
  $stmt->execute();
}
    ?>
  </table>
</div>
    <div class="sidebar" style="margin-top: -214px">
         
         <header>vacation</header>
         <ul>
             
             <li><a href="director.php"><i class="fas fa-qrcode"></i>Dashboard</a></li>
             <li><a href="profileview.php"><i class="fas fa-link"></i>Profile</a></li>
             <li><a href="#"><i class="fas fa-stream "></i>Vacation</a></li>
             <li><a href="viewnote.php"><i class="fas fa-calender-week"></i>Aprove Request</a></li>
             <li><a href="add.php"><i class="fas fa-question-circle"></i>Add Staff</a></li>
             <li><a href="#"><i class="fas fa-slider-h"></i>About</a></li>
             <li><a href="#"><i class="fas fa-envelope"></i>Contact</a></li>
         </ul>
     </div>
 </div>
  <div class="footer">
     <h5>Copy Right&copykhalid bakar ally</h5>   
    </div>

</body>
</html>