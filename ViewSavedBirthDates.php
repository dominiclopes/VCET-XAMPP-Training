<html>


<head>
	<style>	
		div {
			margin:auto;
			text-align:right;
			width: 30%;
		}
		
		table {
			border-collapse: collapse;
			padding:100px;
			margin:auto;
			text-align:left;
			width: 30%;
		}

		th, td {
			border: 1px solid #ddd;
			padding: 8px;
		}

		tr:nth-child(even){background-color: #f2f2f2;}

		th {
			padding-top: 12px;
			padding-bottom: 12px;
			text-align: left;
			background-color: #4CAF50;
			color: white;
		}
	</style>
</head>


<body>

	<div>
	<a href="index.html">HomePage</a><br>
	</div>
	
	<table>
		<tr>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Birth Date</th>
		</tr>
		
		<?php
		require 'Connect.php';
		$result = mysqli_query($conn, "SELECT * FROM birthday_data");

		while($row = mysqli_fetch_array($result))
		{
			echo "<tr>";
			echo "<td>" . $row['first_name'] . "</td>";
			echo "<td>" . $row['last_name'] . "</td>";
			echo "<td>" . $row['birthdate'] . "</td>";
			echo "</tr>";
		}
		mysqli_close($conn);
		?>
	</table>

</body>


</html>