<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/mystyle.css">
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <title>view</title>
</head>
<body>
    <?php include("header.php"); 
    include("nav.php");
    

    ?>
    <?php 
            session_start();
            include("connect.php");
            
            $user=$_SESSION['user'];
            $pass=$_SESSION['pass'];
            echo('<table class="table table-bordered  table-stripp table-hover" style="width:100%;margin-top:20px">'."\n");
            echo('<tr>');
            echo('<thead class="table-success"><th>EmpId</th><th>Name</th><th>Email</th><th>Date Of Birth</th><th>Phone Number</th><th>User Name</th><th>Password</><th>Role</th><th>Edit</th><th>Delete</th></thead>');
            echo('</tr>');
             $sql="SELECT * from staff";
             $stmt=$conn->query($sql);
             
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
    echo("</td><td>");
    echo('<a class="btn btn-info" href="Edit.php?edit_id='.$row['EmpId'].'">Edit</a>');
    echo("</td><td>");
    echo('<a class="btn btn-danger" href="delete.php?delete_id='.$row['EmpId'].'">Delet</a>');
    echo("</td></tr>\n");
}
            ?>
            </table>

            <?php include("footer.php") ; ?>

</body>
</html>



           <!-- <a href="add.php" style="margin-left: 260px">Add New</a> -->