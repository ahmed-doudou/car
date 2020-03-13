<?php 
	require('db.php');
include("auth.php");

 ?>
<?php 
	$status ="";
if(isset($_POST['new']) && $_POST['new']==1)
{

$trn_date = date("Y-m-d H:i:s");
$username =$_REQUEST['username'];
$email = $_REQUEST['email'];
$password = $_REQUEST['password'];
$submittedby = $_SESSION["username"];
$ins_query="INSERT into users (`username`,`email`,`password`,`trn_date`) values ('$username','$email','$password','$trn_date')";
mysqli_query($con,$ins_query) or die(mysql_error());
$status = "New Record Inserted Successfully.</br></br><a href='view.php'>View Inserted Record</a>";
}

 ?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Insert New Record</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
<h1>Insert New User</h1>
<form name="form" method="post" action=""> 
<input type="hidden" name="new" value="1" />
<p><input type="text" name="username" placeholder="Enter User Name" required /></p>
<p><input type="email" name="email" placeholder="Enter email" required /></p>
<p><input type="password" name="password" placeholder="Enter password" required /></p>
<p><input name="submit" type="submit" value="Submit" /></p>
</form>
<p><?php echo $status;  ?></p>


</div>
</div>
</body>
</html>