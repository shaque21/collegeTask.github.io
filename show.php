<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Insert Info and Display Info</title>
	<link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
	<style>
		
		.data-content{
			height: 100%;
			width: 100%;
			text-align: center;
		}
		.data-content .table{
			display: flex;
			justify-content: center;
			align-items: center;
			padding: 50px;
		}
		.data-content .table .content-table{
			font-size: 18px;
			font-weight: 400;
			font-family: Roboto, Arial, sans-serif;
			border-collapse: collapse;
		}
		.data-content .table .content-table thead tr{
			background-color: #0be881;
			color: #fff;
			text-align: left;
			font-weight: bold;
		}
		.data-content .table .content-table th,
		.data-content .table .content-table td{
			padding: 12px 15px;
		}
		.data-content .table .content-table tbody tr{
			border-bottom: 1px solid #888;
		}
		.data-content .table .content-table tbody tr:nth-of-type(even){
			background-color: #dfe4ea;
		}
		.data-content .btn{
			outline: 0;
			text-decoration: none;
			padding: 15px 30px;
			background-color: #0be881;
			text-transform: uppercase;
			letter-spacing: 1px;
			border-radius: 6px;
			font-family: Roboto, Arial, sans-serif;
			font-weight: 500;
			color: #fff;
			transition: all .2s linear;
		}
		.data-content .btn:hover{
			background-color: #05c46b;
		}
 
	</style>
</head>
<body>
<?php 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = mysqli_connect($servername, $username, $password,$dbname) OR die("Connection Failed.");

$sql = "SELECT * FROM `teacher`";

$result = mysqli_query($conn,$sql) OR die("Query Failed.");

?>
	<div class="data-content">
		<div class="table">
			<?php if(mysqli_num_rows($result) > 0){ ?>
			<table class="content-table">
				<thead>
					<tr>
						<th>SL No.</th>
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Department</th>
					</tr>
				</thead>
				<?php
				$i=1;
				 while($row = mysqli_fetch_assoc($result)){

					?>
				<tbody>
					<tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $row['name']; ?></td>
						<td><?php echo $row['email']; ?></td>
						<td><?php echo $row['mobile']; ?></td>
						<td><?php echo $row['department']; ?></td>

					</tr>
				</tbody>
				<?php
				$i++;
				 } ?>
			</table>
			<?php } ?>
		</div>
		<a href="index.php" class="btn">Register</a>
	</div>

</body>
</html>