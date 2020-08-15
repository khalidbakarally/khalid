<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/styl.css">
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/jquery-3.5.1.min.js"></script>
    <title>Notification</title>
</head>
<body>
    <?php 
            session_start();
            include("connect.php");
            
            $user=$_SESSION['user'];
            $pass=$_SESSION['pass'];
            echo('<table class="table table-bordered  table-stripp table-hover" style="margin-top:20px";margin-left:45%>'."\n");
            echo('<tr>');
            echo('<thead class="table-success"><th>VacationId</th><th>Staff Name</th><th>Type</th><th>Title</th><th>Status</th></thead>');
            echo('</tr>');
             $sql="SELECT * from staff,vacation where staff.EmpId=vacation.EmpId";
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
    echo("</td></tr>");
    
    

}
?>

</body>
</html>