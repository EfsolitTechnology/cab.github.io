<!DOCTYPE html>
<html>
<head>
	<title>Search Data</title>
	<style>
		body{
			background-color: grey;

		}
		table,th,td{
			border: 2px solid black;
			width: 1100px;
			background-color: lightgreen;
		}
		.btn{
			width: 10%;
			height: 5%;
			font-size: 22px;
			padding: 0px;
		}

	</style>
</head>
<body>
	<center>
		<h1>search for a single data/Record frrom database</h1>
		<h2>Retrive/search/fetch/data from database</h2>


<div class="container">
	<form action="" method="POST">
		<input type="submit" name="search" class="btn" value="search data">
	</form>

	<table>
		<tr>
             <th>Name</th>
             <th>Mobile</th>
             <th>Email</th>
             <th>PickupLocation</th>
             <th>AirportLocation</th>
             <th>Cartype</th>
          </tr>

          <?php
          $connection = mysqli_connect("localhost","root");
          $db = mysqli_select_db($connection,'easytravuserdata');

          if(isset($_POST['search']))
          {
          	$id = $_POST['id'];

          	$query = "SELECT * From 'userinfodata' where id='id' ";
          	$query_run = mysqli_query($connection,$query);

          	while($row = mysqli_fetch_array($run))
          	 {
          		?>

          		<tr>
          			<td> <?php echo $row['Name']; ?></td>
          			<td> <?php echo $row['Mobile']; ?></td>
          			<td> <?php echo $row['Email']; ?></td>
          			<td> <?php echo $row['PickupLocation']; ?></td>
          			<td> <?php echo $row['AirportLocation']; ?></td>
          			<td> <?php echo $row['Cartype']; ?></td>
          		</tr>

          		<?php
          	}
          }


          ?>
		




	</table>
</div>

	</center>

</body>
</html>