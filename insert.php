<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname) OR die("Connection Failed.");
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile = $_POST['mobile'];
	$password = $_POST['password'];
	$department = $_POST['department'];

	$sql = "INSERT INTO `teacher`(`name`, `email`, `mobile`, `pass`, `department`) VALUES ('{$name}','{$email}','{$mobile}','{$password}','{$department}')";
  $result = mysqli_query($conn,$sql) OR die("Query Failed.");

    if($result){ 
      header("Location:show.php");
    }else{
      echo "<p style='color:red;text-align:center;margin: 10px 0;'>Can't Insert User.</p>";
    }          

}

 ?>