<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/mystyle.css">
	<script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
	<title>profile</title>
</head>
<body>
	<?php 
            session_start();
            include("connect.php");
            
            $user=$_SESSION['user'];
            $pass=$_SESSION['pass'];
            $id=$_SESSION['id'];
            echo('<table class="table table-bordered  table-stripp table-hover" style="width:100%;margin-top:20px">'."\n");
            echo('<tr>');
            echo('<thead class="table-success"><th>EmpId</th><th>Name</th><th>Email</th><th>Date Of Birth</th><th>Phone Number</th><th>User Name</th><th>Password</><th>Role</th></thead>');
            echo('</tr>');
             $sql="SELECT * from staff where EmpId=:id";
             $stmt=$conn->prepare($sql);
             $stmt->execute(array(
             'id'=>$id
             ));
             
             while ( $row = $stmt->fetch(PDO::FETCH_ASSOC) ) {
    echo "<tr><td>";
    echo(htmlentities($row['EmpId']));
    echo("</td><td>");
    echo(htmlentities($row['name']));
    echo("</td><td>");
    echo(htmlentities($row['email']));
    echo("</td><td>");
    echo(htmlentities($row['DOB']));
    echo("</td><td>");
    echo(htmlentities($row['phone']));
    echo("</td><td>");
    echo(htmlentities($row['username']));
    echo("</td><td>");
    echo(htmlentities($row['password']));
    echo("</td><td>");
    echo(htmlentities($row['role']));
    
    echo("</td></tr>\n");
}
            ?>
            </table>

</body>
</html>