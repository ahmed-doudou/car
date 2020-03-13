<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "malysia_car";


$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!--DOCTYPE html>
<html>
<body>

$sql = "SELECT id, user_name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    
    while($row = $result->fetch_assoc()) {
    	echo "<h1> LES INFO DES USERS </H1>";
        echo "<br> id: ". $row["id"]. " -User Name: ". $row["user_name"]. "<br>";
    }
} else {
    echo "0 results";
}

$conn->close();



<div>
	<form action="" method="POST">
		<input type="text" name="user_name" placeholder="user_name"><br>
		<input type="password" name="password" placeholder="password"><br>
		<input type="email" name="email" placeholder="email"><br>
		<input type="submit" name="submit"value="Insert">
	</form>
	<?php

		if (!isset($_POST["submit"])) {
			$user_name = $_POST['user_name'];
			$email = $_POST['email'];
			$password = $_POST['password'];

			 if ($user_name !='' || $password !='' || $email !='')  
			 {
			 	$query = mysql_query("INSERT INTO users values( ,'$user_name', '$password', '$email'");
			 echo "<br/><br/><span>Data Inserted successfully...!!</span>";
			}else{
echo "<p>Insertion Failed <br/> Some Fields are Blank....!!</p>";
}
	} 
		
		
		?>
</div>
</body>
</html
<div class="container">
	<h3>Add User</h3>
	<form action="" method="post">
		<input type="text" name="user_name" placeholder="User Name" required>
		<input type="password" name="password" placeholder="password " required>
		<input type="email" name="email" placeholder="Email " required>
		
		<button type="submit" name="submit">Submit</button>
	</form>
</div>
<?php 
$host = "localhost";
$user = "root";
$pass = "";
$db = "malysia_car";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

if(isset($_POST['submit']))
{
	if ($_POST['user_name'] !='' || $_POST['password'] !=''  || $_POST['email'] !='') {
		$user_name 	= $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
	
		$sql = "INSERT INTO users (user_name, password, email) values ('".$user_name."', '".$password."', '".$email."')";
	
		$result = mysqli_query($conn, $sql);
	
			if($result)
		{
			echo "Post has been saved successfully";
		}
			else
		{
			echo "Unable to save post";
		}
	}
	
	
}

?>
-->

<!--#########################################################################################
	#########################################################################################

<?php

$host = "localhost";
$user = "root";
$pass = "";
$db = "malysia_car";
 
$conn = mysqli_connect($host,$user,$pass, $db);
if(!$conn)
{
	die("Connection failed: " . mysqli_connect_error());
}

session_start();

//for logout
if(isset($_POST["submit"]))
{
	if((isset($_POST['user_name']) && $_POST['user_name'] !='') && (isset($_POST['password']) && $_POST['password'] !=''))
{
	$sql = "SELECT * from users where user_name = '".$_POST['user_name']."' and password = '".$_POST['password']."'";
	echo "user ". $id. "";
	
	if(!$result = $conn->query($sql)){
		die('There was an error running the query [' . $db->error . ']');
	}
	
	if($result->num_rows > 0)
	{
		//create session for user
		$_SESSION['user_name'] = $_POST['user_name'];
	}
	else
	{
		$error_msg = "Wrong user_name or password";
	}

}
	
	
}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
<div class="container">
	<div class="form-cont">
		<form name="myForm" id="loginForm" method="POST" action="">
		<input type="text" name="user_name" placeholder="Type your user_name" id="user_name"/> 
		<input type="password" name="password" placeholder="Type your Password" id="password"/>
		<input type="submit" id="submit-frm" value="Submit" />
		</form>
	</div>
</div>
</body>
</html>
-->

	